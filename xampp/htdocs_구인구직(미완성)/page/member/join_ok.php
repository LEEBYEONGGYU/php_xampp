<?php
	if($_POST['id'] == "" || $_POST['pw'] == "" || $_POST['name'] == "" || $_POST['jumin1'] == "" || $_POST['jumin2'] == "" || $_POST['address'] == "" || $_POST['phone1'] == "" || $_POST['phone2'] == "" || $_POST['phone3'] == "" || $_POST['type'] == "" || $_POST['memo'] == "" || $_POST['note'] == ""){
		echo "<script>alert('전부다 입력해 주시기 바랍니다'); location.href='/member/join' </script>";
	}else{

	$tmpfile=$_FILES['bank']['tmp_name'];
	$filename=$_FILES['bank']['name'];

	$file_ext_arr=explode(".",$filename);
	$ext=end($file_ext_arr);
	$ext=strtolower($ext);
	if($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg"){
		$folder = "./upload/shop(".date("Y-m-d-H-i-s").")_".$file_ext_arr[0].".".$ext;
		move_uploaded_file($tmpfile,$folder);

		$tmpfile=$_FILES['idc']['tmp_name'];
		$filename=$_FILES['idc']['name'];

		$file_ext_arr2=explode(".",$filename);
		$ext2=end($file_ext_arr2);
		$ext2=strtolower($ext2);
		if($ext2 == "jpg" || $ext2 == "png" || $ext2 == "gif" || $ext2 == "jpeg"){
			$folder2 = "./upload/shop(".date("Y-m-d-H-i-s").")_".$file_ext_arr2[0].".".$ext2;
			move_uploaded_file($tmpfile,$folder2);

			$jumin = $_POST['jumin1'].'-'.$_POST['jumin2'];
			$phone = $_POST['phone1'].'-'.$_POST['phone2'].'-'.$_POST['phone3'];
			
			$sql = mq("insert into member(id,pw,name,jumin,address,phone,type,memo,note,idc,bank,lv) values('".$_POST['id']."','".$_POST['pw']."','".$_POST['name']."','".$jumin."','".$_POST['address']."','".$phone."','".$_POST['type']."','".$_POST['memo']."','".$_POST['note']."','".$folder2."','".$folder."','1')");
			}
		}
	}
?>
<meta http-equiv="refresh" content="0 url=/">