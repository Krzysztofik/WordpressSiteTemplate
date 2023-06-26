<?php
/*
Plugin Name: Kalkulator TDEE
Description: Plugin oblicza TDEE na podstawie danych użytkownika.
*/

// Dodawanie menu do panelu administracyjnego
function tdee_add_menu() {
    add_menu_page(
        'Kalkulator TDEE',
        'Kalkulator TDEE',
        'manage_options',
        'tdee-calculator',
        'tdee_calculator_page',
        'dashicons-calculator',
        75
    );
}
add_action('admin_menu', 'tdee_add_menu');

// Funkcja generująca stronę kalkulatora TDEE
function tdee_calculator_page() {
    // Sprawdzenie, czy formularz został wysłany
    if (isset($_POST['tdee_submit'])) {
        $weight = floatval($_POST['tdee_weight']);
        $height = floatval($_POST['tdee_height']);
        $age = intval($_POST['tdee_age']);
        $gender = $_POST['tdee_gender'];
        $activity_level = $_POST['tdee_activity_level'];

        // Wywołanie funkcji walidującej dane
        $errors = validate_tdee_data($weight, $height, $age, $gender, $activity_level);

        if (empty($errors)) {
            // Wywołanie funkcji obliczającej TDEE
            $tdee = calculate_tdee($weight, $height, $age, $gender, $activity_level);

            // Wyświetlenie wyniku
            $result = '<div class="tdee-result">';
            $result .= '<h2>Twój TDEE:</h2>';
            $result .= '<p>' . $tdee . ' kcal/dzień</p>';
            $result .= '</div>';

            return $result;
        } else {
            // Wyświetlenie komunikatów o błędach
            $error_message = '<div class="tdee-errors">';
            $error_message .= '<h2>Wystąpiły błędy:</h2>';
            $error_message .= '<ul>';
            foreach ($errors as $error) {
                $error_message .= '<li>' . $error . '</li>';
            }
            $error_message .= '</ul>';
            $error_message .= '</div>';

            return $error_message;
        }
    }

    // Wyświetlenie formularza
    $form = '<div class="tdee-calculator">';
    $form .= '<h2>Kalkulator TDEE</h2>';
    $form .= '<form method="post" action="">';
    $form .= '<label for="tdee_weight">Waga (kg):</label>';
    $form .= '<input type="text" name="tdee_weight" id="tdee_weight" required><br>';
    $form .= '<label for="tdee_height">Wzrost (cm):</label>';
    $form .= '<input type="text" name="tdee_height" id="tdee_height" required><br>';
    $form .= '<label for="tdee_age">Wiek:</label>';
    $form .= '<input type="text" name="tdee_age" id="tdee_age" required><br>';
    $form .= '<label for="tdee_gender">Płeć:</label>';
    $form .= '<select name="tdee_gender" id="tdee_gender" required>';
    $form .= '<option value="male">Mężczyzna</option>';
    $form .= '<option value="female">Kobieta</option>';
    $form .= '</select><br>';
    $form .= '<label for="tdee_activity_level">Poziom aktywności:</label>';
    $form .= '<select name="tdee_activity_level" id="tdee_activity_level" required>';
    $form .= '<option value="1.2">Siedzący tryb życia, brak aktywności fizycznej</option>';
    $form .= '<option value="1.375">Lekka aktywność fizyczna (ćwiczenia 1-3 razy w tygodniu)</option>';
    $form .= '<option value="1.55">Średnia aktywność fizyczna (ćwiczenia 3-5 razy w tygodniu)</option>';
    $form .= '<option value="1.725">Wysoka aktywność fizyczna (ćwiczenia 6-7 razy w tygodniu)</option>';
    $form .= '<option value="1.9">Bardzo wysoka aktywność fizyczna (ćwiczenia 2 razy dziennie lub ciężki fizyczny tryb pracy)</option>';
    $form .= '</select><br>';
    $form .= '<input type="submit" name="tdee_submit" value="Oblicz TDEE">';
    $form .= '</form>';
    $form .= '</div>';

    return $form;
}
add_shortcode('tdee_calculator', 'tdee_calculator_page');

// Funkcja walidująca dane
function validate_tdee_data($weight, $height, $age, $gender, $activity_level) {
    $errors = array();

    if (!is_numeric($weight) || $weight <= 0) {
        $errors[] = 'Wprowadź prawidłową wartość wagi.';
    }

    if (!is_numeric($height) || $height <= 0) {
        $errors[] = 'Wprowadź prawidłową wartość wzrostu.';
    }

    if (!is_numeric($age) || $age <= 0) {
        $errors[] = 'Wprowadź prawidłową wartość wieku.';
    }

    if ($gender !== 'male' && $gender !== 'female') {
        $errors[] = 'Wybierz prawidłową płeć.';
    }

    if (!is_numeric($activity_level) || $activity_level <= 0) {
        $errors[] = 'Wybierz prawidłowy poziom aktywności.';
    }

    return $errors;
}

// Funkcja obliczająca TDEE
function calculate_tdee($weight, $height, $age, $gender, $activity_level) {
    if ($gender === 'male') {
        $bmr = 66 + (13.75 * $weight) + (5 * $height) - (6.75 * $age);
    } elseif ($gender === 'female') {
        $bmr = 655 + (9.56 * $weight) + (1.85 * $height) - (4.68 * $age);
    } else {
        return 'Błąd: Nieprawidłowa płeć.';
    }

    $tdee = $bmr * $activity_level;
    $tdee = round($tdee);

    return $tdee;
}
