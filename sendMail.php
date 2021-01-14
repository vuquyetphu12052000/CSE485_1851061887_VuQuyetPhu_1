<?php

use PHPMailer\PHPMailer\PHPMailer;




require_once('mailer/PHPMailer.php');
require_once('mailer/SMTP.php');
require_once('mailer/Exception.php');

$mail = new PHPMailer();

//smtp settings

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "vuquyetphu12052000@gmail.com";
$mail->Password = "Phu21062001";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//email settings

$mail->isHTML(true);
$mail->setFrom($email);
$mail->addAddress($email);
$mail->Subject = ('Password Reset Code');
$mail->Body = ('Your password reset code is: ' .$code);
if($mail->send()){
  $status= "Send success";
  $response = "Email is sent !";

}
?>


