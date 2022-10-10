<div class="fw">
	<form action="/free/write/write_ok" method="post">
		<div class="fw_inner">
			<ul>
				<li><label for="title">제목</label></li>
				<li><input type="text" id="title" name="title" /></li>
			</ul>
			<ul>
				<li><label for="name">이름</label></li>
				<li><input type="text" id="name" name="name" /></li>
			</ul>
			<ul>
				<li><label for="content">내용</label></li>
				<li><textarea id="content" name="content" cols="30" rows="10"></textarea></li>
			</ul>
			<ul>
				<li><label for="date">날짜</label></li>
				<li><input type="text" id="date" name="date" placeholder="-를 사용해주세요" required="required" /></li>
			</ul>
			<ul>
				<li><input type="submit" value="등록하기" /></li>
			</ul>
		</div>
	</form>
</div>