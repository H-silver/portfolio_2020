<?php
include "./mailer.php";

$mode = $_REQUEST['mode'];
$name = $_REQUEST['mail01'];
$email = $_REQUEST['mail02'];
// $hp = $_REQUEST['mail03'];
$content = $_REQUEST['mail04'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "[khe 포트폴리오 contact 메일] $name";
$body = "";

$body .= "제목: $name<br>";
$body .= "이메일주소: $email<br>";
// $body .= "휴대폰번호: $hp<br>";
$body .= "문의사항: <div>$content</div>";


//$admin_email = "받을 메일주소 입력";
$admin_email = "haeunkang91@naver.com";


if($mode == "send") {
	//파일첨부 시작
	for($i=1;$i<=3;$i++) {
		$file[$i] = $_FILES['userfile'.$i]['email'];
		$target[$i] = "./temp/".$file[$i];

		if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'], $target[$i])) {
			chmod("$target[$i]", 0777);
		}
	}

	$ret = mailer($email, $email, "Admin", $admin_email, $subject, $body.$body2, $file);

	if($file[1] != "") @unlink($target[1]);
	if($file[2] != "") @unlink($target[2]);
	if($file[3] != "") @unlink($target[3]);
	echo "<meta http-equiv='content-type' content='text/html; charset=utf-8'>";
	if($ret) echo "<script>alert('전송이 완료되었습니다.');location.href='../index.html';</script>";
	else echo "<script>alert('폼메일 발송 실패: 입력하신 내용을 확인해 주세요.');history.back();</script>";
}

?>
