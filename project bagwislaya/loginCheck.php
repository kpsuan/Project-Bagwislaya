<?php
session_start(); 
include 'DBConnector.php';


if (isset ($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM loginform WHERE username = '$username' && password = '$pass' ";  
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row['username'] == $username){
            $_SESSION['logged_user'] = $row['name'];
            $_SESSION['logged_username'] = $row['username'];
            header("Location: welcome.php");
        }else{
            header("Location: login.php?error= Incorrect username password");
            exit();
        }
    }else{
        header("Location: login.php?error= Incorrect username password");
        exit();
    }
}
?>

