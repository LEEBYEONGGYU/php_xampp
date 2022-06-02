
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1></h1>
					<span class="subheading"></span>
		  </div>
		</div>
	  </div>
	</div>
  </header>
	<!-- main -->
	<div id="sub_main">
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from subfile where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$subfile = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2 style="color:#333;"><?php echo $subfile['title']; ?></h2>
		<div id="user_info" style="color:#333;"> 
			<?php echo $subfile['name']; ?> <?php echo $subfile['date']; ?>
				<div id="bo_line"></div>
			</div>
			<div style="color:#333;">
				파일 : <a href="../../file/subfile/<?php echo $subfile['file'];?>" download><?php echo $subfile['file']; ?></a>
			</div>
			<div id="bo_content" style="color:#333;">
				<?php echo nl2br("$subfile[content]"); ?>
			</div>
			<div id="bo_ser"><a href="hcj.php">[목록으로]</a></div>
			<div style="height:40px;"></div>
		</div>
	</div>
	<!---main end--->
	<?php include "../../include/footer.php"; ?>