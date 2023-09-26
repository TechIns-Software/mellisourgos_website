<?php


$message = "Όνομα: ";
$message .= urldecode(urldecode($_POST['fullName']));
$message .= "<br>Email: ";
$message .= urldecode(urldecode($_POST['email']));

$message .= "<br>Κινητό: ";
$message .= urldecode(urldecode($_POST['phone']));

$message .= "<br>Μήνυμα: ";
$message .= urldecode(urldecode($_POST['message']));


$to = "Melissourgoskonstantinos@gmail.com";
$from= "autoinform@techins.gr";

$subject = "Φόρμα Επικοινωνίας Website";


use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
$nameDisplayed = 'Φόρμα Επικοινωνίας Website | Melissourgos';
$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail ->CharSet = "UTF-8";
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = 'gsR5$tag';
$mail->setFrom($from, $nameDisplayed);
$mail->addReplyTo($from, $nameDisplayed);
$mail->addAddress($to, $to);


$mail->Subject = $subject;
$mail->Body = $message;
$mail->isHTML();
if (!$mail->send()) {
echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo json_encode([false,'Αποτυχία αποστολή φόρμας']);
    return;
}
echo json_encode([true,'Επιτυχής Αποστολή φόρμας']);
return;