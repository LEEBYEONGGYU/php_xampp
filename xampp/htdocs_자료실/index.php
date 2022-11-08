<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>Hello!</h1>
					<span class="subheading">This is Data Room</span>
				</div>
			</div>
		</div>
	</div>
</header>

  <!-- Main Content -->

  <section>
	<div class="content1">
		<h1>PHP게시판</h1>
			<div class="list">
				<?php 
					$sql = mq("select * from board order by idx desc limit 0,5");
					while($board = $sql->fetch_array()){
						$title=$board["title"]; 
					if(strlen($title)>30){ 
						$content=str_replace($board["content"],mb_substr($board["content"],0,30,"utf-8")."...",$board["content"]);
					}
				?>
				<div class="post-preview">
					<a href="page/file/bo_read.php?idx=<?php echo $board['idx'];?>">
						<h2 class="post-title">
							<?php echo $board['title']; ?>
						</h2>
						<h3 class="post-subtitle">
							<?php echo $content; ?>
						</h3>
					</a>
					<p class="post-meta"><?php echo $board['date']; ?></p>
				</div>
				<hr>
				<?php } ?>			
				<div class="clearfix">
					<a class="btn btn-primary float-left" href="/page/file/phpboard.php">더보기 &rarr;</a>
				</div>
			</div>
		</div>
		<div class="content2">
			<h1>QA게시판</h1>
				<div class="list">
					<?php 
						$sql2 = mq("select * from qa order by idx desc limit 0,5");
						while($qa = $sql2->fetch_array()){
					?>
					<div class="post-preview">
						<a href="page/board/bo_process/read.php?idx=<?php echo $qa['idx'];?>">
							<h2 class="post-title">
								<?php echo $qa['title']; ?>
							</h2>
							<h3 class="post-subtitle">
								<?php echo $qa['content']; ?>
							</h3>
						</a>
						<p class="post-meta"><?php echo $qa['w_date']; ?> <?php echo $qa['chk']; ?></p>
					</div>
					<hr>
					<?php } ?>
				<!-- Pager -->
				<div class="clearfix">
					<a class="btn btn-primary float-left" href="/page/board/board">더보기 &rarr;</a>
				</div>
			</div>
		</section>
	<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>
</body>
</html>
