<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["cf-name"];
    $email = $_POST["cf-email"];
    $message = $_POST["cf-message"];

    // Validate the data (you should add more validation)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the required fields.";
        exit;
    }

    // Recipient email address
    $to = "Alimadadizadeh1995@gmail.com"; // Replace with your email address

    // Email subject
    $subject = "New Contact Form Submission from $name";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}
?>
