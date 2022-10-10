<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>장whw의 발rl</title>
<link rel="stylesheet" href="/css/common.css" />
<script type="text/javascript" src="/js/common.js"></script>
<script src="/style/jquery.js"></script>
<script src="/style/jquery-ui.js"></script>
<link rel="stylesheet" href="/style/jquery-ui.css" type="text/css">
</head>
<body>
  <?php
	session_start();

	include_once "/bin/db.php";

	include_once "/bin/header.php";
	if(isset($_GET['q'])){
		$url = explode("/",$_GET['q']);
		include_once "/page/sub.php";
	}else{
		include_once "/page/main.php";
	}
	include_once "/bin/footer.php";
?>
</body>
</html>