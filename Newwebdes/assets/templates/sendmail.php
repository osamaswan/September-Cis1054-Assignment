<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$notify = '';

if(isset($_POST['send mail'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedtype = $_POST['TypeofF'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'youremail@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = '********'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('youremail@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('dkhkflakd@gmail.com'); // Email address where to receive emails (used 10 minutemail chnage the email to receive somewhere else)

    $mail->isHTML(true);
    $mail->Subject = $feedtype;
    $mail->Body = "Email: $email <br>Message : $message";

    $mail->send();
    $notify = '<div class="mail-success">
                 <span>Message Sent.</span>
                </div>';
  } catch (Exception $e){
    $notify = '<div class="mail-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>