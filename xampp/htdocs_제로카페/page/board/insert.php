<?php

$q = mq("insert into board set title=?,content=?,writer=?,pw=?",array($_POST['title'],$_POST['content'],$_SESSION['id'],$_POST['pw']));
echo "
	<script>
		msg('글이 작성되었습니다.');
		goPage('/board/board');
	</script>
";