<?php  
	include $_SERVER['DOCUMENT_ROOT']."/include/db.php";
	include $_SERVER['DOCUMENT_ROOT']."/include/header.php";
?>
	<header>
		<div id="bot1">
		<div id="logo"></div>
		<div id="l_line"></div>
		<div id="l_line2"></div>
	</div>
		<div id="content"><br />
			<p id="c_p1">WELCOME TO  PAGE</p>
			<p id="c_p2">THIS IS  PAGE<br/>
			 THIS PAGE CONSISTS OF ONLY HTML, CSS
		</p>
	</div>
		<div id="bot2">
		<div id="l_line3"></div>
		<div id="l_line4"></div>
		<div id="form_area">

		<div id="join"><a href="#" class="login_bottom">JOIN</a></div>
		<div id="login"><a href="#" class="login_bottom2">LOGIN</a></div>
	</div>
</div>
</header>

<!--회원가입 폼-->
<div class="join_frm">
	<form action="/page/member/join_ok.php" method="post">
		<div class="frm_con">
			<ul>
				<li>아이디</li>
				<li><input type="text" id="userid" name="userid" title="아이디" value="" class="check" required /></li>
			</ul>
			<ul>
				<li>비밀번호</li>
				<li><input type="password" name="userpw" id="userpw" value="" required /></li>
			</ul>
			<ul>
				<li>이메일</li>
				<li><input type="text" name="email" id="email" value=""  required />@<select id="email2" name="email2"><option value="naver.com">naver.com</option><option value="daum.net">daum.net</option><option value="nate.com">nate.com</option></select></li>
			</ul>
		</div>
		<div class="join_bbb">
			<ul>
				<li><input type="submit" value="회원가입"  /></li>
				<li><input type="reset" value="다시쓰기" /></li>
			</ul>
		</div>
	</form>
</div>

<!--로그인 폼-->
<div class="join_frm2" id="login_2">
	<form action="/page/member/login_ok.php" method="post">
		<div id="in_box" class="idpw_box">
			<input type="text" name="userid" maxlength="20" placeholder="사용자 아이디" required />
			<input type="password" name="userpw" maxlength="20" placeholder="사용자 비밀번호" required/>
		</div>
		<span id="idpw_find"><a href="#">아이디나 비밀번호를 잊어버리셨나요?</a></span>
		<span id="join_mem"><a href="/page/member/join_form.php">회원가입</a></span>
		<div id="log_box_bot">
			<button>LOGIN</button>
		</div>
	</form>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>