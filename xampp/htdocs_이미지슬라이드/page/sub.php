<div class="sub">
	<div class="sub_inner">
		<?php
			if(file_exists("./page/".$arr[0]."/".$arr[2].".php")){
				include_once ("/page/".$arr[0]."/".$arr[2].".php");
			}else{
				echo "준비중인 페이지입니다.";
			}
		?>
	</div>
</div>