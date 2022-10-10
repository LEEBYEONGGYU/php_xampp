<?php include $_SERVER['DOCUMENT_ROOT']."/include/db.php"; ?>
<!DOCTYPE html>
<head>
	<title>PHP 쇼핑몰</title>
<link rel="stylesheet" href="/css/common.css" />
<link rel="stylesheet" href="/css/sub.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>
	<div class="header_in">
		<div id="logo"><a href="/">LOGO</a></div>
		<div id="search_area">
			<input type="text" id="search_input" name="keyword" >
			<img src="/imgs/main_member.png" />
		</div>
	</div>
	<div id="header_line"></div>
	<div class="sec_header">
	<div class="header_in">
	<div id="catagory">
		<div id="catagory_title">카테고리</div>
		<nav id="menu">
			<ul>
				<li class="menu_t1"><a href="/page/browsing.php?catagory=eleTv">가전, TV</a></li>
				<li class="menu_t2"><a href="/page/browsing.php">컴퓨터 노트북, 조립PC</a></li>
				<li class="menu_t3"><a href="/page/browsing.php">모바일</a></li>
				<li class="menu_t4"><a href="/page/browsing.php">카메라</a></li>
				<li class="menu_t5"><a href="/page/browsing.php">자전거, 스포츠</a></li>
			</ul>
		</nav>
	</div>
	<img src="/upload/admin/catagory/defualt_main.png" id="defualt_main" />

	<div id="catagory_hover_img">
		<img src="/upload/admin/catagory/cat1_img.png" id="catagory_img1" />
		<img src="/upload/admin/catagory/cat1_2img.png" id="catagory_img2" class="def_none"/>
		<img src="/upload/admin/catagory/cat1_3img.png" id="catagory_img3" class="def_none"/>
		<img src="/upload/admin/catagory/cat1_4img.png" id="catagory_img4" class="def_none"/>
		<img src="/upload/admin/catagory/cat1_5img.png" id="catagory_img5" class="def_none"/>
	</div>
	</div>
</header>

<script>
	$(".menu_t1").hover(function(){
		//mouseover
		$("#catagory_img1").show();
	},function(){
		//mouseout
		$("#catagory_img1").hide();
	});

	$(".menu_t2").hover(function(){
		$("#catagory_img2").show();
	},function(){
		$("#catagory_img2").hide();
	});

	$(".menu_t3").hover(function(){
		$("#catagory_img3").show();
	},function(){
		$("#catagory_img3").hide();
	});

	$(".menu_t4").hover(function(){
		//mouseover
		$("#catagory_img4").show();
	},function(){
		//mouseout
		$("#catagory_img4").hide();
	});
	$(".menu_t5").hover(function(){
		//mouseover
		$("#catagory_img5").show();
	},function(){
		//mouseout
		$("#catagory_img5").hide();
	});
</script>