<?php
	$sql = mq("select * from isbill where no='".$url[2]."'");
	$isbill = $sql -> fetch_array();
?>
<ul>
	<li class="w1 omg fl">No</li>
	<li class="w2"><?php echo $isbill['no']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">회사명</li>
	<li class="w2"><?php echo $isbill['company']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">사업자등록번호</li>
	<li class="w2"><?php echo $isbill['reginum']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">주소</li>
	<li class="w2"><?php echo $isbill['address']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">매출금액</li>
	<li class="w2"><?php echo $isbill['sellmoney']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">부가세</li>
	<li class="w2"><?php echo $isbill['bonusmoney']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">발행일자</li>
	<li class="w2"><?php echo $isbill['cdate']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">결제예정일</li>
	<li class="w2"><?php echo $isbill['odate']; ?></li>
</ul>
<ul>
	<li class="fl"><button onclick="history.back();">뒤로가기</button></li>
	<li><a href="/custom/isbill_delete/<?php echo $url[2]; ?>"><button>삭제하기</button></li>
</ul>