<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<section id="sub_content">
	<div id="sub_content_in">
		<div id="sub_object">
			<?php 
				$getCatagory = $_GET['catagory'];
				$sql = mq("select * from product pd where pd.pro_class='".$getCatagory."'");
				$ct = mysqli_num_rows($sql);
				$sql2 = mq("select * from catagory  where url='".$getCatagory."'");
				$ct_name = $sql2->fetch_array();
			?>

			<div id="sub_title"><?php echo $ct_name['title']; ?>에 대한 상품 <?php echo $ct; ?>개를 찾았어요
		</div>
	</div>

	<div id="sub_product">
		<div id="sub_product_catagory">
			<div id="sub_product_catagory_t">
				CATEGORIES(카테고리)
			</div>
			<div id="catagory_list">
				<ul>
					<?php 
						$sql = mq("select ct.title, ct.url, count(pd.pro_class) as ct from catagory ct left join product pd on ct.url = pd.pro_class group by title");  
						while($catagory = $sql->fetch_array()){
					?>
					<li><a href="/page/browsing.php?catagory=<?php echo $catagory['url']; ?>"><?php echo $catagory['title']; ?>
					</a><b>(<?php echo $catagory['ct']; ?>)</b></li>
					<?php } ?>
				</ul>
			</div><!--catagory_list -->
			<form action="/page/browsing.php" method="get">
				<!--현재 카테고리 저장 -->
				<input type="hidden" name="catagory" value="<?php echo $_GET['catagory']; ?>" />
			<div id="sub_product_catagory_t">
				가격
			</div>
			<div id="sub_product_price_sel">
				<?php 
					$minPrice = "";
					$maxPrice = "";
					if(isset($_GET['minPrice'])) $minPrice=  $_GET['minPrice'];
					if(isset($_GET['maxPrice'])) $maxPrice=  $_GET['maxPrice'];
				?>
				<input type="text" placeholder="최저" name="minPrice" size="5" value="<?php echo $minPrice; ?>" /> <b>-</b> <input type="text" placeholder="최대" name="maxPrice" size="5" value="<?php echo $maxPrice; ?>"/>
				
			</div>
			<div id="sub_product_catagory_t">
				평점
			</div>
			<div id="sub_product_price_radio">
				<?php 
					if(isset($_GET['likeCt'])){
						$likeCt = $_GET['likeCt'];
					}else{
						$likeCt = 0;
					}
				?>
				<input type="radio" name="likeCt" value="5" <?php if($likeCt == 5) echo "checked";?> /> ★★★★★ <br />
				<input type="radio" name="likeCt" value="4" <?php if($likeCt == 4) echo "checked";?> /> ★★★★ <br />
				<input type="radio" name="likeCt" value="3" <?php if($likeCt == 3) echo "checked";?> /> ★★★ <br />
				<input type="radio" name="likeCt" value="2" <?php if($likeCt == 2) echo "checked";?> /> ★★ <br />
				<input type="radio" name="likeCt" value="1" <?php if($likeCt == 1) echo "checked";?> /> ★ <br />
			</div>

			<button type="submit" id="browsing_bt">적용</button>

			</form>
		</div>
		
		<div id="sub_product_wrap">
			<div id="sub_product_wrap_in"> 
				<?php
					if(isset($_GET['page'])){
						$page = $_GET['page'];
							}else{
								$page = 1;
							}
								$sql = mq("select * from product");
								$row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
								$list = 9; //한 페이지에 보여줄 개수
								$block_ct = 9; //블록당 보여줄 페이지 개수

								$block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
								$block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
								$block_end = $block_start + $block_ct - 1; //블록 마지막 번호

								$total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
								if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
								$total_block = ceil($total_page/$block_ct); //블럭 총 개수
								$start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

								//검색조건별 쿼리변경
								$likeCt = 0;
								//금액별
								if(isset($_GET['minPrice']) && !isset($_GET['maxPrice'])){
									//최소금액 값이 있을 경우 최소금액 입력부터 DB에 있는 최대금액까지
									$minPrice = $_GET['minPrice'];
									$likeCt = $_GET['likeCt'];
									$sql2 = mq("select * from product where pro_class='$getCatagory' and pro_price between '$minPrice' and pro_price and likeCt = '$likeCt' order by pro_num desc limit $start_num, $list");
								}else if(isset($_GET['maxPrice']) && !isset($_GET['minPrice'])){
									//최대금액 값이 있을 경우 DB에 있는 최소금액부터 최대금액입력분까지
									$maxPrice = $_GET['maxPrice'];
									$likeCt = $_GET['likeCt'];
									$sql2 = mq("select * from product where pro_class='$getCatagory' and pro_price between pro_price and '$maxPrice' and likeCt = '$likeCt' order by pro_num desc limit $start_num, $list");
								}else if(isset($_GET['minPrice']) && isset($_GET['maxPrice'])){
									//둘 다 있다면 
									$minPrice = $_GET['minPrice'];
									$maxPrice = $_GET['maxPrice'];
									$likeCt = $_GET['likeCt'];
									$sql2 = mq("select * from product where pro_class='$getCatagory' and pro_price between '$minPrice' and '$maxPrice' and likeCt = '$likeCt' order by pro_num desc limit $start_num, $list");
								}else{
									$sql2 = mq("select * from product where pro_class='$getCatagory' order by pro_num desc limit $start_num, $list");
								}
								$rowCt = mysqli_num_rows($sql2);
								while($catagory = $sql2->fetch_array()){
								$title=$catagory["pro_name"]; 
									if(strlen($title)>30){ 
										$title=str_replace( $catagory["pro_name"],mb_substr($catagory["pro_name"],0,30,"utf-8")."...",$catagory["pro_name"]);
									}
								?>
				<div class="sub_product_pulinfo">
					<div class="product_pulimg"><img src="/upload/admin/product/<?php echo $catagory['pro_proimg']; ?>.jpg" width="310" height="320"></div>
					<div class="sub_product_pultitle"><?php echo $title; ?></div>
					<div class="sub_product_pulprice"><?php echo number_format($catagory['pro_price']); ?>원</div>
				</div>
			<?php } ?>

			<?php if($rowCt !=0){ ?>
			<div id="page_num">
        <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<span class='fo_re'>처음</span>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<a href='?page=1&catagory=$getCatagory'>처음</a>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            /* 2022.11.06 컬럼정렬 추가 */
            echo "<a href='?page=$pre&catagory=$getCatagory'>이전</a>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "<span class='fo_re'>[$i]</span>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              /* 2022.11.06 컬럼정렬 추가 */
              echo "<a href='?page=$i&catagory=$getCatagory'>[$i]</a>"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          }else{
            $next = $page + 1; //next변수에 page + 1을 해준다.
            echo "<a href='?page=$next&catagory=$getCatagory'>다음</a>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<span class='fo_re'>마지막</span>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            /* 2022.11.06 컬럼정렬 추가 */
            echo "<a href='?page=$total_page&catagory=$getCatagory'>마지막</a>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
    </div>
	<?php }else{ ?>
			<div id="empty">상품이 없습니다</div>
		<?php } ?>
		</div><!--sub_product_wrap_in end -->
	</div><!--sub_product_wrap -->

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

<script>
  $( function() {
    $( "#speed" ).selectmenu();
 
    $( "#files" ).selectmenu();
 
    $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );
 
    $( "#salutation" ).selectmenu();

	//평점 클릭시 검색실행
	
	//
  });
  </script>
  <?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>