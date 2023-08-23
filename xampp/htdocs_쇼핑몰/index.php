<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>

<section id="main_sec1">
	<div id="main_sec1_in">
		<div id="sec1_title">현재 인기있는 상품 </div>
			<div id="m_sec1_product">
				<?php 
					$sql = mq("select pro_num, pro_name, pro_proimg, pro_price, pro_total from product order by pro_total desc limit 0,3");  
					while($product = $sql->fetch_array()){
					$title=$product["pro_name"]; 
						if(strlen($title)>30){ 
							$title=str_replace( $product["pro_name"],mb_substr($product["pro_name"],0,30,"utf-8")."...",$product["pro_name"]);
						}	
					?>
					<div class="product_pulinfo">
						<a href="/page/detailView.php?product_id=<?php echo $product['pro_num']; ?>"><div class="product_pulimg"><img src="/upload/admin/product/<?php echo $product['pro_proimg']; ?>.jpg" width="370" height="320" /></div></a>
						<div class="product_pultitle"><?php echo $title; ?></div>
						<div class="product_pulprice"><?php echo number_format($product['pro_price']); ?>원</div>
						<div class="product_pulbuycount"><?php echo number_format($product['pro_total']); ?>개 구매</div>
					</div>
				<?php }?>
			</div>
	</div>
</section>

<section id="main_sec2">
	<div id="main_sec2_in">
		<div id="sec1_title">마감임박</div>    
		<div id="sec2_product">
			<?php 
				$sql = mq("select pro_num, pro_name, pro_proimg, pro_price, pro_salper, pro_salprice, pro_endtime from product order by pro_total desc limit 0,2");  
				while($product = $sql->fetch_array()){
				$title=$product["pro_name"]; 
					if(strlen($title)>10){ 
						$title=str_replace( $product["pro_name"],mb_substr($product["pro_name"],0,16,"utf-8")."...",$product["pro_name"]);
					}	
				?>
			<div class="product_info">
				<div class="product_time">00시간00분00초 남음</div>
				<div class="product_title"><?php echo $title; ?></div>
				<div class="product_price">
					<span style="text-decoration : line-through;">
						<?php echo number_format($product['pro_price']); ?>원
					</span>
					<p style="margin-top:5px; font-weight:bold; color:red;">
					<?php echo number_format($product['pro_salprice']); ?>원(<?php echo number_format($product['pro_salper']); ?>%할인)</p>
				</div>
				<div class="product_img">
					<a href="/page/detailView.php?product_id=<?php echo $product['pro_num']; ?>">
						<img src="/upload/admin/product/<?php echo $product['pro_proimg']; ?>.jpg" width="250" height="200" />
					</a>
				</div>
			</div>
			
			<?php } ?>
	</div></div>
</section>

<section id="main_sec3">
	<div id="main_sec3_in">
		<div id="sec1_title">최근 본 상품</div>    
		<div id="sec1_product">
			<?php 
				$sql = mq("
					select 
						pd.pro_num
						, pd.pro_name
						, pd.pro_proimg
						, pd.pro_price
						, pd.pro_salper
						, pd.pro_salprice
						, pd.pro_endtime
					from product pd
					 inner join recent rt
					 on pd.pro_num = rt.pro_no
					 order by pro_total desc limit 0,2");  
				while($product = $sql->fetch_array()){
				$title=$product["pro_name"]; 
					if(strlen($title)>10){ 
						$title=str_replace( $product["pro_name"],mb_substr($product["pro_name"],0,16,"utf-8")."...",$product["pro_name"]);
					}	
				?>
					<div class="product_info">
						<div class="product_img">
							<a href="/page/detailView.php?product_id=<?php echo $product['pro_num']; ?>">	
								<img src="/upload/admin/product/<?php echo $product['pro_proimg']; ?>.jpg" width="250" height="200" />
							</a>
						</div>
						<div class="product_title"><?php echo $title; ?></div>
						<div class="product_price"><?php echo number_format($product['pro_price']); ?>원</div>
					</div>
				<?php }?>
			</div>
		</div>
</section>
</section>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>