<?php

/*
 * Script for sending E-Mail messages.
 * 
 * Note: Please edit $sendTo variable value to your email address.
 * 
 */

// please change this to your E-Mail address
$sendTo = "your@email.com";
$recaptcha = true; // set to false to disable captcha
$secret_key = "SECRET-KEY";
$action = $_POST['action'];

if ($action == 'newsletter') {

    $recaptcha = false; // set to false to disable captcha
    $email = strip_tags(isset($_POST['your-email']) ? $_POST['your-email'] : '' );

    // you can change default subject for Contact E-Mail here
    $subject = 'Newsletter subscription: ' . $email;

    $message = "Email: " . $email . "\r\n";

    if ($email == "") {
        echo "There was problem while sending E-Mail. Please verify entered data and try again!";
        exit();
    }

    $headers = 'From: Newsletter subscription<' . $email . ">\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
} else if ($action == 'contact-us' || $action == 'comment-form') {

    $name = strip_tags(isset($_POST['your-name']) ? $_POST['your-name'] : '' );
    $email = strip_tags(isset($_POST['your-email']) ? $_POST['your-email'] : '' );

    if ($name == "" || $email == "") {
        echo "There was problem while sending E-Mail. Please verify entered data and try again!";
        exit();
    }
    if ($action == 'contact-us') {
        $subject = "New message!";
    } else if ($action == 'comment-form'){
        $subject = "New comment!";
    }


    $message = '';

    foreach ($_POST as $key => $field) {
        if ($key == "action" || $key == "g-recaptcha-response") {
            continue;
        }
        $key = str_replace(array("-", "_"), " ", $key);

        $key = ucfirst($key);

        $message .= strip_tags($key) . ": " . strip_tags($field) . "\r\n";
    }

    $headers = 'From: ' . $name . '<' . $email . ">\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
}

// reCaptcha
if ($recaptcha) {
    if (isset($_POST['g-recaptcha-response']))
        $captcha = strip_tags($_POST['g-recaptcha-response']);

    if (!$captcha) {
        echo 'Please check the the captcha form.';
        exit;
    }

    $request_url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
    $response = json_decode(file_get_contents($request_url), true);

    if ($response['success'] == false) {
        echo 'Captcha is not correct. Are you human?';
        exit;
    }
}

/**
 * Validate form email
 * @param  email
 * @return filtered data, or FALSE if the filter fails
 */
function valid_email($email) {
    return !!filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (valid_email($email)) {
    if (mail($sendTo, $subject, $message, $headers)) {
        echo "Message sent succesfully.";
    } else {
        echo "There was problem while sending E-Mail.";
    }
} else {
    echo "Please enter valid email address.";
}
?>