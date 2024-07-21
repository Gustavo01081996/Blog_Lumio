<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$from = "nome@dominio.com.br"; 


$headers =  "MIME-Version: 1.1\n"; 
$headers .= "Content-type: text/html; charset=utf8\n";
$headers .= "From: Meu Site <$from>\n";
$headers .= "Return-Path: $from\n";
$headers .= "Reply-to: $email\n"; 

mail($email, $subject, $message, $headers, $from);

header("Location: thanks.php");
