<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library
//require 'path/to/PHPMailer/PHPMailerAutoload.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];

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
$mail->Subject = 'New Booking';

// Define the email body with HTML formatting
$mail->Body = '<html><body style="font-family: Arial, sans-serif; background-color: #f5f5f5; color: #333; padding: 20px;">';
$mail->Body .= '<h2 style="font-size: 24px; color: #555; margin-bottom: 10px;">New Booking</h2>';
$mail->Body .= '<div style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Name:</strong> ' . $name . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Email:</strong> ' . $email . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Description:</strong> ' . $description . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Date:</strong> ' . $date . '</p>';
$mail->Body .= '<p style="font-size: 16px; margin-bottom: 10px;"><strong>Time:</strong> ' . $time . '</p>';
$mail->Body .= '</div>';
$mail->Body .= '</body></html>';

// Set the email content type to HTML
$mail->isHTML(true);


// Send the email
if ($mail->send()) {
  // Include the database connection file
  require 'db_connection.php';

  // Prepare the SQL statement
  $sql = "INSERT INTO bookings (name, email, description, date, time) VALUES (?, ?, ?, ?, ?)";

  // Prepare and execute the statement
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$name, $email, $description, $date, $time]);

  // Check if the query was successful
  if ($stmt->rowCount() > 0) {
    // Query executed successfully
    echo 'Booking submitted successfully. Confirmation email sent.';
  } else {
    // Query failed
    echo 'Failed to submit booking. Please try again.';
  }
} else {
  echo 'Failed to submit booking. Please try again.';
}
?>
