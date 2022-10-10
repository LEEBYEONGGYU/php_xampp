<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>test</title>
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/jquery-ui-1.11.3.custom/jquery-ui.js"></script>
<link rel="stylesheet" href="/js/jquery-ui-1.11.3.custom/jquery-ui.css" />
<style type="text/css">
* {padding:0; margin:0;}
ul li {list-style:none;}
	header {width:100%; background:skyblue;}
		.header {width:1000px; height:100px; margin:0 auto;}

	.main {width:100%;}
		.main_inner {width:1000px; height:100px; margin:0 auto;}
			#dialog {width:300px; height:150px; background:#ccc;}

	footer {width:100%; background:green;}
		.footer {width:1000px; height:100px; margin:0 auto;}
</style>
</head>
<body>

<header>
	<div class="header">
		Header입니다
	</div>
</header>

<div class="main">
	<div class="main_inner">
		<div id="dialog">
		<form action="">
			<ul>
				<li><input type="email" required="required" placeholder="이메일" name="id" /></li>
				<li><input type="password" required="required" placeholder="비밀번호" name="pw" /></li>
				<li><select name="phone1">
					<option value="010">010</option>
					<option value="011">011</option>
					<option value="017">017</option>
				</select> - <input type="text" required="required" name="phone2" size="5" class="phone" /> - <input type="text" required="required" name="phone3" size="5" class="phone"  /></li>
				<li><button>i like it</button></li>
			</ul>
		</form>
		</div>
		<button id="open">버튼Click!Click!</button>
	</div>
</div>

<footer>
	<div class="footer">
		Footer입니다
	</div>
</footer>
<script type="text/javascript">
/*$(function() {
	$( "#dialog" ).dialog({
		autoOpen: false,
		show: {
			effect: "blind",
			duration: 500
		  },
		hide: {
			effect: "blind",
			duration: 500
		  }
	});

	$( "#open" ).click(function() {
	  $( "#dialog" ).dialog( "open" );
	});
});
*/

$(function(){
	$("#open").click(function(e){
		e.preventDeafult();
		$("#dialog").dialog({
			title : "회원가입",
			width : 600,
			height : 360,
			modal : true
		});
	});
});


$(document).on("keyup",".phone",function(){
	$(this).val($(this).val().replace(/[^0-9]/gi,""));
});
</script>
</body>
</html>