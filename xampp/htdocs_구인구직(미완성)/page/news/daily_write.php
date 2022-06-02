<div id="search_con">
<form action="/news/daily_ok" method="post">
	<ul>
		<li class="fl w1 omg">일자</li>
		<li class="w2">
		<input type="text" maxlength="4" size="5" name="date1" placeholder="Year" />년 / <input type="text" maxlength="2" size="5" name="date2" placeholder="Month" />월 / <input type="text" maxlength="2" size="5" name="date3" placeholder="Day" />일</li>
	</ul>
	<ul>
		<li class="fl w1 omg">이름</li>
		<li class="w2"><input type="text" maxlength="4" size="5" name="name" placeholder="이름" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">현장</li>
		<li class="w2"><input type="text" maxlength="6" size="7" name="site" placeholder="현장" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">직종</li>
		<li class="w2"><input type="text" name="type" placeholder="직종" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">단가</li>
		<li class="w2"><input type="text" name="money" placeholder="단가" />(원)</li>
	</ul>
	<ul>
		<li class="fl w1 omg">지급금</li>
		<li class="w2"><input type="text" value="저녁에 지급 예정" disabled="disabled" name="payment" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">수수료</li>
		<li class="w2"><input type="text" name="charge" placeholder="수수료" />(원)</li>
	</ul>
	<ul>
		<li class="fl w3 omg">메모</li>
		<li class="w4"><textarea name="memo" cols="50" rows="5" placeholder="메모"></textarea></li>
	</ul>
	<ul>
		<li class="fl w1 omg">교통비</li>
		<li class="w2"><input type="text" name="cost" placeholder="교통비" />(원)</li>
	</ul>
	<ul>
		<li class="fl w1 omg">잔업여부</li>
		<li class="w2">예<input type="radio" name="lastjob" value="yes" checked="checked" /> 아니요<input type="radio" name="lastjob" value="no" /></li>
	</ul>
	<ul>
		<li><button>일보작성</button></li>
	</ul>
</form>
</div>