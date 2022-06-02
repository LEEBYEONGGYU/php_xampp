<style>
 /*mobile*/
@media(max-width:480px){
	* {margin:0; padding:0; transition:all .5s;}
	header {display:none;}
	#sub_content , #coffee , .inner {margin:0; padding:0 !important;}
	.inner {width:100%;}
	#coffee ul {width:100%;}
	footer {display:none;}
	#backtotop {width:100%; display:block; height:50px; line-height:50px; text-align:center; background:#704241; float:left;}
	#backtotop a {color:white;}
	#coffee img {width:98%; height:300px;}
}

</style>
<div id="coffee">
<?php
	$q = mq("select * from coffee order by no desc");
	while($d = mfa($q)){
?>
<ul>
	<li class="coffee_image"><?php image('coffee/'.$d['id'].'.jpg','coffee');?></li>
    <li><?php echo $d['kind'];?></li>
</ul>
<?php
	}
?>
</div>
<div id="backtotop">
	<a href="/guide/coffee" title="btt">BACK TO TOP</a>
</div>