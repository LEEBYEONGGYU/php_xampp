<div id="search_con">
	<ul>
		<li class="fl w1 w20 fb2">No</li>
		<li class="fl w1 w20 fb2">회사명</li>
		<li class="fl w1 w20 fb2">사업자등록번호</li>
		<li class="fl w1 w20 fb2">매출금액</li>
		<li class="fl w1 w20 fb2">부가세</li>
	</ul>
	<?php
		$sql = mq("select * from isbill order by no desc");
		while($isbill = $sql->fetch_array()){
	?>
	<ul class="list_style">
		<li class="w2 w20 fl tc"><?php echo $isbill['no']; ?></li>
		<li class="w2 w20 fl tc"><a href="/custom/isbill_read/<?php echo $isbill['no'] ?>"><?php echo $isbill['company']; ?></a></li>
		<li class="w2 w20 fl tc"><a href="/custom/isbill_read/<?php echo $isbill['no'] ?>"><?php echo $isbill['reginum']; ?></a></li>
		<li class="w2 w20 fl tc"><?php echo $isbill['sellmoney']; ?></li>
		<li class="w2 w20 fl tc"><?php echo $isbill['bonusmoney']; ?></li>
	</ul>
	<?php } ?>
	<ul>
		<li><a href="/custom/isbill_write"><button>일보작성</button></a></li>
	</ul>
</div>