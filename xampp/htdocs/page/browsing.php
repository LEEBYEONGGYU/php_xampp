<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<section id="sub_content">
	<div id="sub_content_in">
		<div id="sub_object">
			<div id="sub_title">가전, TV에 대한 상품 50개를 찾았어요
			<div id="sub_View">Show View </div>
			<div id="sub_Sort">Sort</div>
		</div>
	</div>

	<div id="sub_product">
		<div id="sub_product_catagory">
			<div id="sub_product_catagory_t">
				CATEGORIES(카테고리)
			</div>
		</div>
		<div id="sub_product_option">
			<div id="sub_product_catagory_t">
				상세옵션
			</div>
		</div>
		<div id="sub_product_wrap">
			<div id="sub_product_wrap_in">
					<div class="sub_product_pulinfo">
						<div class="product_pulimg"><img src="/upload/admin/product/ssd.jpg" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/a6000.jpeg" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

					<div class="sub_product_pulinfo">
						<div class="sub_product_pulimg"><img src="/upload/admin/product/d750.png" width="310" height="320"></div>
						<div class="sub_product_pultitle">상품1</div>
						<div class="sub_product_pulprice">23,800원</div>
						<div class="sub_product_pulbuycount">10,741개 구매</div>
					</div>

				</div>

		</div>
		
		
	</div>
	</div>
</section>
<script>
	$("#catagory").css("height",0);
	$("#menu > ul ").hide();
	$("#defualt_main").hide();
	$("#catagory_hover_img").hide();

	$("#catagory_title").click(function(){
		$("#catagory").css("height",300);
		$("#menu > ul ").show();
		$("#defualt_main").show();
		$("#catagory_hover_img").show();
	});
</script>