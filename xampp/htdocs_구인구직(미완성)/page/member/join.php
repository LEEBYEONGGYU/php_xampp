<script>
// HTML, CSS이 출력된 후 실행
$(document).ready(function() {
	$(".check").on("keyup", function(){
		var self = $(this); // keyup한 this
		var id, pw; // 변수 생성
		
		// 현재 
		if(self.attr("id") === "id"){
			pw = null; // 변수 초기화
			id = self.val(); // 변수 초기화
		} else if(self.attr("id") === "pw"){
			id = null; // 변수 초기화
			pw = self.val(); // 변수 초기화
		}
		// AjAx POST값으로 넘기기
		$.post(
			"/include/check.php", // href
			{ id : id, pw : pw }, // 포스트이름 : 변수 값
			function(data){ // html문서에 출력된 값
				if(data){
					self.parent().parent().find("li:last-child").html(data); // 현재 할머니에 마지막 자식의 text값을 초기화하고 data값을 넣는다.
					self.parent().parent().find("li:last-child").css("color", "#F00"); // 현재 엄마의 엄마의 자식중 마지막 자식의 style에 color을 red로 바꿈.
				}
			}
		);
	});
});
</script>
<div id="search_con">
<form action="/member/join_ok" method="post" enctype="multipart/form-data">
	<ul>
		<li class="fl w1 omg">아이디</li>
		<li class="fl w2"><input type="text" size="20" name="id" id="id" placeholder="아이디" class="check" /></li>
		<li class="w2 chkc" id="id_check"><span> + 아이디를 체크합니다</span></li>
	</ul>
	<ul>
		<li class="fl w1 omg">비밀번호</li>
		<li class="fl w2"><input type="password" id="pw" size="20" name="pw" placeholder="비밀번호" class="check" /></li>
		<li class="w2 chkc" id="pw_check"><span> + 비밀번호 체크합니다</span></li>
	</ul>
	<ul>
		<li class="fl w1 omg">이름</li>
		<li class="w2"><input type="text" maxlength="4" size="8" name="name" placeholder="이름" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">주민번호</li>
		<li class="w2"><input type="text" maxlength="6" size="13" name="jumin1" placeholder="주민등록번호" /> - <input type="password" maxlength="7" size="13"name="jumin2" placeholder="주민등록번호" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">주소</li>
		<li class="w2"><input type="text" size="70" name="address" placeholder="주소" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">전화번호</li>
		<li class="w2"><input type="text" maxlength="3" size="3" name="phone1" placeholder="번호" /> - <input type="text" maxlength="4" size="4"name="phone2" placeholder="번호" /> - <input type="text" maxlength="4" size="4"name="phone3" placeholder="번호" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">직종</li>
		<li class="w2"><input type="text"name="type" placeholder="직종"  /></li>
	</ul>
	<ul>
		<li class="fl w3 omg">메모</li>
		<li class="w4"><textarea name="memo" cols="50" rows="4" placeholder="메모"></textarea></li>
	</ul>
	<ul>
		<li class="fl w1 omg">비고</li>
		<li class="w2"><input type="text" name="note" placeholder="비고" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">신분증파일입력</li>
		<li class="w2"><input type="file" name="idc" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">통장사본</li>
		<li class="w2"><input type="file" name="bank" /></li>
	</ul>
	<ul>
		<li class="but1"><button>회원가입</button></li>
	</ul>
</form>
</div>