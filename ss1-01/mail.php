<?php

require_once "./vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'f1429939354c6e'; 
$mail->Password = '43429413ac1a6b';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

$mail->setFrom('35229da1bf-2e4d33@inbox.mailtrap.io', 'Mailtrap');
$mail->addReplyTo('35229da1bf-2e4d33@inbox.mailtrap.io', 'Mailtrap');
$mail->addAddress('jakub.trejbal@student.ossp.cz', 'Tim');
$mail->addCC('cc1@example.com', 'Elena');
$mail->addBCC('bcc1@example.com', 'Alex');


$mail->Subject = 'Test Email via Mailtrap SMTP using PHPMailer';
$mail->isHTML(true);

$mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p>";
$mail->Body = $mailContent;

if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>