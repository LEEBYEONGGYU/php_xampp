<?php
	$cdate = $_POST['cdate1'].'-'.$_POST['cdate2'].'-'.$_POST['cdate3'];
	$odate = $_POST['odate1'].'-'.$_POST['odate2'].'-'.$_POST['odate3'];

	$sql = mq("insert into embill(company,sellmoney,cdate,odate,regi) values('".$_POST['company']."','".$_POST['sellmoney']."','".$cdate."','".$odate."','".$_POST['regi']."')");
?>
<meta http-equiv="refresh" content="0 url=/">