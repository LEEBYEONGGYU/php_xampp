<div id="search_con">
	<ul>
		<li class="fl w1 w20 fb2">No</li>
		<li class="fl w1 w20 fb2">예금</li>
		<li class="fl w1 w20 fb2">현금시재</li>
		<li class="fl w1 w20 fb2">일지급금액</li>
		<li class="fl w1 w20 fb2">당일입급금</li>
	</ul>
	<?php
		$sql = mq("select * from cash order by no desc");
		while($cash = $sql->fetch_array()){
	?>
	<ul class="list_style">
		<li class="w2 w20 fl tc"><?php echo $cash['no']; ?></li>
		<li class="w2 w20 fl tc"><a href="/news/cash_read/<?php echo $cash['no'] ?>"><?php echo $cash['bankname']; ?></a></li>
		<li class="w2 w20 fl tc"><a href="/news/cash_read/<?php echo $cash['no'] ?>"><?php echo $cash['hyun']; ?></a></li>
		<li class="w2 w20 fl tc"><?php echo $cash['jobmoney']; ?></li>
		<li class="w2 w20 fl tc"><?php echo $cash['daymoney']; ?></li>
	</ul>
	<?php } ?>
	<ul>
		<li><a href="/news/cash_write"><button>일보작성</button></a></li>
	</ul>
</div>