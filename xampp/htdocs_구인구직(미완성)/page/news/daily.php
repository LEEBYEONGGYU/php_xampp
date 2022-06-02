<div id="search_con">
	<ul>
		<li class="fl w1 w20 fb2">No</li>
		<li class="fl w1 w20 fb2">일자</li>
		<li class="fl w1 w20 fb2">이름</li>
		<li class="fl w1 w20 fb2">현장</li>
		<li class="fl w1 w20 fb2">직종</li>
	</ul>
	<?php
		$sql = mq("select * from day order by no desc");
		while($daily = $sql->fetch_array()){
	?>
	<ul class="list_style">
		<li class="w2 w20 fl tc"><?php echo $daily['no']; ?></li>
		<li class="w2 w20 fl tc"><a href="/news/daily_read/<?php echo $daily['no'] ?>"><?php echo $daily['date']; ?></a></li>
		<li class="w2 w20 fl tc"><a href="/news/daily_read/<?php echo $daily['no'] ?>"><?php echo $daily['name']; ?></a></li>
		<li class="w2 w20 fl tc"><?php echo $daily['site']; ?></li>
		<li class="w2 w20 fl tc"><?php echo $daily['type']; ?></li>
	</ul>
	<?php } ?>
	<ul>
		<li><a href="/news/daily_write"><button>일보작성</button></a></li>
	</ul>
</div>