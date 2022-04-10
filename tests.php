<?php
include_once "vendor/db.php";
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
       
        <title>Тесты</title>
        
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
                               <li><a href="index.php">Главная</a></li>
                                <li><a href="#">Создать тест</a></li>
                                <li><a class="nav-link active" href="blog-grid.php">Тесты</a></li>                              
                                <li><?php if (!empty($_SESSION['users'])) { ?>
                                    <a href="vendor/exit.php">Выйти</a>
                                <?php } else { ?>
                                    <a href="login.php">Авторизация</a>
                                <?php } ?></li>
                            </ul>
                       </div>
                      
                    </div>
                </nav>
            </div>
		</header> 

        <div class="header-height"></div>
		
		
		
		<section class="blog-section padding bg-grey">
		    <div class="container">
                <div class="widget-content blog-widget">
                    <form action="" class="search-form">
                        <input type="text" class="form-control" placeholder="Поиск">
                        <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
		        <div class="blog-wrap row">
                    
		            <div class="col-lg-12 sm-padding">
		                <div class="row">
		                    <div class="col-sm-4 padding-15">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/img/testpicture3.jpg" alt="testpuctire">
                                        
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="#">Тест по основам безопасности жизнедеятельности "Правила дорожного движения.</a></h3>
                                        <p>Тест на знание Дорожных знаков по правилам дорожного движения (ПДД).</p>
                                        <a href="#" class="read-more">Начать тест</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 padding-15">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/img/testpicture5.jpg" alt="testpuctire">
                                    
                                    </div>
                                    <div class="blog-content">
                                       <h3><a href="#">Теория вероятностей в задачах ЕГЭ (профильный уровень)</a></h3>
                                        <p>Тест предназначен для учащихся 11 класса для проверки уровня подготовки к ЕГЭ по теории вероятностей</p>
                                        <a href="#" class="read-more">Начать тест</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 padding-15">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/img/testpicture2.jpg" alt="testpuctire">
                                       
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="#">Тех обслуживание и ремонт сельскохозяйственных машин</a></h3>
                                        <p>тест предназначен для проверки знаний учащихся при изучении предмета "ТО и ремонт тракторов и С/Х машин"</p>
                                        <a href="#" class="read-more">Начать тест</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 padding-15">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/img/testpicture.jpg" height="" alt="testpuctire">
                                      
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="#">Химия 9 класс. Общая характеристика элементов IIA-группы</a></h3>
                                        <p>Тест для текущего контроля знаний по теме "Общая характеристика элементов IA-группы" к учебнику О.С. Габриеляна, И.Г. Остроумова,</p>
                                        <a href="#" class="read-more">Начать тест</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 addform">
                <div class="card mt-4">
                        <div class="card-header">
                            <h2 class="text-center">Список тестов</h2>
                        </div>

                        <div class="card-body">
                            <ul class="list">
                                <?php
                                $res = $db->query("SELECT * FROM tests");
                                while ($row = $res->fetch()) {
                                    ?>
                                    <li><a href="solvetest.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                           
                            
		                </div>
		                <ul class="pagination-wrap text-center mt-30">
                            <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul>
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