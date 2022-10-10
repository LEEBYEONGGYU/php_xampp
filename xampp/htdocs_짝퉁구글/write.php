<?php
include_once("/bin/db.php");
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>dwd</title>
<style>
body {width:1000px;}
ul li {list-style:none; margin-right:20px;}

.w1 {width:15%;}
.w2 {width:85%;}
.fl {float:left;}
</style>
</head>
<body>
<div id="search_con">
<form action="/write_ok.php" method="post" enctype="multipart/form-data">
	<ul>
		<li class="fl w1">제목</li>
		<li class="w2"><input type="text" size="20" name="title" /></li>
	</ul>
	<ul>
		<li class="fl w1">내용</li>
		<li class="w2"><textarea rows="5" cols="50" name="content"></textarea></li>
	</ul>
	<ul>
		<li class="fl w1">신분증파일입력</li>
		<li class="w2"><input type="file" name="pic" /></li>
	</ul>
	<ul>
		<li><button>작성하기</button></li>
	</ul>
</form>
</div>
</body>
</html>