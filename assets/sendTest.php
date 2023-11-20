<?php
session_start();

$name = $_POST['fullName'];
$phone = $_POST['phone'];
$result = $_POST['result'];

$radioButtonValue = $_POST['radioButton'];

$sumOfTest = 0;

$email_body = "<h3>Ονοματεπώνυμο : $name  </h3> <br>";
$email_body .= "<h3>Τηλέφωνο : $phone  </h3> <br>";
$email_body .= "<h3>Εμαθε την ιστοσελίδα μέσω : $radioButtonValue  </h3> <br>";

if (isset($_POST['extrovertsDataSummary'])){
    $extrovertsDataSummary = $_POST['extrovertsDataSummary'];
    $introvertsDataSummary = $_POST['introvertsDataSummary'];
    $email_body .= "<h3>Εσωστρεφής ή Εξωστρεφής;</h3> <br>";
    $email_body .= "<h2>Εξωστρεφής :$extrovertsDataSummary  </h3> <br>";
    $email_body .= "<h2>Εσωστρεφής : $introvertsDataSummary </h3> <br>";
}else{
    $email_body .= "<h3>Είσαι χαρούμενος από το επάγγελμα σου;</h3> <br>";
}

$email_body .= "<h2>Αποτελέσματα Τεστ : $result</h3> <br>";


$subject = $nameDisplayed = "Melissourgos Website | Τεστ Αξιολόγησης ";
$from = "autoinform@techins.gr";
$companyInfoEmail = "Melissourgoskonstantinos@gmail.com";


use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';


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
$mail->addAddress($companyInfoEmail, $nameDisplayed);
$mail->Subject = $subject;
$mail->Body = $email_body;

$mail->isHTML();
if (!$mail->send()) {
    echo json_encode([ "result" =>"failed"]);
}else{
    echo json_encode(["result" =>'success']);
}




?>