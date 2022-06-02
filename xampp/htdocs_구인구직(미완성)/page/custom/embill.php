<div id="search_con">
	<ul>
		<li class="fl w1 w20 fb2">No</li>
		<li class="fl w1 w20 fb2">회사명</li>
		<li class="fl w1 w20 fb2">매출금액</li>
		<li class="fl w1 w20 fb2">발행일자</li>
		<li class="fl w1 w20 fb2">결졔예정일</li>
	</ul>
	<?php
		$sql = mq("select * from embill order by no desc");
		while($embill = $sql->fetch_array()){
	?>
	<ul class="list_style">
		<li class="w2 w20 fl tc"><?php echo $embill['no']; ?></li>
		<li class="w2 w20 fl tc"><a href="/custom/embill_read/<?php echo $embill['no'] ?>"><?php echo $embill['company']; ?></a></li>
		<li class="w2 w20 fl tc"><a href="/custom/embill_read/<?php echo $embill['no'] ?>"><?php echo $embill['sellmoney']; ?></a></li>
		<li class="w2 w20 fl tc"><?php echo $embill['cdate']; ?></li>
		<li class="w2 w20 fl tc"><?php echo $embill['odate']; ?></li>
	</ul>
	<?php } ?>
	<ul>
		<li><a href="/custom/embill_write"><button>일보작성</button></a></li>
	</ul>
</div>