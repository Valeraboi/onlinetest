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
                               <li><a class="nav-link active" href="../index.php">Главная</a></li>
                                <li><a href="?section=users">Список пользователей</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $section = $_GET['section'];
                if (!empty($section)) {
                    require "admin{$section}.php";
                }
                ?>
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