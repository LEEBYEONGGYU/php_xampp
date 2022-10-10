<?php 
//쿠키삭제
setcookie('LoginUser', '', time() - 1);
echo "<script>location.href='/'</script>"
?>