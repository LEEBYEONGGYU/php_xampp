<?php
	$sql = mq("select * from free where no='".$arr[2]."'");
	$list = $sql->fetch_array();
?>
<ul>
	<li><?php echo $list['no']; ?></li>
	<li><?php echo $list['title']; ?></li>
	<li><?php echo $list['name']; ?></li>
	<li><?php echo $list['date']; ?></li>
</ul>