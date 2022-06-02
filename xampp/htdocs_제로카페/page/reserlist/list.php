<?php
if(!isset($_SESSION['id'])){
	echo "
		<script>
			msg('회원가입하셔야 이용가능합니다.');
			goPage('/');
		</script>
	";
} else {
	if($_SESSION['ok'] == 0){
		echo "
			<script>
				msg('관리자가 승인해야 이용가능한 페이지입니다.');
				goPage('/');
			</script>
		";
	}
}
?>


<div class="mb20 w100 fl">
	<?php if($_SESSION['level'] != 99){?>
	[ 사용자 <strong><?php echo $_SESSION['id'];?></strong> 님께서 예약하신 커피 목록입니다. ]
    <?php }else{ ?>
    [ 당신은 <strong>관리자</strong>입니다. 모든 회원이 예약한 커피목록을 보실 수 있습니다. ]
    <?php }?>
</div>

<table class="w100 fl mb20" style="font-size:0.9em;">
	<thead>
    <colgroup>
    	<col width="30px">
    </colgroup>
        <tr>
            <th>No.</th>
            <th>유저아이디</th>
            <th>커피종류</th>
            <th>생산비율</th>
            <th>커피산지</th>
            <th>설명</th>
            <th>주문수량</th>
            <th>가격</th>
            <th>예약일자</th>
            <?php
				if($_SESSION['level']!=99){	
				?>
					<th>취소</th>
				<?php
				}
			?>
        </tr>
    </thead>
    <tbody id="reser_view">
    	<?php
			$where = "";
			if($_SESSION['level']!=99){
				$where .= " where uid='{$_SESSION['id']}'";
			}
			$q = mq("select * from reser {$where}");
			while($d = mfa($q)){
				$coffee = mfaq("select * from coffee where no=?",array($d['coffeeno']));
		?>
        	<tr>
            	<td><?php echo $d['no'];?></td>
                <td><?php echo $d['uid'];?></td>
                <td><?php echo $coffee['kind'];?></td>
                <td><?php echo $coffee['percent'];?></td>
                <td><?php echo $coffee['country'];?></td>
                <td><?php echo $coffee['memo'];?></td>
                <td><?php echo $d['count'];?></td>
                <td><?php echo number_format(($coffee['count']*$d['count']));?>원</td>
                <td><?php echo $d['date'];?></td>
                <?php
					if($_SESSION['level']!=99){	
					?>
                    	<td><input type="button" value="취소" style="padding:3px;" onClick="reser_delete('<?php echo $d['no'];?>');"></td>
                    <?php
					}
				?>
            </tr>
        <?php
			}
		?>
    </tbody>
</table>

<script>
	function reser_delete(no){
		$.post("/page/reserlist/delete.php",{no:no},function(data){
			$("#reser_view").html(data)
		});
	}
</script>