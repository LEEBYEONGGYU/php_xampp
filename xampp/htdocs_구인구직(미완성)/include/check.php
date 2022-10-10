<?php
$pdo = new PDO("mysql:host=127.0.0.1;charset=utf8;dbname=big;", "root", "xampp");

if($_POST['id'] != NULL){
	$id_check = $pdo->query("select * from member where id='{$_POST['id']}'")->rowCount();
	if($id_check >= 1){
		echo "<span>존재하는 아이디입니다.</span>";
	} else {
		echo "<span>존재하지 않는 아이디입니다.</span>";
	}
} else if($_POST['pw'] != NULL){
	// $_POST['pw'] = md5($_POST['pw']); // 올래는 암호화 해야는데 DB => pw열 값을 모르니까. 안함
	$pw_chkeck = $pdo->query("select * from member where pw='{$_POST['pw']}'")->rowCount();
	if($pw_chkeck >= 1){
		echo "<span>존재하는 비밀번호입니다.</span>";
	} else {
		echo "<span>존재하지 않는 비밀번호입니다.</span>";
	}
}
