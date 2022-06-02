<?php
include_once "../../bin/db.php";

	$sql = mq("insert into comm(bno,id,content,date,lv,reply_no) values('".$_POST['bno']."','admin','└".$_POST['content']."',now(),'2','".$_POST['pno']."')");
?>
<ul id="reply_view">
<?php
	$sql2 = mq("select * from comm where bno='".$_POST['bno']."' && lv='1' order by no desc");
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
			<input type="button" value="답글" id="qwd2" data-no2="<?php echo $_POST['bno']; ?>" onClick="ok_reply_reply(<?php echo $_POST['bno'];?>,<?php echo $comm['no'];?>);" data-don="<?php echo $comm['no']; ?>" >
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