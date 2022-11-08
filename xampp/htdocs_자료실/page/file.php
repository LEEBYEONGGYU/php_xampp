
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>SELECT ITEM</h1>
					<span class="subheading">아이템 선택</span>
		  </div>
		</div>
	  </div>
	</div>
  </header>
	<!--- main --->
	<div id="file_main">
		<div id="sub_file_in">
			<div id="sele_t">
				원하는것을 선택하세요.
			</div>
			<div id="sele_img">
				<ul>
					<a href="file/phpboard.php"><li id="bo_img"></li></a>
					<a href="file/phpnote.php"><li id="not_img"></li></a>
					<a href="file/hcj.php"><li id="hcj_img"></li></a>
				</ul>
			</div>
		</div>
	</div>
	<!---main end--->
	<?php include "../include/footer.php"; ?>
