<script src="../../style/common.js"></script>
<?php

include("../../include/lib.php");

$d = mfaq("select * from user where id=? and pw=?",array($_POST['login_id'],md5($_POST['login_pw'])));

if($d){
	$_SESSION['no'] = $d['no'];
	$_SESSION['id'] = $d['id'];
	$_SESSION['phone'] = $d['phone'];
	$_SESSION['email'] = $d['email'];
	$_SESSION['ok'] = $d['ok'];
	$_SESSION['level'] = $d['level'];
	$msg = "로그인 되었습니다.";
} else {
	$msg = "아이디와 비밀번호를 확인해주세요.";
}
	echo "
		<script>
			msg('{$msg}');
			goPage('/');
		</script>
	";