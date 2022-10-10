<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="김민규">
  <meta name="Keywords" content="ZeroCafe, 제로카페, 커피">
  <meta name="Description" content="ZeroCafe 사이트 입니다.">
  <link rel="stylesheet" href="/css/common.css" />
  <script src="/js/jquery-2.1.1.min.js"></script>
  <title>ZeroCafe</title>
 </head>
 <body>
<header>
	<div class="header_inner">
		<div class="background">
			<div class="joinp">
				회원가입
			</div>
			<script>
				$(function(){
					$('.joinp').on('click', function(){
						$('.join').stop(false).animate({
							zIndex: '1',
							opacity: '1'
						})
						$('menu, .loginbox, .joinp, .logo, .slide, .content, footer, .sub, .pop').stop(false).animate({
						zIndex: '0',
						opacity: '0.2'
					});
					})
					$('body').on('dblclick', function(){
						$('.join').stop(false).animate({
							zIndex: '0',
							opacity: '0'
						})
						$('menu, .loginbox, .joinp, .logo, .slide, .content, footer, .sub, .pop').stop(false).animate({
						opacity: '1'
					});
					});
				});

				$(function(){
					$('.img1').on('click', function(){
						$('.join').stop(false).animate({
							zIndex: '1',
							opacity: '1'
						})
						$('menu, .loginbox, .joinp, .logo, .slide, .content, footer, .sub, .pop').stop(false).animate({
						opacity: '0.2'
					});
					})
					$('body').on('dblclick', function(){
						$('.join').stop(false).animate({
							zIndex: '0',
							opacity: '0'
						})
						$('menu, .loginbox, .joinp, .logo, .slide, .content, footer, .sub, .pop').stop(false).animate({
						opacity: '1'
					});
					});
				});


				$(document).ready(function(e){
					$(".check").on("keyup", function(){
						var self = $(this);
						var id, pw;

						if(self.attr("id") === "id"){
							pw = null;
							id = self.val();
						}else if(self.attr("id") === "pw"){
							id = null;
							id = self.val();
						}

						$.post(
							"/include/check.php",
							{ id : id, pw : pw },
							function(data){
								if(data){
									self.parent().parent().find("li:last-child").html(data);
									self.parent().parent().find("li:last-child").css("color", "#F00");
								}
							}
						);
					});
				});

				$(function(){
					$('menu > ul > li:first-child').on('mouseover', function(){
						$('menu > ul > li:first-child > ul').stop(false).animate({
							opacity: '1'
						});
					});
				});
				$(function(){
					$('menu > ul > li:nth-child(2)').on('mouseover', function(){
						$('menu > ul > li:nth-child(2) > ul').stop(false).animate({
							opacity: '1'
						});
					});
				});
				$(function(){
					$('menu > ul > li:nth-child(3)').on('mouseover', function(){
						$('menu > ul > li:nth-child(3) > ul').stop(false).animate({
							opacity: '1'
						});
					});
				});

				$(function(){
					$('*').on('mouseover', function(){
						$('.s1').animate({
							left: '0'
						},3020)
							$('.s2').animate({
							left: '0'
						},9040)
							$('.s3').animate({
							left: '0'
						},15000)
							$('.s4').animate({
							left: '0'
						},21900)
					});
				});
			</script>
			<div class="join">
				<form action="/join/join/join_ok" method="post">
					<div class="join_area">
						<ul>
							<li><label for="id">아이디</label></li>
							<li><input type="text" id="id" name="id" title="아이디" value="" class="check" /></li>
							<li> + 아이디중복 체크를 합니다.</li>
						</ul>
						<ul>
							<li><label for="pw">비밀번호</label></li>
							<li><input type="password" id="pw" name="pw" title="비밀번호" /></li>
						</ul>
						<ul>
							<li><label for="phone">전화번호</label></li>
							<li><input type="text" id="phone" name="phone" title="전화번호" placeholder="- 를 사용해주세요." /></li>
						</ul>
						<ul>
							<li><label for="email">이메일</label></li>
							<li><input type="text" id="email" name="email" title="이메일" placeholder="@ 와 . 를 사용해주세요." /></li>
						</ul>
						<ul>
							<li><input type="submit" value="신청하기" /></li>
						</ul>
					</div>
				</form>
			</div>
			<div class="logo">
				<a href="/"><img src="/imgs/logo.png" alt="logo" title="로고" /></a>
			</div>
			<menu>
				<ul>
					<?php
						$sql = mq("select * from menu where lv='1'");
						while($main = $sql->fetch_array()){
					?>
					<li><a href="/<?php echo $main['main']."/".$main['sub']."/".$main['sub']; ?>"><?php echo $main['title']; ?></a>
						<ul>
							<?php
								$sql2 = mq("select * from menu where lv='2' && main='".$main['main']."'");
								while($sub = $sql2->fetch_array()){
							?>
							<li><a href="/<?php echo $sub['main']."/".$sub['sub']."/".$sub['sub']; ?>"><?php echo $sub['title']; ?></a></li>
							<?php
								}
							?>
						</ul>
					</li>
					<?php
						}
					?>
				</ul>
			</menu>
		<div class="slide">
			<img src="/imgs/slide-1.png" alt="slide-1" title="슬라이드1" />
		</div>
		<!--<div class="cs"></div>-->
		<div class="pop">
			<img src="/imgs/slide-2.png" class="s1" alt="slide-2" title="슬라이드2" />
			<img src="/imgs/slide-3.png" class="s2" alt="slide-3" title="슬라이드3" />
			<img src="/imgs/slide-4.png" class="s3" alt="slide-4" title="슬라이드4" />
			<img src="/imgs/slide-5.png" class="s4" alt="slide-5" title="슬라이드5" />
		</div>
	</div>
 </header>