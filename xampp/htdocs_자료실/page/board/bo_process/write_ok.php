<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
$folder = "../../upload/".$filename;
move_uploaded_file($tmpfile,$folder);

$sql = mq("insert into qa(userid, title, content, chk, file) values('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."','대기중','".$o_name."')");
echo "<script>alert('글쓰기 완료되었습니다.');</script>"; 
?>