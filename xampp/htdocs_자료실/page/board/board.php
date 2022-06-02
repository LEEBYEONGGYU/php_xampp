
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>QA</h1>
					<span class="subheading">QA게시판</span>
		  </div>
		</div>
	  </div>
	</div>
  </header> 
<div id="sub_main">
    <div id="sub_main_in">
      <div id="sub_con_t">
        <b>QA게시판</b> 
      </div>
     
    </div>
<div id="board_area"> 
  <br>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
              <th width="400">제목</th>
                <th width="120">글쓴이</th>
                <th width="160">작성일</th>
                <th width="100">상태</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
            if(isset($_GET['page'])){
              $page = $_GET['page'];
                }else{
                  $page = 1;
                }
                  $sql = mq("select * from qa");
                  $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
                  $list = 5; //한 페이지에 보여줄 개수
                  $block_ct = 5; //블록당 보여줄 페이지 개수

                  $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
                  $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
                  $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

                  $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
                  if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
                  $total_block = ceil($total_page/$block_ct); //블럭 총 개수
                  $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

                  $sql2 = mq("select * from qa order by idx desc limit $start_num, $list");  
                  while($board = $sql2->fetch_array()){
                  $title=$board["title"]; 
                    if(strlen($title)>30)
                    { 
                      $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                    }
                    $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                    $rep_count = mysqli_num_rows($sql3);
                  ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="400">         
        <?php
          $boardtime = $board['w_date']; //$boardtime변수에 board['date']값을 넣음
          $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
          
          if($boardtime==$timenow){
            $img = "<img src='/imgs/new.png' alt='new' title='new' />";
          }else{
            $img ="";
          }
          ?>
       
        <a href='/page/board/bo_process/read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title;?><span class="re_ct">[<?php echo $rep_count;?>]<?php echo $img; ?> </span></a></td>
          <td width="120"><?php echo $board['userid']?></td>
          <td width="160"><?php echo $board['w_date']?></td>
          <td width="100"><?php echo $board['chk']; ?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="page_num">
        <?php
          if($page <= 1)
          {
            echo "<span class='fo_re'>처음</span>";
          }else{
            echo "<a href='?page=1'>처음</a>";
          }
          if($page <= 1)
          {
          }else{
          $pre = $page-1; 
            echo "<a href='?page=$pre'>이전</a>"; 
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            if($page == $i){
              echo "<span class='fo_re'>[$i]</span>"; 
            }else{
              echo "<a href='?page=$i'>[$i]</a>";
            }
          }
          if($block_num >= $total_block){
          }else{
            $next = $page + 1;
            echo "<a href='?page=$next'>다음</a>"; 
          }
          if($page >= $total_page){ 
            echo "<span class='fo_re'>마지막</span>"; 
          }else{
            echo "<a href='?page=$total_page'>마지막</a>";
          }
        ?>
    </div>
<div class="write_btn">
      <a href="/page/board/bo_process/write.php"><button>글쓰기</button></a>
</div>
  <div id="search_box">
    <form action="/page/board/bo_process/search_result.php" method="get">
      <select name="catgo" id="catgo">
        <option value="title">제목</option>
        <option value="name">글쓴이</option>
        <option value="content">내용</option>
      </select>
      <input type="text" name="search" size="40" required="required" id="sebox"/> <button id="sebt">검색</button>
    </form>
    </div>
  </div>
</div>
  <?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>