<div id="mail_wrap"> 
	<form enctype="multipart/form-data" id="form1" name="form1" method="post" action="./mail/form_send.php">
		<ul class="table01" cellpadding="0" cellspacing="1">
			<input type="hidden" name="mode" value="send">
			<li> 
			<div class="left">제목</div>
			<div><input name="mail01" type="text" placeholder="제목을 입력해주세요"></div>
			</li> 
			<li> 
			<div class="left">이메일</div>				
			<div><input name="mail02" type="text" placeholder="이메일을 입력해주세요"></div>
			</li> 
			<!-- <li> 
			<div class="left">전화번호</div>
			<div><input name="mail03" type="text" placeholder="전화번호를 입력해주세요"></div>
			</li> -->
			<li> 
			<div class="left" >문의사항</div>
			<div ><textarea name="mail04" placeholder="문의사항을 입력해주세요"></textarea></div>
			</li> 
		</ul>
		<p align="center" class="last_btn">
			<input type="button" class="btn" value="메일 전송" onclick="form_Check();" style="cursor:hand;"> 
		</p>
	</form>
</div>
	
<script>
	function form_Check(){
	if(form1.mail01.value == ''){
		alert("제목을 적어주세요.");
		form1.mail01.focus();
		return;
	}
	if(form1.mail02.value == ''){
		alert("이메일을 적어주세요.");
		form1.mail02.focus();
		return;
	}
	// if(form1.mail03.value == ''){
	// 	alert("전화번호를 적어주세요.");
	// 	form1.mail03.focus();
	// 	return;
	// }
	if(form1.mail04.value == ''){
		alert("문의사항을 적어주세요.");
		form1.mail04.focus();
		return;
	}
	if(!confirm('전송하겠습니까?')) return;
	form1.submit();
	}
</script>