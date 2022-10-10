<?php
	include('db.php');
   
	$bno = $_GET['idx'];
	$sql = mq("select * from member where idx='$bno';");
	$board = $sql->fetch_array();
 ?>
<html>
<head>
        <meta charset='utf-8'>
</head>
 
<body>
        <div align='center'>
        <span>로그인</span>
 
        <form method='POST' action='delete-action.php'>
                <input type="hidden" name="idx" value="<?=$bno?>" />
                <p>글쓴이: <input name="name" type="text"></p>
                <p>PW: <input name="pw" type="text"></p>
                <input type="submit" value="삭제확인">
        </form>
        <br />
        
 
        </div>
 
 
</body>
 
</html>

