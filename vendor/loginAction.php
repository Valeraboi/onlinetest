<?php
session_start();
require "connectdb.php";
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];



if(isset($_POST['signin'])){
    $loginusers = mysqli_query($link, "SELECT * FROM `users` WHERE (`name` = '$name' OR `email` = '$email') AND `password` = '$password'");
    if(mysqli_num_rows($loginusers)>0){ 
    $user = mysqli_fetch_assoc($loginusers);
    $_SESSION['users'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'password' => $user['password'],
        'email' => $user['email'],
        'flag' => $user['flag'],
    ];


header("location: ../index.php");
}
else{ 
    $_SESSION["message"] = "Неправильная почта или пароль";
    header("location: ../login.php");
}
}
