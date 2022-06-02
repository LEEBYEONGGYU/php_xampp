<script>
	$(function(e) {
		sear();
		// 스크롤 이벤트
		$(window).scroll(function(){
			var dh = $(document).height();
			var wh = $(window).height();
			var wt = $(window).scrollTop();
			if(dh == (wh + wt)){
				sear();
			}
		});
	});
</script>

<div id="w100 fl mb20">

	<div class="w100 fl mb20">
    	[ 검색페이지 ]<br>
        - 검색어 입력 시 자동으로 검색이 됩니다.<br>
        - 검색 후 창을 닫아도 검색어가 저장되어 있습니다.<br>
        <strong><span style="color:red">- 위에꺼 다 구라입니다.</span></strong>
    </div>

	<table class="w100 fl mb20 mt20">
    
    	<tr>
        	<input type="text" name="search" id="search" onKeyUp="sear(1);" placeholder="검색어를 입력해주세요." style="width:200px;">
        </tr>
    </table>
    <table class="w100 fl mb20">
    	<colgroup>
        	<col width="30px">
        </colgroup>
    	<thead>
        	<tr>
            	<th>No.</th>
            	<th>커피종류</th>
            	<th>생산비율</th>
            	<th>커피산지</th>
            	<th>설명</th>
            	<th>보유수량</th>
            	<th>가격</th>
            </tr>
        </thead>
        <tbody id="searchbox">
        </tbody>
    </table>

</div>


<div class="ac">
	<p style="font-size:1.2em; margin-bottom:10px; margin-top:20px; float:left; width:100%;">[ 커피 동영상 ]</p>
	<video src="/image/video.mp4" autoplay controls style="width:100%;"></video>
</div>