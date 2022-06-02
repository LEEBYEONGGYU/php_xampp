<?php
include_once("/bin/db.php");
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>dwd</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</head>
<style>
body {width:1000px;}
ul li {float:left; list-style:none; margin-right:20px;}

.bin1{width:1000px; height:0px; overflow:hidden;background:#555;}
.bin2{width:1000px; height:0px; overflow:hidden;background:#555;}
.bin3{width:1000px; height:0px; overflow:hidden;background:#555;}
.ros {float:left;margin-top:50px;}
.mos {font:bold 17px "Malgun Gothic"; margin-top:50px; margin-left:450px; color:white;}

.row > ul > li > img:hover {cursor:pointer;}

#topmenu {width:1000px; height:30px;}
</style>
<body>
<div id="topmenu">
<ul>
	<li><input type="text" size="20" /><button>검색하기</button></li>
	<li><a href="/"><button>그리드뷰</button></a></li>
	<li><a href="/"><button>리스트뷰</button></a></li>
	<li><a href="/write.php"><button>글쓰기</button></a></li>
</ul>
</div>
<div class="row">
	<ul>
		<li><img src="/imgs/1.jpg" data-title="국화꽃" data-no="1" class="jin1" width="300" /></li>
		<li><img src="/imgs/2.jpg" data-title="사막" data-no="1" class="jin1" width="300" /></li>
		<li><img src="/imgs/3.jpg" data-title="수국" data-no="1" class="jin1" width="300" /></li>
	</ul>
	<div class="bin1">
		<div class="ros"></div>
		<div class="mos"></div>
	</div>
	<ul>
		<li><img src="/imgs/4.jpg" data-title="해파리" data-no="2" class="jin2" width="300" /></li>
		<li><img src="/imgs/5.jpg" data-title="코알라" data-no="2" class="jin2" width="300" /></li>
		<li><img src="/imgs/6.jpg" data-title="등대" data-no="2" class="jin2" width="300" /></li>
	</ul>
	<div class="bin2">
		<div class="ros"></div>
		<div class="mos"></div>
	</div>
	<ul>
		<li><img src="/imgs/7.jpg" data-title="펭귄" data-no="3" class="jin3" width="300" /></li>
		<li><img src="/imgs/8.jpg" data-title="튤립" data-no="3" class="jin3" width="300" /></li>
		<li><img src="/imgs/1.jpg" data-title="국화" data-no="3" class="jin3" width="300" /></li>
	</ul>
	<div class="bin3">
		<div class="ros"></div>
		<div class="mos"></div>
	</div>
</div>
<script>
$(".row img").bind("click",function(){
	var c = $(this).attr("src");
	var e = $(this).attr("class");
	var b = $(this).attr("data-title");
	var n = $(this).attr("data-no");
	$(this).click(function(){
		$(".bin" + n).animate({
			height:0
		}, 1000);
	});
	$(".ros").html('<img src= "'+ c +'" title="pic" height="300">');
	$(".mos").html(b);
	if(e == 'jin' + n){ 
		for(i = 1; i <=3; i++){
			if(i != n){
				$(".bin" + i).animate({
					height:0
				}, 1000);
			}
		}
		$(".bin" + n).animate({
			height:'400px'
		}, 1000);
	}
})
</script>
</body>
</html>
