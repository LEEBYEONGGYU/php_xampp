<?php
	$sql = mq("select * from cash where no='".$url[2]."'");
	$cash = $sql -> fetch_array();
?>
<ul>
	<li class="w1 omg fl">No</li>
	<li class="w2"><?php echo $cash['no']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">예금</li>
	<li class="w2"><?php echo $cash['bankname']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">통장번호</li>
	<li class="w2"><?php echo $cash['banknum']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">현금시재</li>
	<li class="w2"><?php echo $cash['hyun']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">일지급금액</li>
	<li class="w2"><?php echo $cash['jobmoney']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">경비</li>
	<li class="w2"><?php echo $cash['gita']; ?>&nbsp;&nbsp;<?php echo $cash['gitamoney']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">입금예정금</li>
	<li class="w2"><?php echo $cash['saemoney']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">당일입급금</li>
	<li class="w2"><?php echo $cash['daymoney']; ?>(원)</li>
</ul>
<ul>
	<li class="fl"><button onclick="history.back();">뒤로가기</button></li>
	<li><a href="/news/cash_delete/<?php echo $url[2]; ?>"><button>삭제하기</button></li>
</ul>