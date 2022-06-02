<script src="../../style/common.js"></script>
<?php

include "../../include/lib.php";

mq("insert into user set id=?,pw=?,phone=?,email=?",array($_POST['id'],md5($_POST['pw']),$_POST['phone'],$_POST['email']));

echo "
	<script>
		msg('가입성공');
		goPage('/');
	</script>
";