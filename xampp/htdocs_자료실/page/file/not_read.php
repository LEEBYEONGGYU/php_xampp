<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
		  <div class="site-heading">
			<h1>Hello! </h1>
			<span class="subheading">This is Data Room</span>
		  </div>
		</div>
	  </div>
	</div>
  </header>
	<!-- main -->
	<div id="sub_main">
		
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from note where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$note = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2 style="color:#333;"><?php echo $note['title']; ?></h2>
		<div id="user_info" style="color:#333;">
			<?php echo $note['name']; ?> <?php echo $note['date']; ?>
				<div id="bo_line"></div>
			</div>
			<div style="color:#333;">
				파일 : <a href="../../file/note/<?php echo $note['file'];?>" download><?php echo $note['file']; ?></a>
			</div>
			<div id="bo_content" style="color:#333;">
				<?php echo nl2br("$note[content]"); ?>
			</div>
			<div id="bo_ser"><a href="phpnote.php">[목록으로]</a></div>
			<div style="height:40px;"></div>
		</div>
	</div>
	<!--main end-->
<?php include "../../include/footer.php"; ?>