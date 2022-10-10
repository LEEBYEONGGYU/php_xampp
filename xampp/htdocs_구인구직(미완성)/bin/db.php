<?php
	session_start();
	$db = new mysqli("127.0.0.1","root","xampp","big");
	$db->set_charset("utf8");

	function mq($sql){
		global $db;
		return $db->query($sql);
	}

	function mfa($sql){
		$rs = mq($sql);

		if(!!$rs || $rs->num_rows > 0){
			return $rs->fetch_array();
		}
		return false;
	}

	function mnr($sql){
		$rs = mq($sql);

		if(!!$rs){
			return $rs->num_rows;
		}
		return false;
	}
?>