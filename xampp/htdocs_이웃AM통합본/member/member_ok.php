<?php
	include "../db.php";
	include "../password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$adress = $_POST['adress'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];
        $year = $_POST['year'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $phone= $_POST["phone1"].$_POST["phone2"].$_POST["phone3"];
$id_check = mq("select * from member where id='$userid'");
	$id_check = $id_check->fetch_array();
	if($id_check >= 1){
		echo "<script>alert('아이디가 중복됩니다.'); history.back();</script>";
	}else{
$sql = mq("insert into member (id,pw,name,adress,sex,email,year,month,day,phone) values('".$userid."','".$userpw."','".$username."','".$adress."','".$sex."','".$email."','".$year."','".$month."','".$day."','".$phone."')");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
<?php } ?>