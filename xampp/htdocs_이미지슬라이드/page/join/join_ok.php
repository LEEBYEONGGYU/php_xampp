<?php
	$sql = mq("insert into member(id, pw, phone, email) values('".$_POST['id']."','".md5($_POST['pw'])."','".$_POST['phone']."','".$_POST['email']."')");
?>
<meta http-equiv="refresh" content="0 url=/" />