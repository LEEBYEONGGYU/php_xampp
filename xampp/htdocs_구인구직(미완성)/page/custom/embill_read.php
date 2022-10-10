<?php
	$sql = mq("select * from embill where no='".$url[2]."'");
	$embill = $sql -> fetch_array();
?>
<ul>
	<li class="w1 omg fl">No</li>
	<li class="w2"><?php echo $embill['no']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">회사명</li>
	<li class="w2"><?php echo $embill['company']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">매출금액</li>
	<li class="w2"><?php echo $embill['sellmoney']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">발행일자</li>
	<li class="w2"><?php echo $embill['cdate']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">결제예정일</li>
	<li class="w2"><?php echo $embill['odate']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">매출등록여부</li>
	<li class="w2"><?php echo $embill['regi']; ?></li>
</ul>
<ul>
	<li class="fl"><button onclick="history.back();">뒤로가기</button></li>
	<li><a href="/custom/embill_delete/<?php echo $url[2]; ?>"><button>삭제하기</button></li>
</ul>