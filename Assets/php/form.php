<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify SMTP server
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'tewobstas@gmail.com';                // SMTP username
    $mail->Password   = 'Mariam.21';                       // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` for SMTPS
    $mail->Port       = 587;                              // TCP port to connect to

    // Recipients
    $mail->setFrom($email, $name);                        // Set the sender's email and name
    $mail->addAddress('tewobstas@gmail.com', 'Tewo');     // Send the email to your email address

    // Content
    $mail->isHTML(false);                                 // Set email format to plain text
    $mail->Subject = 'New Message from ' . $name;         // Set a subject
    $mail->Body    = $message;                            // Set the body content

    // Send email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

