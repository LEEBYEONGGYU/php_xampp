<?php
	$pchphone = $_POST['pch1'].'-'.$_POST['pch2'].'-'.$_POST['pch3'];
	$phone = $_POST['phone1'].'-'.$_POST['phone2'].'-'.$_POST['phone3'];
	$fax = $_POST['fax1'].'-'.$_POST['fax2'].'-'.$_POST['fax3'];
	$em = $_POST['em1'].'@'.$_POST['em2'];
	$rdate = $_POST['rdate1'].'-'.$_POST['rdate2'].'-'.$_POST['rdate3'];

	$sql = mq("insert into custom(pch,pchphone,reginum,pchname,address,phone,typenow,type,em,fax,receipt,rdate) values('".$_POST['pch']."','".$pchphone."','".$_POST['reginum']."','".$_POST['pchname']."','".$_POST['address']."','".$phone."','".$_POST['typenow']."','".$_POST['type']."','".$em."','".$fax."','".$_POST['receipt']."','".$rdate."')");
?>
<meta http-equiv="refresh" content="0 url=/">