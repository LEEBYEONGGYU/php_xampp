<!doctype html>
<html class="no-js" lang="ko">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
<script src="/common/js/jquery-1.11.1.min.js"></script>
<script src="/common/js/jquery-ui.js"></script>
<link rel="stylesheet" href="/common/js/jquery-ui.css" />
</head>
 <body>
<style type="text/css">
.slideshow {
		background-color:#000;
		height:635px;
		min-width:1160px;
		overflow:hidden;
		position:relative;
	}
	.slideshow-slides {
		height:100%;
		position:absolute;
		width:100%;
	}
	.slideshow-slides .slide {
		height:100%;
		overflow:hidden;
		position:absolute;
		width:100%;
	}
	.slideshow-slides .slide img {
		left:50%;
		margin-left:-600px;
		position:absolute;
	}

	.slideshow-nav a,
	.slideshow-indicator a {
		overflow:hidden;
	}
	.slideshow-nav a:before,
	.slideshow-indicator a:before {
		display:inline-block;
		font-size:0;
		line-height:0;
	}
	
	.slideshow-nav a {
	position:absolute;
	top:50%;
	left:50%;
	width:59px;
	height:91px;
	margin-top:-36px;
	}

	.slideshow-nav a.prev {
		margin-left:-580px;
	}
	.slideshow-nav a.prev:before {margin-left:-20px}
	.slideshow-nav a.next {
		margin-left:480px;
	}
	.slideshow_nav a.next:before {margin-left:-80px; margin-top:-20px;}
	.slideshow-nav a.disabled {
		display:none;
	}

	.slideshow-indicator {
		bottom: 30px;
		height:29px;
		left:0;
		position:absolute;
		right:0;
		text-align:center;
	}

	.slideshow-indicator a {
		display:inline-block;
		width:29px;
		height:29px;
		margin-left:3px;
		margin-right:3px;
	}

	.slideshow-indicator a.active{
		cursor : default;
	}

	.slideshow-indicator a:before{
		margin-left:-110px;
	}

	.slideshow-indicator a.active:befofe {
		margin-left:-130px;
	}
</style>

			<div class="slideshow">
				<div class="slideshow-slides">
					<a href="./" class="slide"><img src="/img/flash1.png" title="flash" width="1160" height="635"></a>
					<a href="./" class="slide"><img src="/img/flash2.png" title="flash" width="1160" height="635"></a>
					<a href="./" class="slide"><img src="/img/flash3.png" title="flash" width="1160" height="635"></a>
				</div>
				<div class="slideshow-nav">
					<a href="#" class="prev"><img src="/img/flash_left.png" title="left"></a>
					<a href="#" class="next"><img src="/img/flash_right.png" title="right"></a>
				</div>
				<div class="slideshow-indicator">
				</div>
			</div>
<script type="text/javascript">
	
	$(function(){
		$('.slideshow').each(function(){
			var $container = $(this),
				$slideGroup = $container.find('.slideshow-slides'),
				$slides = $slideGroup.find('.slide'),
				$nav = $container.find('.slideshow-nav'),
				$indicator = #container.find('.slideshow-indicator'),

				slideCount = $slides.length,
					indicatorHTML = '',
					currentIndex = 0,
					duration = 500,
					easing = 'easeInOutExpo',
					interval = 7500,
					timer;

				$slides.each(function (i){
					$(this).css({left:100 * i + '%'});
					indicatorHTML += '<a href="#">' + (i + 1) + '</a>';
				});

				$indicator.html(indicatorHTML);

				function goToSlide (index) {
					$slideGroup.animate({left: -100 * index + '%'}, duration, easing);

					currentIndex = index;

					updateNav();
				}
				function updateNav(){
					var $navPrev = $nav.find('.prev'),
						$navNext = $nav.find('.next');

					if(currentIndex === 0){
						$navPrev.addClass('disabled');
					}else{
						$navPrev.removeClass('disabled')	;
					}

					if(currentIndex === slideCount - 1){
						$navNext.addClass('disabled');
					}else{
						$navNext.removeClass('disabled');
					}

					$indicator.find('a').removeClass('active')
						.eq(currentIndex).addClass('active');
				}

				function startTimer(){
					timer = setInterval(function(){
						var nextIndex = (currentIndex + 1) % slideCount;
						goToSlide(nextIndex);
					}, interval
				}

				function stopTimer(){
					clearInterval(timer);
				}

				$nav.on('click','a',function(event){
					event.preventDefault();
					if($(this).hasClass('prev')){
						goToSlide(currentIndex - 1);
					}else{
						goToSlide(currentIndex + 1);
					}
				});
				
				$indicator.on('click', 'a', function(event){
					event.preventDefault();
					if(!$(this).hasClass('active')){
						goToSlide($(this).index());
					}
				});

				goToSlide(currentIndex)
				
				startTimer();
				}
		});
	});
</script></body>