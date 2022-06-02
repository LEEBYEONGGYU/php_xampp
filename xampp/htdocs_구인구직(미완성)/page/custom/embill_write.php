<div id="search_con">
<form action="/custom/embill_ok" method="post">
	<ul>
		<li class="fl w1 omg">회사명</li>
		<li class="w2"><input type="text" name="company" /></li>
	</ul>
	<ul>
		<li class="fl w1 omg">매출금액</li>
		<li class="w2"><input type="text" name="sellmoney" />(원)</li>
	</ul>
	<ul>
		<li class="fl w1 omg">발행일자</li>
		<li class="w2"><input type="text" maxlength="4" size="5" name="cdate1" />년 / <input type="text" maxlength="2" size="2" name="cdate2" />월 / <input type="text" maxlength="2" size="2" name="cdate3" />일</li>
	</ul>
	<ul>
		<li class="fl w1 omg">결제예정일</li>
		<li class="w2"><input type="text" maxlength="4" size="5" name="odate1" />년 / <input type="text" maxlength="2" size="2" name="odate2" />월 / <input type="text" maxlength="2" size="2" name="odate3" />일</li>
	</ul>
	<ul>
		<li class="fl w1 omg">매출등록여부</li>
		<li class="w2">예<input type="radio" name="regi" value="Yes" checked="checked" /> 아니요<input type="radio" name="regi" value="No" /></li>
	</ul>
	<ul>
		<li><button>계산서발행</button></li>
	</ul>
</form>
</div>