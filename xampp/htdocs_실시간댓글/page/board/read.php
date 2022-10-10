<style type="text/css">
</style>
<?php
	$sql = mq("select * from board where no='".$url[2]."'");
	$board = $sql->fetch_array();
?>
<ul>
	<li><?php echo $board['no'] ?></li>
	<li><?php echo $board['title'] ?></li>
	<li><?php echo $board['name'] ?></li>
	<li><?php echo $board['date'] ?></li>
</ul>
<ul>
	<li><textarea id="reply_content"></textarea><input type="button" value="댓글" id="qwd" onClick="ok_reply(<?php echo $url[2];?>);" data-no="<?php echo $url[2]; ?>"></li>
</ul>

<ul id="reply_view">
<?php
	$sql2 = mq("select * from comm where bno='".$url[2]."' && lv='1' order by no desc");
	while($comm = $sql2->fetch_array()){
?>

	<li><?php echo $comm['content']; ?><span class="dapdap" data-pno="<?php echo $comm['no']; ?>">답글</span><span class="delete"><a href="/board/reply_delete/<?php echo $comm['no'] ?>">삭제</a></span>
	<?php
		$sql3 = mq("select * from comm where lv='2' && reply_no='".$comm['no']."'");
		while($comm2 = $sql3->fetch_array()){
	?>
	<div><?php echo $comm2['content']; ?></div>
	<?php } ?>
	</li>
	<li class="dn" id="dn<?php echo $comm['no']; ?>" data-set="<?php echo $comm['no']; ?>">
		<div class="dap">
			<textarea name="reply_dap" class="reply_dap<?php echo $comm['no'] ?>" data-ccc="<?php echo $comm['no']; ?>"></textarea>
			<input type="button" value="답글" id="qwd2" data-no2="<?php echo $url[2]; ?>" onClick="ok_reply_reply(<?php echo $url[2];?>,<?php echo $comm['no'];?>);" data-don="<?php echo $comm['no']; ?>" >
		</div>
	</li>
<?php } ?>
</ul>
<script type="text/javascript">
function ok_reply(no){
	var content  = $('#reply_content').val();
	var bno = $("#qwd").attr('data-no');
	if(content == ""){alert('댓글을 입력해주세요.'); return false;}
	$.post("/page/board/reply.php",{content:content,bno:bno},function(data){
		$("#reply_view").html(data);
		$("#reply_content").val('');
	});
}

function ok_reply_reply(no,pno){
	var content2  = $('.reply_dap'+pno).val();
	var bno = $("#qwd2").attr('data-no2');
	if(content2 == ""){alert('답글을 입력해주세요.'); return false;}
	$.post("/page/board/reply2.php",{content:content2,pno:pno,bno:bno},function(data){
		$("#reply_view").html(data);
		$(".reply_dap" + ccc).val('');
	});
}

$(function(){
	$(".dapdap").click(function(){
		var set = $(this).attr("data-pno");
		$("#dn" + set).toggle(this);
	});
});
</script>