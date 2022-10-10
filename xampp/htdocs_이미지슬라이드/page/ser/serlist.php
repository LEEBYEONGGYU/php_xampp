<div class="oe">
	<ul>
		<li>예약목록</li>
	</ul>
</div>
<div class="te">
	<ul>
		<li>번호</li>
		<li>수량</li>
		<li>예약날자</li>
	</ul>
</div>
<?php
	$sql = mq("select * from hagi order by no desc");
	while($cha = $sql->fetch_array()){
?>
<div class="fe">
	<ul>
		<li><?php echo $cha['no']; ?></li>
		<li><a href="/ser/serlist/<?php echo $cha['no']; ?>"><?php echo $cha['t']; ?></a></li>
		<li><?php echo $cha['d']; ?></li>
	</ul>
</div>
<?php
	}
?>