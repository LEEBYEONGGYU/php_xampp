
<?php
	include "../../include/lib.php";

	$start = $_POST['start'];
	$list = $_POST['list'];
	$q = mq("select * from board order by no desc limit {$start},{$list}");
	while($d = mfa($q)){
?>
	<tr>
		<td><?php echo $d['no'];?></td>
		<td style="text-indent:15px; text-align:left;"><a href="/board/board/view/<?php echo $d['no'];?>" title="<?php echo $d['title'];?>"><?php echo ut($d['title']);?></a></td>
		<td><?php echo $d['writer'];?></td>
		<td><?php echo $d['date'];?></td>
	</tr>
	<?php
		$reply = mq("select * from reboard where bno=? order by no desc",array($d['no']));
		$re_count = mnr($reply);
		if($re_count != 0){
			while($redata = mfa($reply)){
			?>
				<tr>
					<td></td>
					<td style="text-indent:30px; text-align:left;"><a href="/board/board/view/reboard/<?php echo $redata['no'];?>" title="<?php echo $redata['title'];?>"><?php echo $redata['title'];?></a></td>
					<td><?php echo $redata['writer'];?></td>
					<td><?php echo $redata['date'];?></td>
				</tr>
			<?php
			}
		}
	?>
<?php
	}
?>