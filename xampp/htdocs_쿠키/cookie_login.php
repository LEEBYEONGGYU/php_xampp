<?php

//쿠키설정 기본설정
//setcookie($name[,$value[,$expire[,$path[,$domain[,$secure[,$httponly]]]]]]);

$cookieName = "LoginUser";
$userid = $_POST['userid'];

setcookie($cookieName,$userid, time()+60, "/");
echo "<script>location.href='/'</script>"
?>