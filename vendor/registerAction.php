<?php
session_start();
require "connectdb.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['submit'])){
    $checkuser = mysqli_query($link, "SELECT 'email' FROM 'user' WHERE 'email' = '$email'");
    if(mysqli_num_rows($chechuser) > 0){
        $_SESSION["message"] = "Пользователь с такой почтой уже существует";
        header("location: " .$_SERVER["HTTP_REFERER"]);
    }
}

else{
   
    $addusers = mysqli_query($link, "INSERT INTO `users` (`name`, `email`, `password`, `flag`) VALUES ('$name', '$email', '$password',0)");
    if($addusers){
    $_SESSION["message"] = "Пользователь успешно зарегистрирован";
    header("location: ../login.php");
}
}


