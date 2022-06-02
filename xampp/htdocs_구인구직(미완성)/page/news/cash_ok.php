<?php
	$sql = mq("insert into cash(bankname,banknum,hyun,jobmoney,gita,gitamoney,saemoney,daymoney) values('".$_POST['bankname']."','".$_POST['banknum']."','".$_POST['hyun']."','".$_POST['jobmoney']."','".$_POST['gita']."','".$_POST['gitamoney']."','".$_POST['saemoney']."','".$_POST['daymoney']."')");
?>
<meta http-equiv="refresh" content="0 url=/news/cash">