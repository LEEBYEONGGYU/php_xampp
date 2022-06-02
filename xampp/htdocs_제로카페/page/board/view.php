<?php
if($val1 == "reboard"){
	$d = mfaq("select * from reboard where no=?",array($val2));
}else{
	$d = mfaq("select * from board where no=?",array($val1));
}
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
<?php
	if($val1 != "reboard"){
?>
<!-- 댓글 -->
<form style="float:left; margin-top:-30px;">
	<input type="hidden" value="<?php echo $val1;?>" id="bno">
	<textarea name="reply" id="reply" style="float:left; resize:none; width:600px; height:70px;"></textarea>
    <input type="button" style="float:left; height:85px; width:70px; margin-left:5px;" value="달기" id="reply_button">
    <!-- 댓글 뷰 구간 -->
    <ul class="w100 fl" id="reply_view">
        <?php
			$mq=mq("select * from reply where bno=? order by no desc",array($val1));
			while($md = mfa($mq)){
		?>
    	<li style="margin-top:10px; float:left;">
        	<strong style="font-size:1.3em;"><?php echo $md['uid'];?></strong> <span style="font-size:0.89em;"><?php echo $md['date'];?></span>
        </li>
        <li style="margin-top:5px; width:100%; float:left; border-bottom:1px solid #ccc; padding-bottom:10px;">
        	<?php echo ut($md['content']);?>
        </li>
        <?php
			}
		?>
    </ul>
</form>
<?php
	}
?>

<!-- 상호작용버튼 -->
<div class="fl w100 ar mb20 mt20">
	<?php
		if($val1 != "reboard"){
	?>
    <input type="button" value="답글" onClick="goPage('/board/board/reboard/<?php echo $d['no'];?>');">
    <?php
		}
	?>
    <input type="button" value="뒤로" onClick="goPage('/board/board');">
<?php
    if($_SESSION['id'] == $d['writer'] && $val1 != "reboard"){
?>
    <input type="button" value="삭제" onClick="goPage('/board/board/delete/<?php echo $d['no'];?>');">
    <input type="button" value="수정" onClick="goPage('/board/board/rewrite/<?php echo $d['no'];?>');">
<?php
    }
?>
</div>