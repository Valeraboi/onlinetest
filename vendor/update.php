<?php


require_once 'connectdb.php';


$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];


mysqli_query($link, "UPDATE `users` SET `name` = '$name', `password` = '$password', `email` = '$email' WHERE `users`.`id` = '$id'");


header('Location: adminusers.php');