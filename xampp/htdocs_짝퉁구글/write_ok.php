<?php
include_once("/bin/db.php");
	session_start();

	$tmpfile=$_FILES['pic']['tmp_name'];
	$filename=$_FILES['pic']['name'];

	$file_ext_arr=explode(".",$filename);
	$ext=end($file_ext_arr);
	$ext=strtolower($ext);
	if($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg"){
		$folder = "./upload/shop(".date("Y-m-d-H-i-s").")_".$file_ext_arr[0].".".$ext;
		move_uploaded_file($tmpfile,$folder);

		
		$sql = mq("insert into gall(title,pic,content) values('".$_POST['title']."','".$folder."','".$_POST['content']."')");
	}
?>
<meta http-equiv="refresh" content="0 url=/">