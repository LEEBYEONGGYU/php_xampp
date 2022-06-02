<script src="../../style/common.js"></script>
<?php

include "../../include/lib.php";

mq("insert into reser set uid=?,coffeeno=?,count=?,date=?",array($_SESSION['id'],$_POST['coffeeno'],$_POST['count'],$_POST['date']));

?>

<?php
	$q = mq("select * from coffee order by no desc");
	while($d = mfa($q)){
		$resercount = 0;
		$reser = mq("select * from reser where coffeeno=?",array($d['no']));
		while($rd = mfa($reser)){
			$resercount += $rd['count'];
		}
?>
	<li>
		<figure
			data-no="<?php echo $d['no'];?>"
			data-id="<?php echo $d['id'];?>"
			data-kind="<?php echo $d['kind'];?>"
			data-percent="<?php echo $d['percent'];?>"
			data-memo="<?php echo $d['memo'];?>"
			data-country="<?php echo $d['country'];?>"
			data-count="<?php echo ($d['count']-$resercount);?>"
			data-price="<?php echo $d['price'];?>"
		>
			<?php image('coffee/'.$d['id'].'.jpg','coffee');?>
			<figcaption>
				<?php echo $d['kind'];?>
			</figcaption>
		</figure>
	</li>
<?php
	}
?>
