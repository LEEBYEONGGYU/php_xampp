<?php
	$sql = mq("select * from custom where no='".$url[2]."'");
	$custom = $sql -> fetch_array();
?>
<ul>
	<li class="w1 omg fl">No</li>
	<li class="w2"><?php echo $custom['no']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">담당자</li>
	<li class="w2"><?php echo $custom['pch']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">담당자전화번호</li>
	<li class="w2"><?php echo $custom['pchphone']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">사업자등록번호</li>
	<li class="w2"><?php echo $custom['reginum']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">대표자이름</li>
	<li class="w2"><?php echo $custom['pchname']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">주소</li>
	<li class="w2"><?php echo $custom['address']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">전화번호</li>
	<li class="w2"><?php echo $custom['phone']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">업태</li>
	<li class="w2"><?php echo $custom['typenow']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">업종</li>
	<li class="w2"><?php echo $custom['type']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">대표이메일주소</li>
	<li class="w2"><?php echo $custom['em']; ?>(원)</li>
</ul>
<ul>
	<li class="w1 omg fl">팩스번호</li>
	<li class="w2"><?php echo $custom['fax']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">계산서발행여부</li>
	<li class="w2"><?php echo $custom['receipt']; ?></li>
</ul>
<ul>
	<li class="w1 omg fl">결제일</li>
	<li class="w2"><?php echo $custom['rdate']; ?></li>
</ul>
<ul>
	<li class="fl"><button onclick="history.back();">뒤로가기</button></li>
	<li><a href="/custom/custom_delete/<?php echo $url[2]; ?>"><button>삭제하기</button></li>
</ul>