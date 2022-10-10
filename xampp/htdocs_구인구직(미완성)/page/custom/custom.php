<div id="search_con">
	<ul>
		<li class="fl w1 w20 fb2">No</li>
		<li class="fl w1 w20 fb2">담당자</li>
		<li class="fl w1 w20 fb2">사업자등록번호</li>
		<li class="fl w1 w20 fb2">대표자이름</li>
		<li class="fl w1 w20 fb2">업종</li>
	</ul>
	<?php
		$sql = mq("select * from custom order by no desc");
		while($custom = $sql->fetch_array()){
	?>
	<ul class="list_style">
		<li class="w2 w20 fl tc"><?php echo $custom['no']; ?></li>
		<li class="w2 w20 fl tc"><a href="/custom/custom_read/<?php echo $custom['no'] ?>"><?php echo $custom['pch']; ?></a></li>
		<li class="w2 w20 fl tc"><a href="/custom/custom_read/<?php echo $custom['no'] ?>"><?php echo $custom['reginum']; ?></a></li>
		<li class="w2 w20 fl tc"><?php echo $custom['pchname']; ?></li>
		<li class="w2 w20 fl tc"><?php echo $custom['type']; ?></li>
	</ul>
	<?php } ?>
	<ul>
		<li><a href="/custom/custom_write"><button>일보작성</button></a></li>
	</ul>
</div>