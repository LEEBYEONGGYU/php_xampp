<?php
	if(isset($_POST['id'])){
		$sql = mfa("select * from member where id='{$_POST['id']}'");
		if($sql && $_SESSION['pw'] == $_POST['pw']){
			$_SESSION['id'] = $_POST['id'];
			$_SESSION['pw'] = $_POST['pw'];
			$_SESSION['lv'] = $_POST['lv'];
		}
?>

<?php
if($_SESSION['id'] = $_POST['id']){
echo "{$_SESSION['id']}님 어서오세요";
?>
<?php
}
?>
<?php
}
?>