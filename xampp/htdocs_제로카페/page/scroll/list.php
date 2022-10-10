<script>
	$(function(e) {
		append_list();
		// 스크롤 이벤트
		$(window).scroll(function(){
			var dh = $(document).height();
			var wh = $(window).height();
			var wt = $(window).scrollTop();
			if(dh == (wh + wt)){
				append_list();
			}
		});
	});
</script>

<div id="w100 fl mb20">

	<div class="w100 fl mb20">
    	[ 스크롤페이지 ]
    </div>

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
        <tbody id="appendbox">
        </tbody>
    </table>
        <div id="loading">
        </div>
        <style>
			#loading {width:100%; float:left; text-align:center;}
			#loading img {float:none; width:40px;}
		</style>

</div>
