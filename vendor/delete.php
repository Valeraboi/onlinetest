<?php


require_once 'connectdb.php';


$id = $_GET['id'];


mysqli_query($link, "DELETE FROM `users` WHERE `users`.`id` = '$id'");


header('Location: adminusers.php');