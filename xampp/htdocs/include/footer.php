<?php 
//세션 셋팅
if(!isset($_SESSION)) { session_start(); } 
	date_default_timezone_set('Asia/Seoul');
	$currdt = date("Y-m-d H:i:s"); 
	$userip = $_SERVER['REMOTE_ADDR'];

	if(isset($_SERVER['HTTP_REFERER'])) 
		$referer = $_SERVER['HTTP_REFERER'];  
	else 
		$referer = ""; 

	if($db){
		// 처음 방문했는지 검사
		if(!isset($_SESSION['visit'])) { 
			$_SESSION['visit'] = "1";
			$query = "insert into tb_stat_visit (regdate, regip, referer) values('$currdt','$userip','$referer')";
			$result = $db->query($query);
		}

		// 오늘 방문자수
		$query = "select count(*) as count from tb_stat_visit where DATE(regdate) = DATE('$currdt')";
		$data = $db->query($query)->fetch_array();
		$today_visit_count = $data['count'];

		// 전체 방문자수
		$query = "select count(*) as count from tb_stat_visit";
		$data = $db->query($query)->fetch_array();
		$total_visit_count = $data['count'];
	}
?>

  <!-- Footer -->
<div id="footer">
	<div id="footer_in">
  		<div id="github">
			  <ul>
				<li class="list-inline-item">
					<a href="#">
						<span class="fa-stack fa-lg" style="position:static">
						<i class="fas fa-circle fa-stack-2x"></i>
						<a href="https://github.com/LEEBYEONGGYU"><i class="fab fa-github fa-stack-1x fa-inverse"></a></i>
						</span>
					</a>
					</li>
				</ul>
			</div>
			<div id="copyright">
			Copyright &copy; S Writer 2021 오늘 방문자수 : <?php echo $today_visit_count; ?> 총 방문자수 : <?php echo $total_visit_count; ?>
			</div>
	</div>
		  
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/js/clean-blog.min.js"></script>