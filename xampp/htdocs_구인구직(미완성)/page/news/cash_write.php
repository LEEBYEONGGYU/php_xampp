<div id="search_con">
<form action="/news/cash_ok" method="post">
	<ul>
		<li class="fl w1 omg">예금</li>
		<li class="w2">
			<select name="bankname">
				<option value="농협">농협</option>
				<option value="대구">대구</option>
				<option value="외한(개인)">외한(개인)</option>
				<option value="농협(개인)">농협(개인)</option>
			</select>
			<input type="text" name="banknum" size="30" placeholder="통장번호" />
		</li>
	</ul>
	<ul>
		<li class="fl w1 omg">현금시재</li>
		<li class="w2"><input type="text" name="hyun" placeholder="현금시재" />(원)</li>
	</ul>
	<ul>
		<li class="fl w1 omg">일지급금액</li>
		<li class="w2"><input type="text" name="jobmoney" placeholder="일지급금액" />(원)</li>
	</ul>
	<ul>
		<li class="fl w1 omg">경비</li>
		<li class="w2">
			<select name="gita">
				<option value="식비">식비</option>
				<option value="잡비">잡비</option>
				<option value="기타">기타</option>
			</select>
			<input type="text" name="gitamoney" placeholder="경비" />(원)
		</li>
	</ul>
	<ul>
		<li class="fl w1 omg">입금예정금</li>
		<li class="w2">
			<select name="saemoney">
				<option value="세금예산서">세금예산서</option>
				<option value="계산서미발행">계산서미발행</option>
			</select>
		</li>
	</ul>
	<ul>
		<li class="fl w1 omg">당일입급금</li>
		<li class="w2"><input type="text" name="daymoney" placeholder="당일입급금" />(원)</li>
	</ul>
	<ul>
		<li><button>작성하기</button></li>
	</ul>
</form>
</div>