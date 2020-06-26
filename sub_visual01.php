<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>KANG HAEUN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
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
                    <h3 class="title">CARDNEWS</h3>
                    <p class="date">2019.05-06.</p>
                        <section class="center slider">
                            <div>
                            <img src="./img/cardnews2(1).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews2(2).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews2(3).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews2(4).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews2(5).jpg">
                            </div>
                        </section>
                        <section class="center2 slider">
                            <div>
                            <img src="./img/cardnews4(1).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews4(2).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews4(3).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews4(4).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews4(5).jpg">
                            </div>
                            <div>
                            <img src="./img/cardnews4(6).jpg">
                            </div>
                        </section>
                            <!-- 슬라이드 -->
                            <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
                            <script type="text/javascript">
                                $(document).on('ready', function() {
                                
                                    $('.center').slick({
                                        dots: true,
                                        infinite: true,    
                                        centerMode: true,
                                        centerPadding: '60px',
                                        slidesToShow: 1,
                                        autoplay: true,
                                        responsive: [
                                        {
                                            breakpoint: 768,
                                            settings: {
                                            arrows: false,
                                            centerMode: true,
                                            centerPadding: '40px',
                                            slidesToShow: 1
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                            arrows: false,
                                            centerMode: true,
                                            centerPadding: '40px',
                                            slidesToShow: 1
                                            }
                                        }
                                        ]
                                    });
                                    $('.center2').slick({
                                        dots: true,
                                        infinite: true,    
                                        centerMode: true,
                                        centerPadding: '60px',
                                        slidesToShow: 1,
                                        responsive: [
                                        {
                                            breakpoint: 768,
                                            settings: {
                                            arrows: false,
                                            centerMode: true,
                                            centerPadding: '40px',
                                            slidesToShow: 1
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                            arrows: false,
                                            centerMode: true,
                                            centerPadding: '40px',
                                            slidesToShow: 1
                                            }
                                        }
                                        ]
                                    });
                                });
                            </script>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="copyright">
          <ul>
            <li>KANG HAEUN</li>
            <li>© All Rights Reserved.</li>
          </ul>
        </div>
        <div class="sns">
          <ul>
            <li>
              <a href="https://github.com/H-silver" target="_blank">
                <i class="fab fa-github"></i>
              </a>
              <div class="invisible">
                git
              </div>
            </li>
            <li>
              <a href="">
                <i class="fab fa-instagram"></i>
              </a>
              <div class="invisible">
                instagram
              </div>
            </li>
          </ul>
        </div>
    </div>
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