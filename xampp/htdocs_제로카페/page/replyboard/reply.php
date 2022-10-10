<?php
include "../../include/lib.php";

/* reply_no값이 있고 reply_no가 "" 아닐경우 답글 작성 */
if(isset($_POST['reply_no']) && $_POST['reply_no'] != ""){
mq("insert into reply set uid=?, content=?, level=2, reply_no=?",array($_SESSION['id'],$_POST['content'],$_POST['reply_no']));
}else{/* 그 외 나머지 댓글 작성인듯 */
mq("insert into reply set bno=?, uid=?, content=?, level=1",array($_POST['bno'],$_SESSION['id'],$_POST['content']));
}
$mq = mq("select * from reply where bno=? and level=1 order by no desc",array($_POST['bno']));
while($reply_data = mfa($mq)){
?>
    <li class="reply_<?php echo $reply_data['no'];?>">
        <div class="user_id"><?php echo $reply_data['uid'];?></div> <div class="reply_date"><?php echo $reply_data['date'];?></div><div class="reply_reply_<?php echo $reply_data['no'];?>">답글↘</div>
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
<div id="reply_reply_box" class="dn">
    <span>ㄴ 댓글답글 :::</span>
    <textarea id="reply_reply_content"></textarea>
    <input type="button" value="댓글" onClick="ok_reply_reply(<?php echo $_POST['bno'];?>);">
</div>


<script>
var now_reply_num = "";
$(function(e) {
	$("div[class^='reply_reply']").on("click",function(){
		var dis = $(this).attr('class').split("_");
		
		$('.reply_'+dis[2]).after($('#reply_reply_box'));
		$("#reply_reply_content").val('');
		$("#reply_reply_box").removeClass('dn');
		
		now_reply_num = dis[2];
	});
});


function ok_reply_reply(no){
	var content = $("#reply_reply_content").val();
	if(content == ""){alert('댓글을 입력하세요.'); return false;}
	$.post("/page/replyboard/reply.php",{content:content,reply_no:now_reply_num,bno:no},function(data){
		$("#reply_view").html(data);
		$("#reply_reply_content").val('');
	});
}
</script>