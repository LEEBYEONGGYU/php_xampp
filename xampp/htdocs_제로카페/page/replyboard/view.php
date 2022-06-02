<?php
	$d = mfaq("select * from board where no=?",array($val1));
?>
<form action="#" method="post" class="write">
	<fieldset>
    	<ul>
        	<li><label for="title">번호</label></li>
            <li><span><?php echo $d['no'];?></span></li>
        </ul>
    	<ul>
        	<li><label for="title">제목</label></li>
            <li><span><?php echo ut($d['title']);?></span></li>
        </ul>
    	<ul>
        	<li><label>작성자</label></li>
            <li><?php echo $d['writer'];?></li>
        </ul>
    	<ul>
        	<li><label>작성일</label></li>
            <li><?php echo $d['date'];?></li>
        </ul>
    	<ul>
        	<li style="height:100px; line-height:100px;"><label for="content2">내용</label></li>
            <li><?php echo ut($d['content']);?></li>
        </ul>
    </fieldset>
</form>
<div id="replybox">
	<div id="reply_form">
    	<textarea id="reply_content"></textarea>
        <input type="button" value="댓글" onClick="ok_reply(<?php echo $val1;?>);">
		</script>
    </div>
	<ul id="reply_view">
    <?php
		$reply_query = mq("select * from reply where bno=? and level=1 order by no desc",array($val1));
		while($reply_data = mfa($reply_query)){
	?>
    	<li class="reply_<?php echo $reply_data['no'];?>">
        	<div class="user_id"><?php echo $reply_data['uid'];?></div> <div class="reply_date"><?php echo $reply_data['date'];?></div><div class="reply_reply_<?php echo $reply_data['no'];?>">답글↘</div>
            <!-- 여기 위에 div class 가  reply_reply_댓글 번호 거든? 봐바 reply_reply 들어있잖아 ㅇ-->
            <div class="reply_content"><?php echo ut($reply_data['content']);?></div>
        </li>
        <?php
			$re_query = mq("select * from reply where reply_no=?",array($reply_data['no']));
			$re_num = mnr($re_query);
			if($re_num != 0){
			while($re_data = mfa($re_query)){
		?>
        	<li class="more_reply">
            	<span>ㄴ</span>
                <div>
                    <div class="user_id"><?php echo $re_data['uid'];?></div> <div class="reply_date"><?php echo $re_data['date'];?></div>
                    <div class="reply_content"><?php echo ut($re_data['content']);?></div>
                </div>
            </li>
        <?php
			}
			}
		?>
    <?php
		}
	?>
    </ul>
    <div id="reply_reply_box">
    	<span>ㄴ 댓글답글 :::</span>
    	<textarea id="reply_reply_content"></textarea>
        <input type="button" value="댓글" onClick="ok_reply_reply(<?php echo $val1;?>);">
    </div>
</div>

<!-- 상호작용버튼 -->
<div class="fl w100 ar mb20 mt20">
    <input type="button" value="뒤로" onClick="goPage('/board/replyboard');">
<?php
    if($_SESSION['id'] == $d['writer']){
?>
    <input type="button" value="삭제" onClick="goPage('/board/replyboard/delete/<?php echo $d['no'];?>');">
    <input type="button" value="수정" onClick="goPage('/board/replyboard/rewrite/<?php echo $d['no'];?>');">
<?php
    }
?>
</div>
