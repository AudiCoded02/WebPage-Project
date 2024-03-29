<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//require these files
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
//if post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; // Retrieve the name from the form as well as email and message
    $email = $_POST['email'];
    $message = $_POST['message'];
    //new mail
    $mail = new PHPMailer(true);
    $mail->isSMTP();//set SMTP
    $mail->Host = 'smtp.gmail.com';//server
    $mail->SMTPAuth = true;//it is SMTP
    $mail->Username ='muhammad.umar.khan02@gmail.com';//to send to
    $mail->Password = 'oknj rscz mmxp weoq';//password (app password)
    $mail->SMTPSecure = 'ssl';//ssl
    $mail->Port = 465;
    $mail->setFrom($email, $name); // Use the name and email from the form
    $mail->addAddress('muhammad.umar.khan02@gmail.com'); // Add a recipient
    $mail->isHTML(true);
    $mail->Subject = 'New message from ' . $name;//subject lines
    $mail->Body = $message;//message
    // After sending the email
    if ($mail->send()) {
        echo 'sent successfully';
        header("Location: contact.php?form_sent=true");
        exit();
    } else {
        echo 'Error: Form did not sent.....Discarded';
    }



}
?>