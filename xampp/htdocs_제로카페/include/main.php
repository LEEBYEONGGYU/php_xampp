<div id="slide">
    <!-- slide -->
    <ul id="slider">
        <li><?php image("image_slide/2.jpg","이미지 슬라이드 첫번째");?></li>
        <li><?php image("image_slide/1.jpg","이미지 슬라이드 첫번째");?></li>
        <li><?php image("image_slide/3.jpg","이미지 슬라이드 첫번째");?></li>
    </ul>
    
    <!-- slide_index -->
    <ul id="slide_index">
    	<li><a href="javascript:animation(1)" class="now" title="animate">첫번째로</a></li>
    	<li><a href="javascript:animation(2)" title="animate">두번째로</a></li>
    	<li><a href="javascript:animation(3)" title="animate">세번째로</a></li>
    </ul>
    
    <!-- slide_button -->
    <div id="slide_button">
    	<a href="javascript:animation('left')" title="left" id="left_button"><?php image('left.png','left');?></a>
    	<a href="javascript:animation('right')" title="left" id="right_button"><?php image('right.png','right');?></a>
    </div>
    
    <!-- trash -->
    <div id="trash1">
    </div>
    <div id="trash2">
    </div>
    <div id="trash3">
    </div>
    <div id="trash4">
    </div>
    <div id="trash5">
    </div>
    
    <div id="trash6">
    </div>
    <div id="trash7">
    </div>
    
</div>
<div id="content">

    <!-- 회원 세션 폼 -->
    <div id="login">
        <div class="inner">
        <?php
			if(!isset($_SESSION['id'])){
		?>
            <form action="/page/login/login.php" method="post">
                <fieldset>
                    <label></label>
                    <input type="text" id="login_id" name="login_id" placeholder="아이디">
                    <input type="password" name="login_pw" placeholder="비밀번호">
                    <input type="submit" value="로그인">
                    <input type="button" value="회원가입" id="join_button">
                </fieldset>
            </form>
        <?php
			} else {
		?>
        	<div id="login_session">
            	<span><strong><?php echo $_SESSION['id'];?></strong> 님 반가워요. 맛있는 커피를 즐겨보세요. </span>
                <input type="button" value="로그아웃" onClick="goPage('/page/login/logout.php');">
            <?php
				if($_SESSION['ok'] == 0){
					echo '<span style="color:red;"> < ※ 승인을 받지 못한 회원입니다. > </span>';
				}
			?>
			<?php
				if($_SESSION['level'] == 99){
			?>
            	<input type="button" value="관리자페이지" onClick="goPage('/admin/user');">
            <?php
				}
			?>
            </div>
        <?php
			}
		?>
        </div>
    </div>
        
    <div class="inner">
        <!-- 상품 -->
        <section id="main_coffee" class="not">
            <h2>예약가능한 커피목록</h2>
            <ul>
                <li><?php image("1.jpg","coffee");?></li>
                <li><?php image("2.jpg","coffee");?></li>
                <li><?php image("3.jpg","coffee");?></li>
                <li><?php image("4.jpg","coffee");?></li>
            </ul>
            <button onClick="#">더 많은 커피 보러 가기</button>
        </section><!-- coffee -->
        
        <section id="good">
            <h2>인기있는 커피목록</h2>
            <ul>
                <li><?php image("5.jpg","coffee");?></li>
                <li><?php image("6.jpg","coffee");?></li>
                <li><?php image("7.jpg","coffee");?></li>
                <li><?php image("8.jpg","coffee");?></li>
            <button onClick="#">더 많은 커피 보러 가기</button>
            </ul>
        </section><!-- good -->
    </div>
</div><!-- content -->