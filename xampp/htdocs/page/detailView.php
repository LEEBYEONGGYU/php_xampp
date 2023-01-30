<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<section id="sub_content">
	<div id="sub_content_in">
        <div id="detailView">
            
        </div>
        <div id="detailView_image">
            
        </div>
        <div id="detailＩｎｆｏ">
            
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
  <?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>