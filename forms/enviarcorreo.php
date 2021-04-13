<?php

require("../lib/PHPMailer/src/PHPMailer.php");
require("../lib/PHPMailer/src/SMTP.php");

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "mail.cnrnoticias.tv";
 $mail->Port = 465; //465  or 587
 $mail->IsHTML(true);
 $mail->Username = "contacto@cnrnoticias.tv";
 $mail->Password = "CNRNoticiasEstatal73";
 $mail->SetFrom("contacto@cnrnoticias.tv");
 $mail->Subject = "Contacto Desde : cnrnoticias.tv";
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];
 
 $mail->Body = "Nombre: {$name} <br> Email: {$email} <br> Telefono : {$phone} <br> Mensaje : {$message}";
 $mail->AddAddress("contacto@cnrnoticias.tv");
 if(!$mail->Send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
 echo "OK";
 }

 ?>
