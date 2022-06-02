<?php
	if(isset($_POST['id'])){
		$sql = mfa("select * from member where id='{$_POST['id']}'");
		if($sql && $sql['pw'] == $_POST['pw']){
			$_SESSION['id'] = $sql['id'];
			$_SESSION['pw'] = $sql['pw'];
			$_SESSION['lv'] = $sql['lv'];
		}
	}
?>
<?php
	if(isset($_SESSION['id'])){
?>
<?php echo "{$_SESSION['id']}님 안녕하쇼"; ?>
<a href="logout">로그아웃이요</a>
<?php }else{ ?>

<form action="" method="post">
<input type="text" name="id" placeholder="아이디" required="required" />
<input type="password" name="pw" placeholder="password" required="required" />
<button>로그인인가벼</button>
</form>
<?php } ?>