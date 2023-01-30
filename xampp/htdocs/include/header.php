<?php include $_SERVER['DOCUMENT_ROOT']."/include/db.php"; ?>
<!DOCTYPE html>
<head>
	<title>PHP 쇼핑몰</title>
<link rel="stylesheet" href="/css/common.css" />
<link rel="stylesheet" href="/css/sub.css" />
<link rel="stylesheet" href="/css/detail.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
<header>
	<div class="header_in">
		<div id="logo"><a href="/">LOGO</a></div>
		<div id="search_area">
			<input type="text" id="search_input" name="keyword" >
		</div>
		<div id="m_service">
			<a href="#Login" id="Login"><img src="/imgs/m_service1.png" /></a>
			<div id="layerPopup">
				<?php if(isset($_SESSION['id'])){
				?>
					<ul>
						<li><a href="">주문/배송 조회</a></li>
						<li><a href="">고객센터</a></li>
						<li><a href=""><a href="/page/member/logout.php">로그아웃</a></li>
					</ul>
				<?php }else{ ?>
					<form action="/page/member/loginOk.php" method="post">
						<input type="text" name="id" placeholder="아이디" required /> <br />
						<input type="text" name="pw" placeholder="비밀번호" required/>
						<button type="submit">로그인</button>
					</form>
				<?php } ?>
			</div>
			<a href="/page/basket.php"><img src="/imgs/m_service2.png" /></a>
		</div>
	</div>
	<div id="header_line"></div>
	<div class="sec_header">
	<div class="header_in">
	<div id="catagory">
		<div id="catagory_title">카테고리</div>
		<nav id="menu">
			<ul>
				<?php 
					$sql = mq("select title, url from catagory order by title desc");  
					while($catagory = $sql->fetch_array()){
				?>
					<li><a href="/page/browsing.php?catagory=<?php echo $catagory['url']; ?>"><?php echo $catagory['title']; ?></a></li>
				<?php } ?>
			</ul>
		</nav>
	</div>
	<img src="/upload/admin/catagory/defualt_main.png" id="defualt_main" />

	<div id="catagory_hover_img">
		<img src="/upload/admin/catagory/cat1_img.png" id="catagory_img1" />
	</div>
	</div>
</header>
<script>
	$(document).ready(function(){
	$("#Login").click(function(){
		$("#contents > a").blur();
		$("#layerPopup").show();
		$("#layerPopup a").focus();
		return false;
	});
	$("#Login a").keydown(function(e){
		if(e.shiftKey && e.keyCode == 9){ // Shift + Tab 키를 의미합니다.
		$("#layerPopup").focus();
		$("#layerPopup").hide();
		return false;
		}
	});

	});
</script>