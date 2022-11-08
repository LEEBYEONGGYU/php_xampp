
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>WEB FILE</h1>
					<span class="subheading"></span>
		  </div>
		</div>
	  </div>
	</div>
  </header>

  <div class="sub_content">
	  <p><h1>기타WEB</h1></p>
	<div class="row">
	  <div class="col-lg-8 col-md-10 mx-auto">
		<?php 
			$sql = mq("select * from subfile order by idx desc");
				while($subfile = $sql->fetch_array()){
			?>
		<div class="post-preview">
		<a href="hcj_read.php?idx=<?php echo $subfile['idx']; ?>">
			<h2 class="post-title">
				<?php echo $subfile['title']; ?>
			</h2>
			<h3 class="post-subtitle">
				<?php echo $subfile['content']; ?>
			</h3>
		  </a>
		  <p class="post-meta"><?php echo $subfile['date']; ?></p>
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