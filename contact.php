<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$message = "Όνομα: ";
$message .= urldecode(urldecode($_POST['name']));
$message .= "<br>Email: ";
$message .= urldecode(urldecode($_POST['email']));
$message .= "<br>Μήνυμα: ";
$message .= urldecode(urldecode($_POST['message']));


$subject =  $_POST['subject'];




$to = "spanosnicolaos@gmail.com";
$from= "info@nickport.com";


use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$nameDisplayed = 'NickPort Website';
$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail ->CharSet = "UTF-8";
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = 'Spanioscezar556!';
$mail->setFrom($from, $nameDisplayed);
$mail->addReplyTo($from, $nameDisplayed);
$mail->addAddress($to, $to);


$mail->Subject = $subject;
$mail->Body = $message;
$mail->isHTML();
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}