<div class="ac w100 fl">
    <div class="mb20">
    [글 작성시 입력했던 암호를 적어주세요.]
    </div>
<form action="/board/board/delete_ok" method="post">
	<input type="hidden" value="<?php echo $val1;?>" name="no">
	<input type="text" name="pw">
    <input type="submit" value="삭제">	
</form>
</div>