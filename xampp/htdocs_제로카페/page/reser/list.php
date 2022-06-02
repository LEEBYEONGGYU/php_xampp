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

<div class="w100 fl" id="reser">
	<div id="w100 fl mb20">
    	[ 구매가능한 목록 ] - 구매하고 싶은 커피의 사진을 장바구니로 드래그해주세요.
    </div>
    <ul id="drag">
   	<?php
		$q = mq("select * from coffee order by no desc");
		while($d = mfa($q)){
			$resercount = 0;
			$reser = mq("select * from reser where coffeeno=?",array($d['no']));
			while($rd = mfa($reser)){
				$resercount += $rd['count'];
			}
	?>
    	<li>
            <figure
            	data-no="<?php echo $d['no'];?>"
            	data-id="<?php echo $d['id'];?>"
            	data-kind="<?php echo $d['kind'];?>"
            	data-percent="<?php echo $d['percent'];?>"
            	data-memo="<?php echo $d['memo'];?>"
            	data-country="<?php echo $d['country'];?>"
            	data-count="<?php echo ($d['count']-$resercount);?>"
            	data-price="<?php echo $d['price'];?>"
           	>
                <?php image('coffee/'.$d['id'].'.jpg','coffee');?>
                <figcaption>
                	<?php echo $d['kind'];?>
                </figcaption>
            </figure>
        </li>
    <?php
		}
	?>
    </ul>
    <div id="dropzone">
    	<div id="drop_cancle" class="dn">
        	X
        </div>
    	<div id="drop">
        	<img src="/image/dropzone.png" alt="dropzone">
        </div>
        <!-- 커피정보 -->
        <div id="drop_info">
            <input type="hidden" name="no" value="">
        	<ul>
            	<li>종류 : </li><li><span id="info_kind">-</span>
                </li>
            </ul>
        	<ul>
            	<li>생산비율 : </li><li><span id="info_percent">-</span>
                </li>
            </ul>
        	<ul>
            	<li>커피산지 : </li><li><span id="info_country">-</span>
                </li>
            </ul>
        	<ul>
            	<li>설명 : </li><li><span id="info_memo">-</span>
                </li>
            </ul>
        	<ul>
            	<li>가격 : </li><li><span id="info_price">-</span>
                </li>
            </ul>
        	<ul>
            	<li>남은수량 : </li><li><span id="info_count">-</span>
                </li>
            </ul>
        </div>
        <!-- 예약정보 -->
        <div id="reser_info" class="dn">
        <form>
        	<input type="text" name="reser_count" id="reser_count" placeholder="구매수량" style="width:50px;" required>
        	<input type="text" required name="reser_date" id="reser_date" placeholder="예약일자">
        	<div class="w100 fl mt20 dn" id="reser_button_zone">
            	<input type="button" value="예약" id="reser_button">
            </div>
        </form>
        </div>
        
    </div>
</div>