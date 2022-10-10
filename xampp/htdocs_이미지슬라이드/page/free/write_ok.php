<?php
	$sql = mq("insert into free(title, name, content, date) values('".$_POST['title']."','".$_POST['name']."','".$_POST['content']."','".$_POST['date']."')");
?>
<meta http-equiv="refresh" content="0 url=/" />