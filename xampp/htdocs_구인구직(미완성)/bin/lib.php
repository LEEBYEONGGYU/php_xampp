<?php
	include_once("/bin/db.php");
	include_once("/bin/func.php");
?>
<!doctype html>
<html class="no-js" lang="ko">
<head>
<meta charset="UTF-8">
<title>구인구직</title>
<link rel="stylesheet" href="/css/common.css" />
<script src="/common/js/jquery-1.11.1.min.js"></script>
<script src="/common/js/jquery-ui.js"></script>
<link rel="stylesheet" href="/common/js/jquery-ui.css" />
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/main.css">
<script src="/js/vendor/modernizr.custom.min.js"></script>
<script src="/js/vendor/jquery-1.10.2.min.js"></script>
<script src="/js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/js/main.js"></script>
</head>
<body>

<?php
	if(isset($_GET['q'])){
		$url = explode("/",$_GET['q']);
		include_once("/page/sub.php");
	}else{
		include_once("/page/main.php");
	}
?>
</body>
</html>