<?php
if(!isset($_SESSION['id'])){
	echo "
		<script>
			msg('회원가입하셔야 이용가능합니다.');
			goPage('/');
		</script>
	";
}
?>

<script>
/*
	$(function(){
		boards();
		
		// 스크롤 이벤트
		$(window).scroll(function(){
			var dh = $(document).height();
			var wh = $(window).height();
			var wt = $(window).scrollTop();
			if(dh == (wh + wt)){
				boards();
			}
		});
	});
*/
</script>

<?php
	$start_num = ($page-1)*5;
	$board_list_num = 5;
	$count = mnrq("select * from board");
	$page_num = ceil($count / $board_list_num);
?>

<table class="w100 fl">
	<colgroup>
    	<col width="50px">
        <col width="*">
        <col width="150px">
        <col width="150px">
    </colgroup>
	<thead>
        <tr>
            <th>No.</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
        </tr>
    </thead>
    <tbody id="listbox">
	<?php
        $q = mq("select * from board order by no desc limit {$start_num},{$board_list_num}");
        while($d = mfa($q)){
    ?>
        <tr>
            <td><?php echo $d['no'];?></td>
            <td style="text-indent:15px; text-align:left;"><a href="/board/board/view/<?php echo $d['no'];?>" title="<?php echo $d['title'];?>"><?php echo ut($d['title']);?></a></td>
            <td><?php echo $d['writer'];?></td>
            <td><?php echo $d['date'];?></td>
        </tr>
        <?php
            $reply = mq("select * from reboard where bno=? order by no desc",array($d['no']));
            $re_count = mnr($reply);
            if($re_count != 0){
                while($redata = mfa($reply)){
                ?>
                    <tr>
                        <td></td>
                        <td style="text-indent:30px; text-align:left;"><a href="/board/board/view/reboard/<?php echo $redata['no'];?>" title="<?php echo $redata['title'];?>"><?php echo ut($redata['title']);?></a></td>
                        <td><?php echo $redata['writer'];?></td>
                        <td><?php echo $redata['date'];?></td>
                    </tr>
                <?php
                }
            }
        ?>
    <?php
        }
    ?>
    </tbody>
</table>
<div class="fl mb20 mt20 ac" style="width:80%;">
<?php
	for($i=1; $i<=$page_num; $i++){
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		if($page == $i){
			echo '<a href="/board/board/list/0/0/'.$i.'" title="'.$i.'" style="color:red;">['.$i.']</a>';
		}else{
		echo '<a href="/board/board/list/0/0/'.$i.'" title="'.$i.'">'.$i.'</a>';
		}
	}
?>
</div>
<div class="fr mb20 mt20 ar" style="width:20%;">
	<?php
		if(isset($_SESSION['id']) && $_SESSION['ok'] != 0) {
	?>
	<input type="button" onClick="goPage('/board/board/input');" value="글쓰기">
    <?php
		}
	?>
</div>