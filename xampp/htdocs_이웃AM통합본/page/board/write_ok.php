<?php

include "../../db.php";

if(isset($_SESSION['userid'])){
$date = date('Y-m-d');
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}

$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']); //iconv은 인코딩설정을 바꿔줌
$folder = "../../upload/".$filename;
move_uploaded_file($tmpfile,$folder);

$sql = mq("insert into board(name,pw,title,content,lock_post,file,date) values('".$_SESSION['userid']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$lo_post."','".$o_name."','".$date."')");

echo "<script>alert('글쓰기 완료되었습니다.');</script>"; 

$hit = mysqli_fetch_array(mq("select * from levelpoint where userid ='".$_SESSION['userid']."'"));
$hit = $hit['point'] + 1;
$fet = mq("update levelpoint set point = '".$hit."' where userid = '".$_SESSION['userid']."'");



?>
<meta http-equiv="refresh" content="0 url=../list.php" />
<?php 
    }else{
      echo "<script>alert('잘못된 접근입니다.'); location.href='../index.php'; </script>";
    } 
?>