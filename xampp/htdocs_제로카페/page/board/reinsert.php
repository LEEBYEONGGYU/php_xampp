<?php

$title = "ㄴRe :: ".$_POST['title'];
mq("insert into reboard set bno=?,title=?,content=?,writer=?",array($_POST['no'],$title,$_POST['content'],$_SESSION['id']));

echo "
	<script>
		msg('답글이 달아졌다.');
		goPage('/board/board');
	</script>
";