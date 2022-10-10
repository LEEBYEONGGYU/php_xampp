<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<section id="sub_content">
	<div id="sub_content_in">

	
	<div id="sub_title">
		■ 가전, TV
	</div>
	<div id="sub_product">
		<div class="sub_product_wrap">
		
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