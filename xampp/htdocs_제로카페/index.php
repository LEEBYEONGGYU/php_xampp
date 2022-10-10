<?php include "./include/lib.php";?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="<?php echo $description;?>">
<meta name="keywords" content="<?php echo $keywords;?>">
<script src="/style/jquery.js"></script>
<script src="/style/jquery-ui.js"></script>
<script src="/style/common.js"></script>
<link rel="stylesheet" href="/style/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="/style/common.css" type="text/css">
<link rel="stylesheet" href="/style/print.css" type="text/css" media="print">
<title><?php echo $home_title;?></title>
</head>

<body>

<!-- 회원가입 모달 창 -->
<div id="join_wrap" class="dn">
    <div id="join_bg">
    </div>
    <div id="join">
        <form action="/page/join/insert.php" method="post" onSubmit="return idok();">
            <fieldset>
                <label><div>회원가입</div></label>
                <label><input type="text" name="id" placeholder="아이디" style="border-top:1px solid #ddd; width:94%;" class="" id="join_id" onKeyUp="id_chk(this.value);" required><span id="chk"></span></label>
                <label><input type="password" name="pw" pattern="[0-9a-zA-Z~`!@#$%^&*()_+-=]{6,}" placeholder="비밀번호 - 6자이상 입력바람" title="6자이상 입력바람" class="" required></label>
                <label><input type="text" name="phone" placeholder="000-0000-0000 형식으로 입력바람" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" class="" title="000-0000-0000 형식으로 입력바랍니다." required></label>
                <label><input type="text" name="email" placeholder="Eunji@daum.net 형식으로 입력바람" pattern="[0-9a-zA-Z~`!@#$%^&/.,*()_+-=]{1,}@{1}[0-9a-zA-Z~`!@#$/.,%^&*()_+-=]{1,}(\.{1}[0-9a-zA-Z~`!@#$%^&/.,*()_+-=]{1,}){1,}" class="" title="Eunji@daum.net 형식으로 입력바람" required></label>
                <input type="submit" value="가입" class="not" onClick="hit();">
                <input type="button" value="취소" class="not" id="join_close">
            </fieldset>
        </form>
	</div>
</div>

<header>
	<div class="inner">
    	<!-- 로고 -->
        <h1><a href="/" title="logo"><?php image("logo.png","logo");?></a></h1>
        
        <!-- 메뉴 -->
        <ul id="menu">
        	<?php
				$q = mq("select * from main_menu where m_no > 0 order by m_no asc");
				while($d = mfa($q)){
					$sub = mfaq("select * from sub_menu where m_no=?",array($d['m_no']));
			?>
				<li><a href="<?php echo "/".$d['m_id']."/".$sub['s_id'];?>" title="<?php echo $d['m_title'];?>"><?php echo $d['m_title'];?></a>
                	<ul id="sub" class="dn">
                    	<?php
							$sq = mq("select * from sub_menu where m_no=?",array($d['m_no']));
							while($sd = mfa($sq)){
						?>
                            <li><a href="<?php echo "/".$d['m_id']."/".$sd['s_id'];?>" title="<?php echo $sd['s_title'];?>"><?php echo $sd['s_title'];?></a>
                        <?php
							}
						?>
                    </ul>
                </li>
            <?php
				}
			?>
        </ul>
    
        <!-- 장바구니 -->
        <?php if(isset($_SESSION['ok']) && $_SESSION['ok']!=0){?>
        <div id="cart">
            <a href="/reser/reserlist" title="cart"><?php image('cart.png','cart');?></a>
        </div>
        <?php }?>
        
    </div>
</header>

<article>
	<?php
		if($pt == "main"){
			include "./include/main.php";
		} else if($pt=="sub") {
			include "./include/sub.php";
		} else {
			echo ' 올바르지 않은 접근 방식입니다. 올바른 방식으로 접근해주세요. ex) 주소창에 127.0.0.1/ ';
		}
	?>
</article>

<footer>
	<div class="inner ac">
    	<p> ⓒ 2015 SamCheok Test Jang Ji-Woong. All rights reserved. </p>
    </div>
</footer>

</body>
</html>
