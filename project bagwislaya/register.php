<?php
session_start(); 
include 'DBConnector.php';


if (isset ($_POST['name']) && isset($_POST['user']) && isset ($_POST['password'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM `loginform` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        header("Location: login.php?error= User already exist!");
        exit();
    }
    else {
        $insert_Values = "INSERT INTO `loginform`(`name`, `username`, `password`) 
        VALUES('$name', '$username' , '$pass')";
        mysqli_query($conn, $insert_Values);
        header("Location: login.php?success= User now registered!");

    }
}
?>

