<?php
	include_once("/bin/header.php");
?>
<div class="main">
	<div class="main_inner">
		<div class="flash">
			<div class="slideshow">
				<div class="slideshow-slides">
					<a href="" class="slide" id="slide-1"><img src="./img/flash1.png" alt="" width="1160" height="636"></a>
					<a href="" class="slide" id="slide-2"><img src="./img/flash2.png" alt="" width="1160" height="636"></a>
					<a href="" class="slide" id="slide-3"><img src="./img/flash3.png" alt="" width="1160" height="636"></a>
				</div>
			</div>
			<!-- <div class="flash_img">
				<ul>
					<li><?php img("/img/flash1.png","flash"); ?></li>
				</ul>
			</div>
			<div class="flash_but">
				<ul>
					<li class="flash_left"><?php img("/img/flash_left.png","flash_left"); ?></li>
					<li class="flash_right"><?php img("/img/flash_right.png","flash_right"); ?></li>
				</ul>
			</div>
			<div class="flash_sel">
				<ul>
					<li class="flash_sel1"><?php img("/img/but.png","but"); ?></li>
					<li class="flash_sel2"><?php img("/img/but.png","but"); ?></li>
					<li class="flash_sel3"><?php img("/img/but.png","but"); ?></li>
				</ul>
			</div> -->
		</div>
		<div class="nav">
			<ul class="nav_con1">
				<li class="nav_pic"><?php img("/img/pic1.png","pic1"); ?></li>
				<li class="nav_title">구인활동</li>
				<li class="nav_word">인력이 필요한 회사에서 저희 사이트를<br/>
				통해 필요한 인재와 인력을 뽑아갈 수 <br/>
				있게 만든 페이지 입니다</li>
				<li class="nav_read"><a href="/setting/human"><?php img("/img/read_more.png","read_more"); ?></a></li>
			</ul>
			<ul class="nav_con2">
				<li class="nav_pic"><?php img("/img/pic2.png","pic2"); ?></li>
				<li class="nav_title">구직활동</li>
				<li class="nav_word">자신이 원하는 회사에 지원할수 있는 페이지<br/>
입니다. 이곳에서 자기의 스펙에 맞는<br/>
회사를 추천을 해주기도 합니다.</li>
				<li class="nav_read"><a href="/setting/job"><?php img("/img/read_more.png","read_more"); ?></a></li>
			</ul>
			<ul class="nav_con3">
				<li class="nav_pic"><?php img("/img/pic3.png","pic3"); ?></li>
				<li class="nav_title">회원가입</li>
				<li class="nav_word">사이트를 이용하기 위해 저희 홒페이지<br/>
에서 회원가입을 하는 사이트입니다<br/>
잘부탁드립니다 </li>
				<li class="nav_read"><a href="/member/join"><?php img("/img/read_more.png","read_more"); ?></a></li>
			</ul>
			<ul class="nav_con4">
				<li class="nav_pic"><?php img("/img/pic4.png","pic4"); ?></li>
				<li class="nav_title">계산서</li>
				<li class="nav_word">회사 또는 직원의 계산확인서를 결제할 수<br/>
있는 최신 인터넷 결제 서비스 입니다.<br/>
쉽고 간편하게 계산서!!</li>
				<li class="nav_read"><a href="/custom/isbill"><?php img("/img/read_more.png","read_more"); ?></a></li>
			</ul>
		</div>
		<!-- <div class="greeting">
			<div class="greet_han">
				<ul>
					<li class="greet_title">안녕하십니까</li>
					<li class="greet_word">저희 홈페이지 JAC에 오신 여러분을 환영합니다<br/>
		저희 홈페이지는 여러분들이 원하는 회사와 그 회사에서 원하는 인재를 발굴해 낼 수 있도록<br/>
		최대한 노력하고 있습니다.
		
		</li>
				</ul>
			</div>
			<div class="greet_eng">
				<ul>
					<li class="greet_title">Hello, Everyone</li>
					<li class="greet_word">Welcome to our homepage JAC<br/>
		Our website allows you to explore with the desired talent in your company and that company<br/>
		Are fully committed.</li>
				</ul>
			
			</div>
		</div> -->
		<div class="search">
			<ul>
				<li class="search_title">회원검색</li>
				<li class="search_input">
				<select>
					<option value="통합검색">통합검색</option>
			 		<option value="이름">이름</option>
					<option value="직종">직종</option>
				</select>
				<input type="text" size="80" title="search_input" id="search" name="search" /><button>검색</button></li>
			</ul>
		</div>
	</div>
</div>
<?php
	include_once("/bin/footer.php");
?>
