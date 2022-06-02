<?php

include "../../include/lib.php";

mq("delete from reser where no=?",array($_POST['no']));
?>
<?php
	$where = "";
	if($_SESSION['level']!=99){
		$where .= " where uid='{$_SESSION['id']}'";
	}
	$q = mq("select * from reser {$where}");
	while($d = mfa($q)){
		$coffee = mfaq("select * from coffee where no=?",array($d['coffeeno']));
?>
	<tr>
		<td><?php echo $d['no'];?></td>
		<td><?php echo $d['uid'];?></td>
		<td><?php echo $coffee['kind'];?></td>
		<td><?php echo $coffee['percent'];?></td>
		<td><?php echo $coffee['country'];?></td>
		<td><?php echo $coffee['memo'];?></td>
		<td><?php echo $d['count'];?></td>
		<td><?php echo number_format(($coffee['count']*$d['count']));?>원</td>
		<td><?php echo $d['date'];?></td>
		<?php
			if($_SESSION['level']!=99){	
			?>
				<td><input type="button" value="취소" style="padding:3px;" onClick="reser_delete('<?php echo $d['no'];?>');"></td>
			<?php
			}
		?>
	</tr>
<?php
	}
?>
