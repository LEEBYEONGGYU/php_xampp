<?php
	$sql = mq("select * from day where no='".$url[2]."'");
	$daily = $sql -> fetch_array();
?>
<ul>
	<li class="w1 omg fl">No</li>
	<li class="w2"><?php echo $daily['no']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">일자</li>
	<li class="w2"><?php echo $daily['date']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">이름</li>
	<li class="w2"><?php echo $daily['name']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">현장</li>
	<li class="w2"><?php echo $daily['site']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">직종</li>
	<li class="w2"><?php echo $daily['type']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">단가</li>
	<li class="w2"><?php echo $daily['money']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">지급금</li>
	<li class="w2"><?php echo $daily['payment']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">수수료</li>
	<li class="w2"><?php echo $daily['charge']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">메모</li>
	<li class="w2"><?php echo $daily['memo']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">교통비</li>
	<li class="w2"><?php echo $daily['cost']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg omg fl">잔업여부</li>
	<li class="w2"><?php echo $daily['lastjob']; ?></li>
</ul>
<ul>
	<li class="fl"><button onclick="history.back();">뒤로가기</button></li>
	<li><a href="/news/daily_delete/<?php echo $url[2]; ?>"><button>삭제하기</button></li>
</ul>