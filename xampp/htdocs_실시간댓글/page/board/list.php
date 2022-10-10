<div class="list">
<?php
	$sql = mq("select * from board order by no desc");
	while($board = $sql->fetch_array()){
?>
	<ul>
		<li><?php echo $board['no'] ?></li>
		<li><a href="/board/read/<?php echo $board['no'] ?>"><?php echo $board['title'] ?></a></li>
		<li><?php echo $board['name'] ?></li>
		<li><?php echo $board['date'] ?></li>
	</ul>
<?php } ?>
</div>