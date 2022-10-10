<div class="b">
	
</div>
<div class="q1">
	<ul>
		<li>번호</li>
		<li>커피종류</li>
		<li>생산비율</li>
		<li>설명</li>
		<li>커피산지</li>
		<li>보유수량</li>
		<li>가격</li>
	</ul>
</div>
<?php
	$sql = mq("select * from coffeelist limit 5");
	while($co = $sql->fetch_array()){
?>
<div class="q2">
	<ul>
		<li><?php echo $co['id']; ?></li>
		<li><?php echo $co['kind']; ?></li>
		<li><?php echo $co['percent']; ?></li>
		<li><?php echo $co['memo']; ?></li>
		<li><?php echo $co['country']; ?></li>
		<li><?php echo $co['count']; ?></li>
		<li><?php echo $co['price']; ?></li>
	</ul>
</div>
<?php
	}
?>
<div class="cup">
	<input type="text" name="asdf" placeholder="검색" />
</div>