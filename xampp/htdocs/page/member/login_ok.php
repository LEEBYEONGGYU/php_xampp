<?php	


if(isset($_SESSION['userid'])){
	echo "<script>alert('이미 로그인되어 있습니다');</script>";
}else{



	include "../../include/db.php"; 

if($_POST['userid'] && $_POST['userpw']){
	$password = $_POST['userpw'];
	$sql = mq("select * from member where id='".$_POST['userid']."'");
	$member = $sql->fetch_array();
	$hash_pw = $member['pw']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다. 

	if(password_verify($password, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 note_main.php로 넘어갑니다.
	{
		$_SESSION['userid'] = $member["id"];
		$_SESSION['userpw'] = $member["pw"];
		echo "<script>alert('로그인되었습니다.'); location.href='/page/note.php';</script>";
	}else{ 
	// 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
	}
}else{
	echo "<script>alert('잘못된 접근입니다.');</script>";
}
	

	}
?>