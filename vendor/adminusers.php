<?php
session_start();
require "connectdb.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title>Конструктор тестов</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
		
        <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/elegant-line-icons.css">
        <link rel="stylesheet" href="../assets/css/elegant-font-icons.css">
        <link rel="stylesheet" href="../assets/css/saasbiz-icons.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/slicknav.min.css">
        <link rel="stylesheet" href="../assets/css/pricing-table.css">
        <link rel="stylesheet" href="../assets/css/odometer.min.css">
        <link rel="stylesheet" href="../assets/css/venobox/venobox.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <style>
        .admin-container{
            margin-top: 120px;
            color: black;
            
          
        }
        </style>

    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div>
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar ">
                    <a href="../index.php" class="navbar-brand"><img src="../assets/img/logo1.png" alt="logo"></a>
                    <div class="d-flex menu-wrap">
                       <div id="mainmenu" class="mainmenu">
                           <ul class="nav">
                               <li><a class="nav-link" href="../index.php">Главная</a></li>
                                <li><a href="#">Список пользователей</a></li>
                                <li><a href="tests.php">Тесты</a></li> 
                                                          
                                <li>
                                    <?php if (!empty($_SESSION['users'])) { ?>
                                    <a href="exit.php">Выйти</a>
                                <?php } else { ?>
                                    <a href="login.php">Авторизация</a>
                                <?php } ?>
                            </li>
                            </ul>
                       </div>
                      
                    </div>
                </nav>
            </div>
		</header> 
    <body>
        <div class="container admin-container">
            <div class="row">
                <div class="col-md-12">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Пароль</th>
            <th>Почта</th>
            <th>Статус</th>
        </tr>

        <?php

            $users = mysqli_query($link, "SELECT * FROM `users`");
            $users = mysqli_fetch_all($users);

            foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= $user[0] ?></td>
                        <td><?= $user[1] ?></td>
                        <td><?= $user[2] ?></td>
                        <td><?= $user[3] ?></td>
                        <td><?= $user[4] ?></td>
                        <td><a href="updateadmin.php?id=<?= $user[0] ?>">Изменить</a><br>
                        <a style="color: red;" href="delete.php?id=<?= $user[0] ?>">Удалить</a><br>
                        <a  href="getadmin.php?id=<?= $user[0] ?>">Выдать админку</a><br>
                        <a style="color: red;" href="getadmin.php?flag=1&id=<?= $user[0] ?>">Убрать админку</a><br>
                    </td>

                    </tr>
                <?php
            }
        ?>
        
    </table>
        </div>
        </div>
        </div>
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
		<script src="../assets/js/vendor/bootstrap.min.js"></script>
		<script src="../assets/js/vendor/tether.min.js"></script>
		<script src="../assets/js/vendor/jquery.slicknav.min.js"></script>
		<script src="../assets/js/vendor/owl.carousel.min.js"></script>
		<script src="../assets/js/vendor/smooth-scroll.min.js"></script>
        <script src="../assets/js/vendor/venobox.min.js"></script>
		<script src="../assets/js/vendor/jquery.ajaxchimp.min.js"></script>
		<script src="../assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
        <script src="../assets/js/vendor/jquery.nice-select.min.js"></script>
        <script src="../assets/js/vendor/pricing-switcher.js"></script>
        <script src="../assets/js/vendor/waypoints.min.js"></script>
        <script src="../assets/js/vendor/odometer.min.js"></script>
		<script src="../assets/js/vendor/wow.min.js"></script>
		<script src="../assets/js/main.js"></script>
</body>
</html>