<?php
session_start();
$formInfos = $_POST['infos'];
$name = $clientEmail = $phone = $age = $highSchool  = '';
if (isset($_SESSION['cvPath'])){
    $cvData = $_SESSION['cvPath'];
}else{
    $cvData = -1;
}


$name = $formInfos[0]['value'];
$clientEmail = $formInfos[1]['value'];
$phone = $formInfos[2]['value'];



$email_body = "<h3>Ονοματεπώνυμο : $name  </h3> <br>";
$email_body .= "<h3>Email : $clientEmail  </h3> <br>";
$email_body .= "<h3>Τηλέφωνο : $phone  </h3> <br>";


//$client_email_body = "<h4> Αγαπητέ/ή $name </h4> <br>";
//$client_email_body .= "<p> Θα θέλαμε να ευχαριστήσουμε θερμά για το ενδιαφέρον που δείξατε για συνεργασία.
//Θα επικοινωνήσει σύντομα ένας εκπρόσωπος μας.
//Ανυπομονούμε να σας βοηθήσουμε και να σας παρέχουμε την υποστήριξη που χρειάζεστε.</p>";


$subject = "Melissourgos Website | Φόρμα Επικοινωνίας Καριέρα";
$from = "autoinform@techins.gr";
$companyInfoEmail = "nickspanosf1@gmail.com";

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

//$nameDisplayed = 'Adamakis Website ';
//$mailClient = new PHPMailer;
//$mailClient->SMTPDebug = 0;
//$mailClient ->CharSet = "UTF-8";
//$mailClient->isSMTP();
//$mailClient->Host = 'smtp.hostinger.com';
//$mailClient->Port = 587;
//$mailClient->SMTPAuth = true;
//$mailClient->Username = $from;
//$mailClient->Password = 'gsR5$tag';
//$mailClient->setFrom($from, $nameDisplayed);
//$mailClient->addReplyTo($from, $nameDisplayed);
//$mailClient->addAddress($clientEmail, $nameDisplayed);
//$mailClient->Subject = $subject;
//$mailClient->Body = $client_email_body;
//$mailClient->isHTML();
//$mailClient->send();

$nameDisplayed = 'Melissourgos Website | Φόρμα Επικοινωνίας';
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
if ($cvData != -1){
    $mail->addAttachment($cvData, $name.'_cv.pdf');
}
$mail->isHTML();
if (!$mail->send()) {
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo json_encode([ "result" =>"failed"]);
}else{
    echo json_encode(["result" =>'success']);
}



// Deletes File From the server
if(file_exists($cvData)) {
    unlink($cvData);
}

?>