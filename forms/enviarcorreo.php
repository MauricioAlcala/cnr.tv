<?php

require("../lib/PHPMailer/src/PHPMailer.php");
require("../lib/PHPMailer/src/SMTP.php");

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "mail.asesorsolarindependiente.com";
 $mail->Port = 465; //465  or 587
 $mail->IsHTML(true);
 $mail->Username = "contacto@asesorsolarindependiente.com";
 $mail->Password = "Robertosandoval";
 $mail->SetFrom("contacto@asesorsolarindependiente.com");
 $mail->Subject = "Contacto Desde : asesorsolarindependiente.com";
 
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 
 $mail->Body = "Nombre: {$name} {$lastname} <br> Telefono : {$phone} <br> Email: {$email} <br> Mensaje {$message}";
 $mail->AddAddress("contacto@asesorsolarindependiente.com");
 if(!$mail->Send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
 echo "OK";
 }

 ?>