<?php
	$cdate = $_POST['cdate1'].'-'.$_POST['cdate2'].'-'.$_POST['cdate3'];
	$odate = $_POST['odate1'].'-'.$_POST['odate2'].'-'.$_POST['odate3'];

	$sql = mq("insert into isbill(company,reginum,address,sellmoney,bonusmoney,cdate,odate) values('".$_POST['company']."','".$_POST['reginum']."','".$_POST['address']."','".$_POST['sellmoney']."','".$_POST['bonusmoney']."','".$cdate."','".$odate."')");
?>
<meta http-equiv="refresh" content="0 url=/">