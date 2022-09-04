<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>

<div id="catagory">
		<div id="catagory_title">카테고리</div>
		<nav id="menu">
			<ul>
				<li class="menu_t1"><a href="/page/browsing.php?catagory=eleTv">가전, TV</a></li>
				<li class="menu_t2"><a href="/page/browsing.php">컴퓨터 노트북, 조립PC</a></li>
				<li class="menu_t3"><a href="/page/browsing.php">모바일</a></li>
				<li class="menu_t4"><a href="/page/browsing.php">카메라</a></li>
				<li class="menu_t5"><a href="/page/browsing.php">자전거, 스포츠</a></li>
			</ul>
		</nav>
	</div>
<img src="/upload/admin/catagory/defualt_main.png" id="defualt_main" />

	<div id="catagory_hover_img">
		<img src="/upload/admin/catagory/cat1_img.png" id="catagory_img1" />
		<img src="/upload/admin/catagory/cat1_2img.png" id="catagory_img2" class="def_none"/>
		<img src="/upload/admin/catagory/cat1_3img.png" id="catagory_img3" class="def_none"/>
		<img src="/upload/admin/catagory/cat1_4img.png" id="catagory_img4" class="def_none"/>
		<img src="/upload/admin/catagory/cat1_5img.png" id="catagory_img5" class="def_none"/>
	</div>
</header>

<section id="main_sec1">
	<div id="main_sec1_in">
		<div id="sec1_title">현재 인기있는 상품 </div>
			<div id="sec1_product">
				<div class="product_pulinfo">
					<div class="product_pulimg"><img src="/upload/admin/product/ssd.jpg" width="370" height="320" /></div>
					<div class="product_pulrank">1</div>
					<div class="product_pultitle">상품1</div>
					<div class="product_pulprice">23,800원</div>
					<div class="product_pulbuycount">10,741개 구매</div>
				</div>

				<div class="product_pulinfo">
					<div class="product_pulimg"><img src="/upload/admin/product/a6000.jpeg" width="370" height="320" /></div>
					<div class="product_pulrank">2</div>
					<div class="product_pultitle">상품1</div>
					<div class="product_pulprice">23,800원</div>
					<div class="product_pulbuycount">10,741개 구매</div>
				</div>

				<div class="product_pulinfo">
					<div class="product_pulimg"><img src="/upload/admin/product/d750.png" width="370" height="320" /></div>
					<div class="product_pulrank">3</div>
					<div class="product_pultitle">상품1</div>
					<div class="product_pulprice">23,800원</div>
					<div class="product_pulbuycount">10,741개 구매</div>
				</div>
			</div>
	</div>
</section>

<section id="main_sec2">
	<div id="main_sec2_in">
		<div id="sec1_title">마감임박</div>    
		<div id="sec2_product">
			<div class="product_info">
				<div class="product_time">00:00:00</div>
				<div class="product_title">상품1</div>
				<div class="product_price"><span style="text-decoration : line-through;">23,800원</span><p style="margin-top:5px; font-weight:bold; color:red;">18,300원</p></div>
				<div class="product_img"><img src="/upload/admin/product/oled.jpg" width="250" height="200" /></div>
			</div>
			<div class="product_info">
				<div class="product_time">00:00:00</div>
				<div class="product_title">상품1</div>
				<div class="product_price">23,800원</div>
				<div class="product_price"><span style="text-decoration : line-through;">23,800원</span><p style="margin-top:5px; font-weight:bold; color:red;">18,300원</p></div>
				<div class="product_img"><img src="/upload/admin/product/han.jpg" width="250" height="200" /></div>
			</div>
		   
	</div></div>
</section>

<section id="main_sec3">
	<div id="main_sec3_in">
		<div id="sec1_title">최근 본 상품</div>    
		<div id="sec1_product">
			<div class="product_info">
			<div class="product_img"><img src="/upload/admin/product/s22.jpg" width="250" height="200" /></div>
				<div class="product_title">상품1</div>
				<div class="product_price">23,800원</div>
			</div>
			<div class="product_info">
			<div class="product_img"><img src="/upload/admin/product/bike.jpg" width="250" height="200" /></div>
				<div class="product_title">상품1</div>
				<div class="product_price">23,800원</div>
			</div>
			<div class="product_info">
			<div class="product_img"><img src="/upload/admin/product/oled.jpg" width="250" height="200" /></div>
				<div class="product_title">상품1</div>
				<div class="product_price">23,800원</div>
			</div>
			<div class="product_info">
				<div class="product_img"><img src="/upload/admin/product/ssd.jpg" width="250" height="200" /></div>
				<div class="product_title">상품1</div>
				<div class="product_price">23,800원</div>
			</div>
</div>
			
		</div>
</section>

<script>
	$(".menu_t1").hover(function(){
		//mouseover
		$("#catagory_img1").show();
	},function(){
		//mouseout
		$("#catagory_img1").hide();
	});

	$(".menu_t2").hover(function(){
		$("#catagory_img2").show();
	},function(){
		$("#catagory_img2").hide();
	});

	$(".menu_t3").hover(function(){
		$("#catagory_img3").show();
	},function(){
		$("#catagory_img3").hide();
	});

	$(".menu_t4").hover(function(){
		//mouseover
		$("#catagory_img4").show();
	},function(){
		//mouseout
		$("#catagory_img4").hide();
	});
	$(".menu_t5").hover(function(){
		//mouseover
		$("#catagory_img5").show();
	},function(){
		//mouseout
		$("#catagory_img5").hide();
	});
</script>

<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>