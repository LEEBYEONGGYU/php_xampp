<?php

	$db = new mysqli("localhost","root","apmsetup","0811member");
	mysqli_query ($db, 'SET NAMES utf8'); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>