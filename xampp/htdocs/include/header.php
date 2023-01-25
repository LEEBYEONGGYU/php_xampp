<?php include $_SERVER['DOCUMENT_ROOT']."/include/db.php"; ?>
<!DOCTYPE html>
<head>
	<title>PHP 쇼핑몰</title>
<link rel="stylesheet" href="/css/common.css" />
<link rel="stylesheet" href="/css/sub.css" />
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