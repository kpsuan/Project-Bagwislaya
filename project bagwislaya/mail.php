<?php
include 'DBConnector.php';

if (isset ($_POST['name']) && isset($_POST['email']) && isset ($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $insert_Values = $conn->query ("INSERT INTO `contactform`(`name`, `email`, `subject`, `message`) 
    VALUES (' $name','$email','$subject',' $message')");

    if($insert_Values == TRUE){
        header("location:index.php?mailsent");
    }
}
?>

