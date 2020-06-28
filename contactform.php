<?php

// if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $subject = $_POST['subject'];
//    $mailFrom = $_POST['mail'];
//    $message = $_POST['message'];

//    $mailTo = "haeunkang91@naver.com";
//    $headers = "From: ".$mailFrom;
//    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
   
//    $header.= "MIME-Version: 1.0";
//    $header.= "Content-Type: text/html; charset=utf-8";
//    $header.= "X-Mailer: PHP";

//    $result = mail($mailTo, $subject, $txt, $headers);
//    header("Location: sub_contact.html?mailsend");
   
//    if(!$result) {
      
//     echo "
//    <script>
//    alert('메일전송실패!!! \n 다시 작성하세요  \n $headers' + $headers);
//    </script>
//    " ;
   
   
   
//    } else {
      
//     echo "
//    <script>
//    alert('메일전송성공!!!');
//    </script>
//    "      ; 
   
   
// }


   $name = $_POST['name'];
   $subject = $_POST['subject'];
   $mailFrom = $_POST['mail'];
   $message = $_POST['message'];

   $mailTo = "khewg3@kakao.com";
   $headers = "From: ".$mailFrom;
   $txt = "You have received an e-mail from ".$name.".\n\n".$message;


   mail($mailTo, $subject, $txt, $headers);







?>