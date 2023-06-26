<?php
/*
Plugin Name: Kalkulator Makroskładników
Description: Plugin oblicza kaloryczność, podaż białka, węglowodanów i tłuszczów na podstawie danych użytkownika i celu.
*/

// Dodawanie menu do panelu administracyjnego
function macro_calculator_add_menu() {
    add_menu_page(
        'Kalkulator Makroskładników',
        'Kalkulator Makroskładników',
        'manage_options',
        'macro-calculator',
        'macro_calculator_page',
        'dashicons-chart-area',
        75
    );
}
add_action('admin_menu', 'macro_calculator_add_menu');

// Funkcja generująca stronę kalkulatora makroskładników
function macro_calculator_page() {
    // Sprawdzenie, czy formularz został wysłany
    if (isset($_POST['macro_submit'])) {
        $weight = floatval(sanitize_text_field($_POST['macro_weight']));
        $height = floatval(sanitize_text_field($_POST['macro_height']));
        $age = intval(sanitize_text_field($_POST['macro_age']));
        $gender = sanitize_text_field($_POST['macro_gender']);
        $activity_level = sanitize_text_field($_POST['macro_activity_level']);
        $goal = sanitize_text_field($_POST['macro_goal']);

        // Walidacja danych
        if (!is_numeric($weight) || $weight <= 0) {
            $error = 'Błąd: Nieprawidłowa waga.';
        } elseif (!is_numeric($height) || $height <= 0) {
            $error = 'Błąd: Nieprawidłowy wzrost.';
        } elseif (!is_numeric($age) || $age <= 0) {
            $error = 'Błąd: Nieprawidłowy wiek.';
        } elseif ($gender !== 'male' && $gender !== 'female') {
            $error = 'Błąd: Nieprawidłowa płeć.';
        } elseif (!is_numeric($activity_level) || $activity_level <= 0) {
            $error = 'Błąd: Nieprawidłowy poziom aktywności.';
        } elseif ($goal !== 'maintenance' && $goal !== 'weight_loss' && $goal !== 'muscle_gain' && $goal !== 'weight_gain') {
            $error = 'Błąd: Nieprawidłowy cel.';
        }

        // Jeżeli wystąpił błąd, wyświetl komunikat
        if (isset($error)) {
            $result = '<div class="macro-result">';
            $result .= '<p>' . $error . '</p>';
            $result .= '</div>';
            return $result;
        }

        // Wywołanie funkcji obliczającej makroskładniki
        $macros = calculate_macros($weight, $height, $age, $gender, $activity_level, $goal);

        // Wyświetlenie wyników
        $result = '<div class="macro-result">';
        $result .= '<h2>Twoje Makroskładniki:</h2>';
        $result .= '<p>Kalorie: ' . $macros['calories'] . ' kcal/dzień</p>';
        $result .= '<p>Białko: ' . $macros['protein'] . ' g/dzień</p>';
        $result .= '<p>Węglowodany: ' . $macros['carbs'] . ' g/dzień</p>';
        $result .= '<p>Tłuszcze: ' . $macros['fat'] . ' g/dzień</p>';
        $result .= '</div>';

        return $result;
    }

    // Wyświetlenie formularza
    $form = '<div class="macro-calculator">';
    $form .= '<h2>Kalkulator Makroskładników</h2>';
    $form .= '<form method="post" action="">';
    $form .= '<label for="macro_weight">Waga (kg):</label>';
    $form .= '<input type="text" name="macro_weight" id="macro_weight" required><br>';
    $form .= '<label for="macro_height">Wzrost (cm):</label>';
    $form .= '<input type="text" name="macro_height" id="macro_height" required><br>';
    $form .= '<label for="macro_age">Wiek:</label>';
    $form .= '<input type="text" name="macro_age" id="macro_age" required><br>';
    $form .= '<label for="macro_gender">Płeć:</label>';
    $form .= '<select name="macro_gender" id="macro_gender" required>';
    $form .= '<option value="male">Mężczyzna</option>';
    $form .= '<option value="female">Kobieta</option>';
    $form .= '</select><br>';
    $form .= '<label for="macro_activity_level">Poziom aktywności:</label>';
    $form .= '<select name="macro_activity_level" id="macro_activity_level" required>';
    $form .= '<option value="1.2">Siedzący tryb życia, brak aktywności fizycznej</option>';
    $form .= '<option value="1.375">Lekka aktywność fizyczna (ćwiczenia 1-3 razy w tygodniu)</option>';
    $form .= '<option value="1.55">Średnia aktywność fizyczna (ćwiczenia 3-5 razy w tygodniu)</option>';
    $form .= '<option value="1.725">Wysoka aktywność fizyczna (ćwiczenia 6-7 razy w tygodniu)</option>';
    $form .= '<option value="1.9">Bardzo wysoka aktywność fizyczna (ćwiczenia 2 razy dziennie lub ciężki fizyczny tryb pracy)</option>';
    $form .= '</select><br>';
    $form .= '<label for="macro_goal">Cel:</label>';
    $form .= '<select name="macro_goal" id="macro_goal" required>';
    $form .= '<option value="maintenance">Utrzymanie wagi</option>';
    $form .= '<option value="weight_loss">Schudnięcie</option>';
    $form .= '<option value="muscle_gain">Nabranie mięśni</option>';
    $form .= '<option value="weight_gain">Wejście na masę</option>';
    $form .= '</select><br>';
    $form .= '<input type="submit" name="macro_submit" value="Oblicz Makroskładniki">';
    $form .= '</form>';
    $form .= '</div>';

    return $form;
}
add_shortcode('macro_calculator', 'macro_calculator_page');

// Funkcja obliczająca makroskładniki
function calculate_macros($weight, $height, $age, $gender, $activity_level, $goal) {
    // Obliczanie podstawowej przemiany materii (BMR)
    if ($gender === 'male') {
        $bmr = 66 + (13.75 * $weight) + (5 * $height) - (6.75 * $age);
    } elseif ($gender === 'female') {
        $bmr = 655 + (9.56 * $weight) + (1.85 * $height) - (4.68 * $age);
    } else {
        return 'Błąd: Nieprawidłowa płeć.';
    }

    // Obliczanie kaloryczności na podstawie celu
    if ($goal === 'maintenance') {
        $calories = $bmr * $activity_level;
    } elseif ($goal === 'weight_loss') {
        $calories = $bmr * $activity_level - 500;
    } elseif ($goal === 'muscle_gain') {
        $calories = $bmr * $activity_level + 300;
    } elseif ($goal === 'weight_gain') {
        $calories = $bmr * $activity_level + 500;
    } else {
        return 'Błąd: Nieprawidłowy cel.';
    }

    // Obliczanie podaży białka, węglowodanów i tłuszczów
    $protein = 2.2 * $weight;
    $carbs = ($calories * 0.4) / 4;
    $fat = ($calories * 0.3) / 9;

    // Zaokrąglanie wartości
    $calories = round($calories);
    $protein = round($protein);
    $carbs = round($carbs);
    $fat = round($fat);

    // Zwracanie wyników w tablicy
    $macros = array(
        'calories' => $calories,
        'protein' => $protein,
        'carbs' => $carbs,
        'fat' => $fat
    );

    return $macros;
}