<?php
session_start();

$name = $_POST['fullName'];
$phone = $_POST['phone'];
$result = $_POST['result'];
$extrovertsDataSummary = $_POST['extrovertsDataSummary'];
$introvertsDataSummary = $_POST['introvertsDataSummary'];

$sumOfTest = 0;

$email_body = "<h3>Ονοματεπώνυμο : $name  </h3> <br>";
$email_body .= "<h3>Τηλέφωνο : $phone  </h3> <br>";
$email_body .= "<h2>Αποτελέσματα Τεστ : $result</h3> <br>";
$email_body .= "<h2>Εσωστρεφής :$extrovertsDataSummary  </h3> <br>";
$email_body .= "<h2>Εξωστρεφής : $introvertsDataSummary </h3> <br>";


//foreach ($formInfos as $index => $formInfo){
//    var_dump($formInfo);
//    $label = $formInfo['name'];
//    $value2 = $formInfo['value'];
//
//    $email_body .= "<h4>$label :  $value2 </h3> <br>";
//    $sumOfTest =  $sumOfTest + intval($value2);
//}
//
//$email_body .= "<h2>Τελικο Σκορ: $sumOfTest  </h3>  ";



$subject = $nameDisplayed = "Melissourgos Website | Τεστ Αξιολόγησης ";
$from = "autoinform@techins.gr";
$companyInfoEmail = "nickspanosf1@gmail.com";

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