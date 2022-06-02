<?php
	$pdo = new PDO("mysql:host=127.0.0.1;charset=utf8;dbname=web;","root","xampp");
	if($_POST['id'] != NULL){
		$id_check = $pdo->query("select * from member where id='{$_POST['id']}'")->rowCount();
		if($id_check >= 1){
			echo "존재하는 아이디입니다.";
		}else{
			echo "존재하지않는 아이디입니다.";
		}
	}
?>