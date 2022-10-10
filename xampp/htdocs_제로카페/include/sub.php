<div id="sub_content">
	<div class="inner">
    	<!-- 폰트 사이즈 조절 && 프린트 CSS -->
        <div id="fontsize">
			<?php image('pretty.png','이쁘지');?>
        	<h2><?php echo $now_sub['s_title'];?></h2>
        	<ul>
            <li><a href="javascript:resize(0.05);" title="plus">크게</a></li>
        	<li><a href="javascript:resize(-0.05);" title="minus">작게</a></li>
        	<li><a href="javascript:resize(100)" title="reset">원래대로</a></li>
            <li><a href="javascript:print();" title="print"><?php image('print.png','프린트');?></a></li>
            </ul>
        </div>
        
        <!-- 본문 내용 -->
    	<?php
			if(file_exists("./page/{$sub_id}/{$mode}.php")){
				include "./page/{$sub_id}/{$mode}.php";
			} else {
				include "./include/alert.php";
			}
		?>
    </div>
</div>