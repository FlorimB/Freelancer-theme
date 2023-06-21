<?php

function include_stylesheet()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}

function include_script()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1', true);
    $data = array(
        'freelancerName' => get_bloginfo('name')
    );
    wp_localize_script('script', 'freelancerData', $data);
}



function send_message()
{
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $usersName = sanitize_text_field($_POST['name']);
        $usersEmail = sanitize_email($_POST['email']);
        $usersMessage = sanitize_text_field($_POST['message']);

        // Retrieve the recipient email address using ACF or specify it directly
        $to = 'bulicaflorim@gmail.com';

        // Set the email subject
        $subject = 'New Contact form submitted';

        // Set the email headers
        $headers = "From: $usersName <$usersEmail>" . "\r\n";

        // Build the email content
        $body = "Name: $usersName \nEmail: $usersEmail \nMessage: $usersMessage";

        // Send the email
        $sent = wp_mail($to, $subject, $body, $headers);

        if ($sent) {
            // Redirect to a success page or display a success message
            wp_redirect(home_url());
            exit;
        } else {
            // Redirect to an error page or display an error message
            wp_redirect(home_url('/Error.php/'));
            exit;
        }
    }
}
add_action('init', 'send_message');


add_action('wp_enqueue_scripts', 'include_stylesheet');
add_action('wp_enqueue_scripts', 'include_script');
add_theme_support('post-thumbnails');


register_nav_menus(array(
    'header' => 'primary',
    'footer' => 'footer'
));