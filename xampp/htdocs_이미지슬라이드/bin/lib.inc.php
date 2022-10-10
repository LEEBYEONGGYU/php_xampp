<?php
	include_once ("/bin/db.inc.php");
	if(isset($_GET['q'])){
		$arr = explode("/",$_GET['q']);
	}
	include_once ("/bin/header.php");
	if(isset($arr[0])){
		include_once ("/page/sub.php");
	}else{
		include_once ("/page/main.php");
	}
	include_once ("/bin/footer.php");
?>