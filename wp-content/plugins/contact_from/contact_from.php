<?php
/*
Plugin Name: Formularz Kontaktowy
Description: Plugin wyświetla prosty formularz kontaktowy.
*/

// Dodawanie menu do panelu administracyjnego
function contact_form_add_menu() {
    add_menu_page(
        'Formularz Kontaktowy',
        'Formularz Kontaktowy',
        'manage_options',
        'contact-form',
        'contact_form_page',
        'dashicons-email',
        75
    );
}
add_action('admin_menu', 'contact_form_add_menu');

// Funkcja generująca stronę formularza kontaktowego
function contact_form_page() {
    // Sprawdzenie, czy formularz został wysłany
    if (isset($_POST['contact_submit'])) {
        $name = sanitize_text_field($_POST['contact_name']);
        $email = sanitize_email($_POST['contact_email']);
        $message = sanitize_textarea_field($_POST['contact_message']);

        // Walidacja pól formularza
        $errors = validate_contact_form($name, $email, $message);

        if (empty($errors)) {
            // Przykład obsługi wysłania wiadomości, można dostosować do własnych potrzeb
            $to = 'adres@domena.pl';
            $subject = 'Nowa wiadomość z formularza kontaktowego';
            $body = "Od: $name\n";
            $body .= "Email: $email\n\n";
            $body .= "Wiadomość:\n$message\n";
            $headers = array('Content-Type: text/plain; charset=UTF-8');

            if (wp_mail($to, $subject, $body, $headers)) {
                $success_message = 'Wiadomość została wysłana. Dziękujemy!';
                $name = '';
                $email = '';
                $message = '';
            } else {
                $error_message = 'Wystąpił problem podczas wysyłania wiadomości. Spróbuj ponownie.';
            }
        }
    }

    // Wyświetlanie formularza kontaktowego
    $form = '<div class="contact-form">';
    $form .= '<h2>Formularz Kontaktowy</h2>';

    if (isset($success_message)) {
        $form .= '<p class="contact-success">' . $success_message . '</p>';
    } elseif (isset($error_message)) {
        $form .= '<p class="contact-error">' . $error_message . '</p>';
    }

    $form .= '<form method="post" action="">';
    $form .= '<label for="contact_name">Imię i nazwisko:</label>';
    $form .= '<input type="text" name="contact_name" id="contact_name" value="' . esc_attr($name) . '" required><br>';
    $form .= '<label for="contact_email">Adres email:</label>';
    $form .= '<input type="email" name="contact_email" id="contact_email" value="' . esc_attr($email) . '" required><br>';
    $form .= '<label for="contact_message">Wiadomość:</label>';
    $form .= '<textarea name="contact_message" id="contact_message" required>' . esc_textarea($message) . '</textarea><br>';
    $form .= '<input type="submit" name="contact_submit" value="Wyślij">';
    $form .= '</form>';
    $form .= '</div>';

    if (!empty($errors)) {
        $form .= '<ul class="contact-errors">';
        foreach ($errors as $error) {
            $form .= '<li>' . $error . '</li>';
        }
        $form .= '</ul>';
    }

    return $form;
}
add_shortcode('contact_form', 'contact_form_page');

// Funkcja walidująca pola formularza kontaktowego
function validate_contact_form($name, $email, $message) {
    $errors = array();

    if (empty($name)) {
        $errors[] = 'Podaj swoje imię i nazwisko.';
    }

    if (!is_email($email)) {
        $errors[] = 'Podaj poprawny adres email.';
    }

    if (empty($message)) {
        $errors[] = 'Wpisz treść wiadomości.';
    }

    return $errors;
}
