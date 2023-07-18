<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Configure SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
$mail->SMTPAuth = true;
$mail->Username = 'bbstkwani@gmail.com'; // Replace with your SMTP username
$mail->Password = 'wenoecufmsbpdhhf'; // Replace with your SMTP password
$mail->SMTPSecure = 'ssl'; // Use 'ssl' if required
$mail->Port = 465; // Replace with the appropriate SMTP port

// Set the sender and recipient addresses
$mail->setFrom("$email"); // Replace with your email address and name
$mail->addAddress('bbstkwani@gmail.com'); // Replace with the recipient's email address and name

// Set the email subject and body
$mail->Subject =  $subject;
$mail->Body = '<div style="font-family: Arial, sans-serif; background-color: #f5f5f5; color: #333; padding: 20px;">';
$mail->Body .= '<h3 style="font-size: 20px; color: #555; margin-bottom: 10px;">New Contact Form Submission</h3>';
$mail->Body .= '<div style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Name:</strong> ' . $name . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Email:</strong> ' . $email . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Subject:</strong> ' . $subject . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Message:</strong> ' . $message . '</p>';
$mail->Body .= '</div>';
$mail->Body .= '</div>';

// Set the email content type to HTML
$mail->isHTML(true);


// Send the email
if ($mail->send()) {
  http_response_code(200); // Set HTTP response code to 200 (OK)
} else {
  http_response_code(500); // Set HTTP response code to 500 (Internal Server Error)
}
?>
