<div class="f1">
	<ul>
		<li>글번호</li>
		<li>글제목</li>
		<li>작성자</li>
		<li>작성일</li>
	</ul>
</div>
<?php
	$sql = mq("select * from free order by no desc limit 5");
	while($list = $sql->fetch_array()){
?>
<div class="f2">
	<ul>
		<li><?php echo $list['no']; ?></li>
		<li><a href="/free/freel/<?php echo $list['no']; ?>"><?php echo $list['title']; ?></a></li>
		<li><?php echo $list['name']; ?></li>
		<li><?php echo $list['date']; ?></li>
	</ul>
</div>
<?php
	}
?>
<div class="f3">
	<ul>
		<li><a href="/free/freel/write"><button>글쓰기</button></a></li>
	</ul>
</div>