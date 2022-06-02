<?php
	$date = $_POST['date1'].'-'.$_POST['date2'].'-'.$_POST['date3'];
	
	$sql = mq("insert into day(date,name,site,type,money,charge,memo,cost,lastjob) values('".$date."','".$_POST['name']."','".$_POST['site']."','".$_POST['type']."','".$_POST['money']."','".$_POST['charge']."','".$_POST['memo']."','".$_POST['cost']."','".$_POST['lastjob']."')");
?>
<meta http-equiv="refresh" content="0 url=/">