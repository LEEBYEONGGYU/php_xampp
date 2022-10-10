<?php if(!defined("__XE__"))exit;?><div id="intro_pro">
	<div class="con_tt">
		<ul>
			<li class="tc">제품안내</li>
		</ul>
	</div>
<!-- 소방안전 -->
	<div id="so_lay1">
		<div class="so_line_t"></div>
			<div id="so_img">
				<img src="/layouts/xedition/img/so_safe.png" alt="so_safe" title="so_safe" />
			</div>
			<div class="so_t">
				<ul>
					<li>소방안전</li>
				</ul>
			</div>
			<div class="so_tt">
				<ul class="tc">
					<li>우리 데코엘은 언제나 안전을 중요시하며<br /></li>
					<li>안전과 관련된 제품들을 생산해내고 있으며<br /></li>
					<li>소방, 교통, 산업, 환경으로 <br /></li>
					<li>제작되고있습니다.</li>
				</ul>
			</div>
		<div class="so_more">
			<a href="/safe"><img src="/layouts/xedition/img/more_bt2.png" alt="so_more" title="so_more" /></a>
		</div>
		<div class="so_line_b2"></div>
	</div><!-- 소방안전 end -->
	<!-- 조명사인 -->
	<div id="jo_lay1">
		<div class="so_line_t"></div>
			<div id="jo_img">
				<img src="/layouts/xedition/img/light_icon.png" alt="light_icon" title="light_icon" />
			</div>
		<div class="so_t">
			<ul>
				<li>조명사인</li>
			</ul>
		</div>
		<div class="so_tt">
			<ul class="tc">
				<li>주식회사 데코엘의 LED라이트 패널은<br /></li>
				<li>17mm의 초슬림한 제품으로 양면발광이<br /></li>
				<li>가능하며, 완벽한 방수의 밀폐형 설계 구조로<br /></li>
				<li>제작되고있습니다.</li>
			</ul>
		</div>
		<div class="so_more">
			<a href="/lightsign"><img src="/layouts/xedition/img/more_bt2.png" alt="so_more" title="so_more" /></a>
		</div>
		
		<div class="so_line_b2"></div>
		</div><!-- 조명 END -->
		<!-- LED 패널 -->
		<div id="lo_lay1">
			<div class="so_line_t"></div>
				<div id="lo_img">
					<img src="/layouts/xedition/img/led_icon.png" alt="led_icon" title="led_icon" />
				</div>
				<div class="so_t">
					<ul>
						<li>LED 패널</li>
					</ul>
				</div>
				<div class="so_tt">
					<ul class="tc">
						<li>LED조명을 사용한 제품검사용조명<br /></li>
						<li>장치로써이물질검사, 제품코팅검사,<br /></li>
						<li>치수측정, 형상인식, 패턴매칭, 필름오염검사<br /></li>
						<li>에 사용하는 조명입니다.</li>
					</ul>
				</div>
				<div class="so_more">
					<a href="/ledjo"><img src="/layouts/xedition/img/more_bt2.png" alt="so_more" title="so_more" /></a>
				</div>
				<div class="so_line_b2"></div>
			</div><!--- LED패널 end -->
		</div> <!-- 제품안내 END -->
		<div id="intro_co">
			<div class="con_tt">
				<ul>
					<li>회사소개</li>
				</ul>
			</div>
			<div id="intro_co_tm">
				<ul>
					<li>주식회사 데코엘입니다.</li>
					<li>21세기를 맞이한 오늘날, 기술의 발전과 더불어, 보다 풍요로운 세상을 맞이한</li>
					<li>우리는 또 다른 하나의 과제를 안고있습니다. 그것은, 기술이 가져 다준 많은 가치</li>
					<li>뒤에 숨겨진 폐해들을 극복하고, 더욱더 아름답고 살기 좋은 세상을 열어가는것입니다. 의식주의 해결이 가능해진</li>
					<li>현재의 우리에겐, 보다 안전하고 진보된 기술을 바탕으로 하는 사회적 인프라를 만들고, 그 출발점에서 미래를</li>
					<li>내다보는 거시적인 행동양식을 가져야 할 때인 것입니다.</li>
				</ul>
			</div>
			<div id="intro_co_mp">
				<img src="/layouts/xedition/img/logo3.png" alt="logo3" title="logo3" />
			</div>
			<div id="read_more">
				<a href="/intro"><img src="/layouts/xedition/img/read_more_bt.png" alt="read_more_bt" title="read_more_bt" /></a>
			</div>
		</div><!--- 회사소개 end -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBi-bzhOhnsVo76LxOlkV7mMGJwRgdo5Bw" ></script><!--- 구글지도-->
	<div id="map_ma"></div>
<script type="text/javascript">
		$(document).ready(function() {
			var myLatlng = new google.maps.LatLng(35.864536,128.722262); // 위치값 위도 경도
	var Y_point			= 35.864536;		// Y 좌표
	var X_point			= 128.722262;		// X 좌표
	var zoomLevel		= 18;				// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
	var markerTitle		= "(주)데코엘";		// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
	var markerMaxWidth	= 300;				// 마커를 클릭했을때 나타나는 말풍선의 최대 크기
// 말풍선 내용
	var contentString	= '<div>' +
	'<h2>(주)데코엘</h2>'+
	'<p>안녕하십니까 데코엘입니다.</p>' +
	
	'</div>';
	var myLatlng = new google.maps.LatLng(Y_point, X_point);
	var mapOptions = {
						zoom: zoomLevel,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}
	var map = new google.maps.Map(document.getElementById('map_ma'), mapOptions);
	var marker = new google.maps.Marker({
											position: myLatlng,
											map: map,
											title: markerTitle
	});
	var infowindow = new google.maps.InfoWindow(
												{
													content: contentString,
													maxWizzzdth: markerMaxWidth
												}
			);
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
});
		</script>