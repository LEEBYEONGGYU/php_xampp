<!doctype html>
<head>
<title>쿠키 로그인</title>
<meta charset="utf-8" />
</head>
<body>

<?php
    if(!isset($_COOKIE['LoginUser'])){
?>
    <form action="cookie_login.php" method="post">
        아이디 : <input type="text" name="userid"/>
        비밀번호 : <input type="password" name="userpw" />
        <button type="submit">로그인</button>
    </form>
<?php }else{?>
    어서오세요! <?php echo $_COOKIE['LoginUser'];?>님!
    <a href="/logout.php">로그아웃</a>
<?php } ?>
</body>
</html>