<script>
	$(document).ready(function(e){
		$(".check").on("keyup", function(){
			var self = $(this);
			var id, pw;

			if(self.attr("id") === "id"){
				pw = null;
				id = self.val();
			}else if(self.attr("id") === "pw"){
				id = null;
				id = self.val();
			}

			$.post(
				"/include/check.php",
				{ id : id, pw : pw },
				function(data){
					if(data){
						self.parent().parent().find("li:last-child").html(data);
						self.parent().parent().find("li:last-child").css("color", "#F00");
					}
				}
			);
		});
	});
</script>
<div class="join">
	<form action="/join/join/join_ok" method="post">
		<ul>
			<li><label for="id">아이디</label></li>
			<li><input type="text" id="id" name="id" title="아이디" value="" class="check" /></li>
			<li> + 아이디중복 체크를 합니다.</li>
		</ul>
		<ul>
			<li><label for="pw">비밀번호</label></li>
			<li><input type="password" id="pw" name="pw" title="비밀번호" /></li>
		</ul>
		<ul>
			<li><label for="phone">전화번호</label></li>
			<li><input type="text" id="phone" name="phone" title="전화번호" /></li>
		</ul>
		<ul>
			<li><label for="email">이메일</label></li>
			<li><input type="text" id="email" name="email" title="이메일" /></li>
		</ul>
		<ul>
			<li><input type="submit" value="신청하기" /></li>
		</ul>
	</form>
</div>