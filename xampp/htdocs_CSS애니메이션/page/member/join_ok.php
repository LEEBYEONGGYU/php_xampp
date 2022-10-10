<?php 

include $_SERVER['DOCUMENT_ROOT']."/include/db.php"; 
$uid = $_POST['userid']; 
$upw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$email = $_POST['email'].'@'.$_POST['email2'];
$sql = mq("insert into member (userid, userpw, email) values ('".$uid."','".$upw."','".$email."')");
?>


<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
