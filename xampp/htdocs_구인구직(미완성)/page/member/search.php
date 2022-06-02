<form action="" method="post">
<div class="search2">
	<ul>
		<li class="search_input">
		<select name="search_jo" class="s2">
			<option value="통합검색">통합검색</option>
		</select>
		<input type="text" size="80" title="search_input" id="search" name="search" placeholder="검색" /><button>검색</button></li>
	</ul>
</div>
</form>
<div class="good">
<?php
	if(isset($_POST['search'])){
?>
	<ul>
		<li class="fl w1 w20 fb2">이름</li>
		<li class="fl w1 w20 fb2">주민번호</li>
		<li class="fl w1 w20 fb2">주소</li>
		<li class="fl w1 w20 fb2">전화번호</li>
		<li class="fl w1 w20 fb2">직종</li>
	</ul>
	<div class="list_body">
		<?php
			$sql = mq("select * from member where name like '%".$_POST['search']."%' || type like '%".$_POST['search']."%' ");	
			while($rows = $sql -> fetch_array()){
		?>
		<ul class="goood2">
			<li class="w2 w20 fl tc"><?php echo $rows['name']; ?></li>
			<li class="w2 w20 fl tc"><?php echo $rows['jumin']; ?></li>
			<li class="w2 w20 fl tc"><?php echo $rows['address']; ?></li>
			<li class="w2 w20 fl tc"><?php echo $rows['phone']; ?></li>
			<li class="w2 w20 fl tc"><?php echo $rows['type']; ?></li>
		</ul>
			<?php
		}
			?>
	</div>
<?php
}
?>
		</div>