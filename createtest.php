<?php
session_start();
include_once "vendor/db.php";





$do = trim(strip_tags($_GET['do']));
if ($do == 'save') {
    $title = trim($_POST['title']);

    $res = $db->prepare("INSERT IGNORE INTO tests (`title`) VALUES (:title)");
    $res->execute([
        ':title' => $title,
    ]);
    $testId = $db->lastInsertId();

    $questionNum = 1;
    while (isset($_POST['question_' . $questionNum])) {
        $question = trim($_POST['question_' . $questionNum]);
        if (empty($question)) {
            continue;
        }

        $res = $db->prepare("INSERT IGNORE INTO questions (`test_id`, `question`) VALUES (:test_id, :question)");
        $res->execute([
            ':test_id' => $testId,
            ':question' => $question,
        ]);
        $questionId = $db->lastInsertId();

        $answerNum = 1;
        while (isset($_POST['answer_text_' . $questionNum . '_' . $answerNum])) {
            $answer = trim($_POST['answer_text_' . $questionNum . '_' . $answerNum]);
            $score = trim($_POST['answer_score_' . $questionNum . '_' . $answerNum]);
            if (empty($answer)) {
                continue;
            }

            $res = $db->prepare("INSERT IGNORE INTO answers (`question_id`, `answer`, `score`) 
                                VALUES (:question_id, :answer, :score)");
            $res->execute([
                ':question_id' => $questionId,
                ':answer' => $answer,
                ':score' => $score,
            ]);

            $answerNum++;
        }
        $questionNum++;
    }

    $resultNum = 1;
    while (isset($_POST['result_' . $resultNum])) {
        $result = trim($_POST['result_' . $resultNum]);
        $scoreMin = trim($_POST['result_score_min_' . $resultNum]);
        $scoreMax = trim($_POST['result_score_max_' . $resultNum]);

        $res = $db->prepare("INSERT IGNORE INTO results (`test_id`, `score_min`, `score_max`, `result`) 
                                VALUES (:test_id, :score_min, :score_max, :result)");
        $res->execute([
            ':test_id' => $testId,
            ':score_min' => $scoreMin,
            ':score_max' => $scoreMax,
            ':result' => $result,
        ]);

        $resultNum++;
    }

    header ('Location: createtest.php?do=list');
}

if ($do != 'add') {
    $do = 'list';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<style>
    .addform{
        margin-top:120px;
    }
            .answers {
    padding:15px;
    background:#f7f7f7;
    margin-top:15px;
}
textarea {
    height:150px;
}
.divider {
    margin-top:10px;
    padding-top:5px;
    border-top:#ddd 1px solid;
}
.result-print {
    text-align: center;
    font-size:30px;
    font-weight:700;
}

        </style>
<body>
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
                               <li><a class="nav-link" href="index.php">Главная</a></li>
                                <li><a href="#">Создать тест</a></li>
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
        <div class="container bg-grey ">
        <div class="row justify-content-center">

            <?php include_once 'vendor/' . $do . '.php'; ?>

        </div>
        </div>
       
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
        <script src="assets/js/app.js"></script>
</body>
</html>