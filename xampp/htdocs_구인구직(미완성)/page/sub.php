<?php
	include_once("/bin/header.php");
?>
<div class="sub">
	<div class="sub_inner">
		<div class="sub_flash">
			<?php img("/img/sub_flash.png","sub_flash"); ?>
		</div>
<?php
	$sql = mq("select * from menu where sub='".$url[1]."' && lv='2'");
	$main = $sql->fetch_array();
?>
		<div class="search_title"><?php echo $main['title']; ?></div>
		<?php
			include_once("/page/".$url[0]."/".$url[1].".php");
		?>
	</div>
</div>
<?php
	include_once("/bin/footer.php");
?>
