<form action="/board/board/insert" method="post" class="write">
	<fieldset>
    	<ul>
        	<li><label for="title">제목</label></li>
            <li><input type="text" name="title" id="title" required></li>
        </ul>
    	<ul>
        	<li><label for="pw">비밀번호</label></li>
            <li><input type="passwrod" name="pw" id="pw" required style="width:100px;"></li>
        </ul>
    	<ul>
        	<li><label>작성자</label></li>
            <li><input type="text" value="<?php echo $_SESSION['id'];?>" readonly style="width:100px; color:black;" disabled></li>
        </ul>
    	<ul>
        	<li style="height:100px; line-height:100px;"><label for="content2">내용</label></li>
            <li><textarea style="margin-top:5px; margin-bottom:5px;" name="content" id="content2" rows="5" cols="135" style="resize:none;" required></textarea></li>
        </ul>
    </fieldset>
    <div class="fl w100 mt20 ac">
        <input type="submit" value="작성">
		<input type="reset" value="재작성">
    	<input type="button" value="뒤로" onClick="goPage('/board/board')">
    </div>
</form>