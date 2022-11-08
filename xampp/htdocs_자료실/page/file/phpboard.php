
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>PHP FILE</h1>
					<span class="subheading"></span>
		  </div>
		</div>
	  </div>
	</div>
  </header>

  <div class="sub_content">
	  <p><h1>PHP게시판</h1></p>
	<div class="row">
	  <div class="col-lg-8 col-md-10 mx-auto">
		<?php 
			$sql = mq("select * from board order by idx desc");
				while($board = $sql->fetch_array()){

					if(strlen($board['title'])>30)
					{ 
					  //title이 30을 넘어서면 ...표시
					  $content=str_replace($board["content"],mb_substr($board["content"],0,30,"utf-8")."...",$board["content"]);
					}
			?>
		<div class="post-preview">
		<a href="bo_read.php?idx=<?php echo $board['idx'];?>">
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
		
		<!-- Pager
		<div class="clearfix">
		  <a class="btn btn-primary float-right" href="#">더보기 &rarr;</a>
		</div> -->
	  </div>
	</div>
  </div>
	<!---main end--->
	<?php include "../../include/footer.php"; ?>