<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["cd-email"]), FILTER_SANITIZE_EMAIL);


        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "hello@purenine.com";

        // Set the email subject.
        $subject = "A New E-Mail have subscribe to your website.";

        // Build the email content.
        $email_content .= "Email: $email\n\n";


        // Send the email.
        if (mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>