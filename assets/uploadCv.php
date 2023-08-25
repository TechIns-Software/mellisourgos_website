<?php
$uniqueForm = 55;
$valid_extensions = array("pdf");
$message = 'Μη σύνηθες Λάθος';
if (isset($_FILES['file']['name'])) {
    session_start();
    /* Getting file name */
    $initialFilename = $_FILES['file']['name'];
    $type = substr($initialFilename, strpos($initialFilename, '.'));

    // Setting new name and to location wanted
    $filename = $uniqueForm.strtotime("now").$type;
    $directory = "cvs/";
    $location = $directory . $filename;

    $imageFileType = pathinfo($location, PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);


    /* Check file extension */
    if (!file_exists($directory)) {
        mkdir($directory, 0777, true);
    }
    if (in_array($imageFileType, $valid_extensions)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            $_SESSION['cvPath'] = $location;
        } else {
            $message = "Δεν μπόρεσε να ανέβει το αρχείο";
        }
    } else {
        $message = "Δεν βρέθηκε κατάληξη του αρχείου που να αντιστοιχεί σε pdf";
    }
} else {
    $message = "Δεν δόθηκε αρχείο";
}
echo $message;