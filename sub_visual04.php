<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>KANG HAEUN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub.css"> 
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/common.js"></script>
    <script src="https://kit.fontawesome.com/c42cf419ca.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="wrap">
        <?php include_once('./header.php'); ?>
        <div id="container">
            <div class="visual">
                <h2>VISUAL</h2>
                <div class="tab">
                    <ul>
                        <li class="on"><a href="./sub_visual01.php">CARD NEWS</a></li>
                        <li><a href="./sub_visual02.php">BANNER</a></li>
                        <!-- <li><a href="./sub_visual03.php">BI</a></li> -->
                        <li><a href="./sub_visual04.php">UI</a></li>
                    </ul>
                </div>
                <div class="contents">
                    <h3 class="title">UI</h3>
                    <p class="date">2019</p>
                    <div class="ui reveal">
                        <a href="../2019/sub_ui.html" target="_blank">
                            <img src="./img/sub_ui.png" alt="게임 UI 디자인">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('./footer.php'); ?>
    <div class="bg-line">
        <div class="bg-line1"></div>
        <div class="bg-line2"></div>
        <div class="bg-line3"></div>
        <div class="bg-line4"></div>
        <div class="bg-line5"></div>
        <div class="bg-line6"></div>
    </div>
</body>
</html>