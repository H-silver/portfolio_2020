<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
    />
    <title>KANG HAEUN</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sub.css" />
    <script
      type="text/javascript"
      src="http://code.jquery.com/jquery-latest.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/common.js"></script>
    <script
      src="https://kit.fontawesome.com/c42cf419ca.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="wrap">
	 	<?php include_once('./header.php'); ?>
      <div id="container">
        <div class="contact">
          <h2>CONTACT</h2>
          <!-- 메일 시작 -->
          <?php include_once('./mail/form.php'); ?>
          <!-- 메일 끝 -->
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
