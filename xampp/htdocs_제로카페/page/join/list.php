<form action="/page/join/insert.php" method="post" onSubmit="return idok();">
    <fieldset>
        <label><div>회원가입</div></label>
        <label><input type="text" name="id" placeholder="아이디" style="border-top:1px solid #ddd; width:94%;" class="" id="join_id" onKeyUp="id_chk(this.value);" required><span id="chk"></span></label>
        <label><input type="password" name="pw" pattern="[0-9a-zA-Z~`!@#$%^&*()_+-=]{6,}" placeholder="비밀번호 - 6자이상 입력바람" title="6자이상 입력바람" class="" required></label>
        <label><input type="text" name="phone" placeholder="000-0000-0000 형식으로 입력바람" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" class="" title="000-0000-0000 형식으로 입력바랍니다." required></label>
        <label><input type="text" name="email" placeholder="Eunji@daum.net 형식으로 입력바람" pattern="[0-9a-zA-Z~`!@#$%^&/.,*()_+-=]{1,}@{1}[0-9a-zA-Z~`!@#$/.,%^&*()_+-=]{1,}(\.{1}[0-9a-zA-Z~`!@#$%^&/.,*()_+-=]{1,}){1,}" class="" title="Eunji@daum.net 형식으로 입력바람" required></label>
        <input type="submit" value="가입" class="not" onClick="hit();">
        <input type="button" value="취소" class="not" onClick="join_close();">
    </fieldset>
</form>