<?php
session_start();
?>

<!doctype html>

<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title>Авторизация</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/elegant-line-icons.css">
        <link rel="stylesheet" href="assets/css/elegant-font-icons.css">
        <link rel="stylesheet" href="assets/css/saasbiz-icons.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.min.css">
        <link rel="stylesheet" href="assets/css/pricing-table.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/venobox/venobox.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div>
        
        <section class="login-section">
            <div class="anim-elements">
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
            </div>
           <div class="map"></div>
            <div class="container">
                    <div class="row d-flex align-items-center">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="login-box wow bounceInUp">
                            <div class="section-heading mb-30">
                                <h2>Авторизация</h2>
                                <p></p>
                            </div>
                            <form class="login-form" action="vendor/loginAction.php" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                                </div>
                                <button type="submit" name="signin" class="default-btn btn-blue">Вход</button>
                                <p>Еще не зарегистрированы? - <a href="register.php"> Зарегистрироваться</a> </p>
                            </form>
                            <?php 
                                if ($_SESSION["message"]){
                                $alert = $_SESSION["message"];
                                echo "<p style = 'color:red;'> $alert</p>";
                                unset($_SESSION["message"]);  
                                }
 
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
	
		<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
		<script src="assets/js/vendor/bootstrap.min.js"></script>
		<script src="assets/js/vendor/tether.min.js"></script>
		<script src="assets/js/vendor/jquery.slicknav.min.js"></script>
		<script src="assets/js/vendor/owl.carousel.min.js"></script>
		<script src="assets/js/vendor/smooth-scroll.min.js"></script>
        <script src="assets/js/vendor/venobox.min.js"></script>
		<script src="assets/js/vendor/jquery.ajaxchimp.min.js"></script>
		<script src="assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
        <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
        <script src="assets/js/vendor/pricing-switcher.js"></script>
        <script src="assets/js/vendor/waypoints.min.js"></script>
        <script src="assets/js/vendor/odometer.min.js"></script>
		<script src="assets/js/vendor/wow.min.js"></script>
		<script src="assets/js/main.js"></script>

    </body>
</html>