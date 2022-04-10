<?php
    include_once  'vendor/db.php';
    session_start();

    $id = (int) $_GET['id'];
    if ($id < 1) {
        header ('location: createtest.php');
    }

    $testId = $id;
    if (!isset($_SESSION['test_id']) || $_SESSION['test_id'] != $testId) {
        $_SESSION['test_id'] = $testId;
        $_SESSION['test_score'] = 0;
    }

    $res = $db->query("SELECT * FROM tests WHERE id = {$testId}");
    $row = $res->fetch();
    $testTitle = $row['title'];

    $questionNum = (int) $_POST['q'];
    if (empty($questionNum)) {
        $questionNum = 0;
    }
    $questionNum++;
    $questionStart = $questionNum - 1;

    $res = $db->query("SELECT count(*) AS count FROM questions WHERE test_id = {$testId}");
    $row = $res->fetch();
    $questionCount = $row['count'];

    $answerId = (int) $_POST['answer_id'];
    if (!empty($answerId)) {
        $res = $db->query("SELECT * FROM answers WHERE id = {$answerId}");
        $row = $res->fetch();
        $score = $row['score'];
        $_SESSION['test_score'] += $score;
    }

    $showForm = 0;
    if ($questionCount >= $questionNum) {
        $showForm = 1;

        $res = $db->query("SELECT * FROM questions WHERE test_id = {$testId} LIMIT {$questionStart}, 1");
        $row = $res->fetch();
        $question = $row['question'];
        $questionId = $row['id'];

        $res = $db->query("SELECT * FROM answers WHERE question_id = {$questionId}");
        $answers = $res->fetchAll();
    } else {
        $score = $_SESSION['test_score'];

        $res = $db->query("SELECT * FROM results WHERE test_id = {$testId} AND score_min <= {$score} AND score_max >= {$score}");
        $row = $res->fetch();
        $result = $row['result'];
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
       
    <div class="container bg-grey">
        <?php if ($showForm) { ?>
            <form action="solvetest.php?id=<?php echo $testId; ?>" method="post">
                <input type="hidden" name="q" value="<?php echo $questionNum; ?>">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center mt-5">
                            <p>Вопрос <?php echo $questionNum . ' из ' . $questionCount; ?></p>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3><?php echo $question; ?></h3>
                            </div>
                            <div class="card-body">
                                <?php foreach ($answers AS $answer) { ?>
                                    <div>
                                        <input type="radio" name="answer_id" required value="<?php echo $answer['id']; ?>"> <?php echo $answer['answer']; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <?php if ($questionCount == $questionNum) { ?>
                                <button type="submit" class="btn btn-success">Получить результат</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-primary">Дальше</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>
            <div class="row justify-content-center addform">
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3>Ваш результат</h3>
                        </div>
                        <div class="card-body">
                            <div class="result-print">
                                <?php echo $result; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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
</body>
</html>