<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\PHPMailer\src\SMTP.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "nepal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $firstname = sanitize_input($_POST["firstname"]);
    $lastname = sanitize_input($_POST["lastname"]);
    $email = sanitize_input($_POST["Email"]);
    $duration_time = isset($_POST["duration_time"]) && $_POST["duration_time"] !== "" ? sanitize_input($_POST["duration_time"]) : NULL;
    $country = sanitize_input($_POST["country"]);
    $subject = sanitize_input($_POST["subject"]);

    // Insert data into the database
    $sql = "INSERT INTO web (firstname, lastname, email, duration_time, country, subject) VALUES ('$firstname', '$lastname', '$email', '$duration_time', '$country', '$subject')";

    if ($conn->query($sql) === TRUE) {
        // Email confirmation
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hyperprabhat@gmail.com';
            $mail->Password = 'kdkm ezun favl ztjo
            ';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('your_email@example.com', 'Travel Nepal');
            $mail->addAddress($email, $firstname . ' ' . $lastname);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Booking Confirmation';
            $mail->Body = "Dear $firstname $lastname,<br><br>Thank you for your booking. Here are your booking details:<br><br>Duration Time: $duration_time<br>Country: $country<br>Additional Information: $subject<br><br>We will get back to you soon.<br><br>Best regards,<br> HYPER TRAVEL";

            $mail->send();
            echo 'Booking successful. Confirmation email has been sent.';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
