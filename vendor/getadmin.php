<?php 
require 'connectdb.php';
$id = $_GET['id'];


if($_GET['flag']==1){
    mysqli_query($link,"UPDATE `users` SET `flag`= 0 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_GET['flag']==0){
    mysqli_query($link,"UPDATE `users` SET `flag`= 1 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}

