<?php
session_start();
require 'vendor/autoload.php'; // Include PHPMailer autoload file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mail.srv.lat@gmail.com'; // Gmail address PateKissaW1
$mail->Password = 'PateMouse22289'; // Gmail password
$mail->SMTPSecure = 'ssl'; 
$mail->Port = 465;


$mail->setFrom('mail.srv.lat@gmail.com', 'Yessir');
$mail->isHTML(true);
$mail->SMTPDebug = 2; // Enable verbose debug output

$mail->Subject = 'Please confirm your email address';
ini_set('display_errors', 1);   
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


