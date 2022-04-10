<?php
session_start();
require "vendor/connectdb.php";
$_getposts = mysqli_query($link,"SELECT * FROM `users`");
$_resultposts = mysqli_fetch_assoc($_getposts);
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title>Конструктор тестов</title>
        
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
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar ">
                    <a href="index.php" class="navbar-brand"><img src="assets/img/logo1.png" alt="logo"></a>
                    <div class="d-flex menu-wrap">
                       <div id="mainmenu" class="mainmenu">
                           <ul class="nav">
                               <li><a class="nav-link active" href="index.php">Главная</a></li>
                                <li><a href="createtest.php">Создать тест</a></li>
                                <li><a href="tests.php">Тесты</a></li> 
                                <li><?php if ($_SESSION['users']['flag'] == 1) { ?>                          
                                <a href="vendor/admin.php">Админ-панель</a> 
                                <?php } ?>
                                </li>                             
                                <li>
                                    <?php if (!empty($_SESSION['users'])) { ?>
                                    <a href="vendor/exit.php">Выйти</a>
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
		
        <div class="header-height"></div>
        
        <section class="hero-section bg-grey d-flex align-items-center bd-bottom">
            <div class="hero-bg-shape"></div>
            <div class="anim-elements">
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
            </div>
            <div class="container">
                <div class="row hero-wrap d-flex align-items-center">
                    <div class="col-lg-6 sm-padding">
                        <div class="hero-content">
                            <h1>Конструктор тестов</h1>
                            <p>Простой и удобный сервис для создания тестов и проведения тестирования.</p>
                            <div class="btn-group">
                                <a href="createtest.php" class="default-btn">Создать тест</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <img src="assets/img/hero-1.png" alt="hero">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="promo-section bd-bottom padding">
            <div class="container">
                <div class="row promo-wrap">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="200ms">
                            <img src="assets/img/premium-icon-settings-4233298.png" alt="">
                            <h3>Гибкая настройка теста параметрами</h3>
                            <p>В конструкторе тестов предусмотрено большое количество настроек. Вы можете быстро и удобно создать уникальный тест под ваши цели и задачи.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="300ms">
                            <img src="assets/img/free-icon-feedback-6878911.png" alt="">
                            <h3>Удобный инструмент статистики</h3>
                            <p>На сайте доступен просмотр каждого результата теста, статистики ответов и набранных баллов по каждому вопросу, статистики по каждому результату.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="400ms">
                            <img src="assets/img/premium-icon-responsive-design-3950971.png" alt="">
                            <h3>Удобно на всех девайсах</h3>
                            <p>Интерфейс адаптирован под любые размеры экранов. Тесты удобно проходить как на персональных компьютерах, так и на планшетных и мобильных устройствах.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="promo-item wow fadeInUp" data-wow-delay="500ms">
                            <img src="assets/img/premium-icon-telecommuting-3192952.png" alt="">
                            <h3>Система Дистанционного Обучения</h3>
                            <p>Удобный инструмент для организации дистанционного обучения и тестирования ваших учеников, студентов, респондентов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        
        <section class="content-section bd-bottom padding pos-rel">
            <div class="anim-elements">
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
                <div class="anim-element"></div>
            </div>
            <div class="container">
                <div class="row content-wrap">
                   <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="300ms">
                        <img src="assets/img/content-2.png" alt="content-img">
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                            <h2>Cпособы доступа к тесту</h2>
                            <p>На нашем сайте доступно несколько способов доступа к тесту.</p>
                            <ul class="content-feature">
                                <li class="content-feature-item">
                                    <img src="assets/img/premium-icon-shared-folder-2296500.png" alt="">
                                    <div class="content-details">
                                        <h3>Публикация в общий доступ</h3>
                                        <p>Вы можете опубликовать свой тест в общий доступ на нашем сайте. Ваш тест сможет пройти любой наш пользователь.</p>
                                    </div>
                                </li>
                                <li class="content-feature-item">
                                    <img src="assets/img/premium-icon-private-message-5354585.png" alt="">
                                    <div class="content-details">
                                        <h3>Основная ссылка</h3>
                                        <p>По основной ссылке ваш тест всегда доступен. Эту ссылку подобрать практически невозможно, поэтому тест пройдут только те, кому вы отправите эту ссылку.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
       
        
        <section class="widget-section bg-dark padding">
           <div class="left-design"></div>
           <div class="right-design"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 sm-padding">
                        <div class="widget-content">
                            <a href="#"><img src="assets/img/logo2.png" alt="logo"></a>
                            <p>Простой и удобный сервис для создания<br> тестов и проведения тестирования.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 sm-padding">
                        <div class="widget-content">  
                            <ul class="widget-links">
                                <li><a href="#">Форма обратной связи</a></li>
                            </ul>
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