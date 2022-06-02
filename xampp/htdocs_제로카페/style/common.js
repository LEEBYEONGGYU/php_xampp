// JavaScript Document

// 메세지 그리고 페이지 이동
function msg(msg){
	alert(msg);
}

function goPage(url){
	location.href=url;
}

// 서브메뉴고정
$(function(e) {
	$("#menu li").on("mouseover",function(e){
		$("#menu li #sub").removeClass('db');
		$("#menu li #sub").addClass('dn');
		$(this).find('#sub').removeClass('dn');
		$(this).find('#sub').addClass('db');
	});
});

// 로그인 아이디로 포커스
$(function(e) {
	$("#login_id").focus();
});

// 폰트사이즈 변경
var font=0.75;
function resize(size){
	font = size == 100 ? 0.75 : font + size;
	if(font>1.25) {msg('너무 커요!'); font=1.25;}
	if(font<0.4) {msg('너무 작아!'); font=0.4;}
	$("body").animate({fontSize:font+"em"},100);
}

// 회원가입 modal layer popup
$(function(e){
	// 팝업창 전체높이
	var join_height = $(document).height();
	$("#join_bg").css("height",join_height);
	
	// 팝업창 띄우기
	$("#join_button").on("click",function(e) {
		$("#join_wrap").removeClass('dn');
		$("#join_wrap").addClass('db');
	});
	
	// 팝업창 닫기
	$("#join_close").on("click",function(e) {
		$("input[name='id']").val('');
		$("input[name='pw']").val('');
		$("input[name='phone']").val('');
		$("input[name='email']").val('');
		$("#chk").html('');
		$("#join_wrap").removeClass('db');
		$("#join_wrap").addClass('dn');
	});
});

// 회원가입 아이디 체크
function id_chk(id){
	$.post("/ajax/id_chk.php",{id:id},function(data){
		$("#chk").html(data);
	});
}

function idok(){
	if($("#id_ok").attr('data-ok')=='no'){
		alert('이미 누가 사용중인 아이디입니다.');
		$("#join_id").focus();
		return false;
	}
}

function hit(){
	$("input:invalid").addClass('hilight');
}


// 회원가입 승인
function user_ok(no){
	$.post("/page/user/ok.php",{no:no},function(e){
		alert('승인하셨습니다.');
		location.href='/admin/user';
	});
}


// 게시판 댓글
$(function(){
	$("#reply_button").on("click",function(){
		var content = $("#reply").val();
		var bno = $("#bno").val();
		if(content == "") {alert('댓글을 입력해주세요.'); return false;};
		$.post("/page/board/reply.php",{content:content,bno:bno},function(data){
			$("#reply_view").html(data);
			$('#reply').val('');
		});
	});
});


// 드래그 엔드 드롭 // reser
$(function(e) {
	//드래그
	$("#reser figure").draggable({
		revert : true,
		helper : "clone",
		drag : function(){
			$("#dropzone").css({
				background:"#fffce4"
			});
			$("#drop").css({
				border:"5px solid red"
			});
			drop_cancle();
		},
		stop : function(){
			$("#drop").css({
				border:"none"
			});
		}
	});
	//드롭
	$("#drop").droppable({
		drop : function(e,ui){
			ui.helper.remove();
			var no = ui.draggable.attr('data-no');
			var id = ui.draggable.attr('data-id');
			var kind = ui.draggable.attr('data-kind');
			var percent = ui.draggable.attr('data-percent');
			var memo = ui.draggable.attr('data-memo');
			var country = ui.draggable.attr('data-country');
			var count = ui.draggable.attr('data-count');
			var price = ui.draggable.attr('data-price');
		
			//커피정보 활성화
			$("#drop img").attr('src','/image/coffee/'+id+'.jpg');
			$('#info_kind').html(kind);
			$('#info_percent').html(percent);
			$('#info_country').html(country);
			$('#info_memo').html(memo);
			$('#info_count').html(count);
			$('#info_price').html(price+"원");
			
			//input에 커피정보 넣기
			$("input[name='no']").val(no);
			
			//취소버튼 활성화
			$("#drop_cancle").removeClass('dn');
			
			//예약일자 활성화
			$('#reser_info').removeClass('dn');
			
			//예약버튼 활성화
			if($("#info_count").text()!=0){
				$("#reser_button_zone").removeClass('dn');
			}else{
				$("#reser_button_zone").addClass('dn');
			}
		}
	});
	// 예약일자
	$('#reser_date').datepicker({
		minDate : 0,
		dateFormat : "yy-mm-dd"
	});
	
	// 예약 취소
	$("#drop_cancle").on('click',function(){
		drop_cancle();
	});
	
	// 예약하기
	$("#reser_button").on("click",function(e){
		drop_reser();
	});
});


function drop_cancle(){
	// 사진 삭제
	$('#drop img').attr('src','/image/dropzone.png');
	
	// 정보 삭제
	$('#info_kind').html('-');
	$('#info_percent').html('-');
	$('#info_country').html('-');
	$('#info_memo').html('-');
	$('#info_price').html('-');
	$('#info_count').html('-');
	
	//input값 삭제
	$("input[name='no']").val('');
	$("#reser_count").val('');
	
	// 예약일자 비활성화
	$('#reser_date').val('');
	$('#reser_info').addClass('dn');
}

function drop_reser(){
	// 입력하지 않았을 경우
	if($("#reser_count").val()=="" || $('#reser_date').val() == ""){
		alert("위 두개의 칸을 모두 채워주세요.");
		return false;
	}
	// 입력양 보다 적을 경우
	if(parseInt($("#info_count").text()) < parseInt($("#reser_count").val())) {
		alert('입력한 구매수량이 남은 수량보다 많아 예약하지 못합니다.');
		return false;
	}else{
		// 아닌 경우
		var no2 = $("input[name='no']").val();
		var count = $("#reser_count").val();
		var date = $('#reser_date').val();
		$.post("/page/reser/reser.php",{coffeeno:no2,count:count,date:date},function(e){
			alert("예약이 완료되었습니다.");
			drop_cancle();
			$("#drag").html(e);
		});
	}
}





/*
var boardstart = 0;
var boardlist = 5;
var chk = false;
function boards(){
	if(chk) return false;
	chk = true;
	$.post("/page/board/lists.php",{start:boardstart,list:boardlist},function(data){
		boardstart += boardlist;
		$('#listbox').append(data);
	});
	chk = false;
}
*/

// 검색
var start = 0;
var list = 5;
var chk1 = false;
function lists(mode){
	if(chk1) return false;
	chk1 = true;
	if(mode){
		list = 5;
		start = 0;
		localStorage['list']="";
		localStorage['scroll']="";
		localStorage['search']="";
		localStorage['search']=$("#search").val();
	}else{
		$("#search").val(localStorage['search']);
	}
	if(localStorage['list']) {list=parseInt(localStorage['list']);}
	if(!$("#search").val()){list=5; localStorage['scroll']="";}
	$.post("/page/search/search_list.php",{start:start,list:list,"search":$('#search').val()},function(data){
		if(mode) {$("#searchbox").html('');}
		$("#searchbox").append(data);
		start += list;
		localStorage['list'] = start;
		$(window).scrollTop(localStorage['scroll']);
		chk1 = false;
	});
}


var start1 = 0;
var list1 = 5;
var chk3 = false;
function sear(mode){
	// 아래 2줄
	// 한 번만 실행 시키려고.
	// 처음 실행될때는 false 이므로 넘어가는데 다음 한번더 실행시에는 true 인식되서 함수 실행 멈춤.
	if(chk3) return false;
	chk3 = true;
	
	// 검색 값이 있으면
	if(mode){
		list1 = 5;
		start1 = 0;
	}
	
	$.post("/page/search/search_list.php",{start:start1, list:list1, "search":$("#search").val()},function(data){
		// 검색하면 원래 있던 데이터는 초기화
		if(mode) {$('#searchbox').html('');}
		
		$("#searchbox").append(data);
		// !data 이거 안해도 되는이유가
		// limit 할때 start1 이 커지면 짜피 데이터 안나옴.
		start1 += list1;
		chk3 = false;
	});
}



// 애니메이션
var chk2=false;
$(function(e){
	//최초 한번 실행
	if(chk2){
		return false;
	}else{
		chk2=true;
		prog();
	}
	// 자동재생
	slider.on();
	//STYLE
	$("#slider").css({
		width : max_num * 100 + "%"
	});
	$("#slider li").css({
		width : 100 / max_num + "%"
	});
});
// ON / OFF
var slider = {
	on : function(){
		slider.off();
		this.timer=setTimeout(function(){
			animation('right');
		},5000);
	},
	off : function(){
		clearTimeout(this.timer);
	}
}
// FUNCTION
var pos = 1;
var max_num = 3;
function animation(type){
	switch(type){
		case "right" :
			pos = pos == max_num ? 1 : pos + 1;
		break;
		case "left" :
			pos = pos == 1 ? max_num : pos - 1;
		break;
		default :
			pos = parseInt(type);
		break;
	}
	
	prog();
	
	$("#trash1").css({
		display:"block",
		marginLeft:"-100%"
	});
	$("#trash2").css({
		display:"block",
		marginLeft:"100%"
	});
	$("#trash3").css({
		display:"block",
		marginLeft:"-100%"
	});
	$("#trash4").css({
		display:"block",
		marginLeft:"100%"
	});
	$("#trash5").css({
		display:"block",
		marginLeft:"-100%"
	});
	
	
	
	$("#slide_index li a").removeClass('now');
	$("#slide_index li:nth-of-type("+pos+") a").addClass('now');
	
	$("#trash1").animate({
		marginLeft:"100%",
		display:"none"
	},1000);
	$("#trash2").animate({
		marginLeft:"-100%",
		display:"none"
	},1000);
	$("#trash3").animate({
		marginLeft:"100%",
		display:"none"
	},1000);
	$("#trash4").animate({
		marginLeft:"-100%",
		display:"none"
	},1000);
	$("#trash5").animate({
		marginLeft:"100%",
		display:"none"
	},1000);
	
	
	
	$("#slider").animate({
		marginLeft : "-" + (pos-1) * 100 + "%"
	},1000, function(){
		slider.on();
	});
}


function prog(mode){
	$("#trash6").stop(Queue=0);
	$("#trash7").stop(Queue=0);
	$("#trash6").css({
		height:"0px"
	});
	$("#trash7").css({
		width:"0px"
	});
	$("#trash6").animate({
		height:"100%"
	},5000);
	$("#trash7").animate({
		width:"100%"
	},5000);
}




// append_list
var start = 0;
var list = 5;
function append_list(){
	$.post("/page/scroll/list_append.php",{start:start,list:list},function(data){
		var d_len = $(data).length;
		alert(data);
		if(d_len != 0){
			$("#loading").append("<img src='/image/loading.gif' alt='loading'>");
			setTimeout(function(e){
				$("#appendbox").append(data);
				$("#loading img").remove();
			},200);
			start += list;
		}
	});
}



/* 댓글의 댓글 */
// 여기서 함수 실행될때 게시물 번호 가져온다.
function ok_reply(no){ 
	var content  = $('#reply_content').val();
	if(content == "" ){alert('댓글을 입력해주세요.'); return false;}
	// 그리고 post 실행해서  reply.php 로 간다.
	$.post("/page/replyboard/reply.php",{content:content,bno:no},function(data){
		$("#reply_view").html(data);
		$("#reply_content").val('');
	});
}


var now_reply_num = "";
$(function(e) {
	$("div[class^='reply_reply']").on("click",function(){
		// 넘어왔을때 // 만약 이 댓글의 번호가 12면
		// reply_reply_12 일거잖음
		// 그걸 잘라버려 _ 로 그러면 reply reply 12 되잖음
		var dis = $(this).attr('class').split("_");
		
		$('.reply_'+dis[2]).after($('#reply_reply_box'));
		$("#reply_reply_content").val('');
		$("#reply_reply_box").removeClass('dn');
		
		now_reply_num = dis[2];
	});
});

function ok_reply_reply(no){
	var content = $("#reply_reply_content").val();
	if(content == ""){alert('댓글을 입력하세요.'); return false;}
	// reply_no 가 생겼죠? 네
	$.post("/page/replyboard/reply.php",{content:content,reply_no:now_reply_num,bno:no},function(data){
		$("#reply_view").html(data);
		$("#reply_reply_content").val('');
	});
}

/*

// 게시판 댓글
$(function(){
	$("#reply_button").on("click",function(){
		var content = $("#reply").val();
		var bno = $("#bno").val();
		if(content == "") {alert('댓글을 입력해주세요.'); return false;};
		$.post("/page/board/reply.php",{content:content,bno:bno},function(data){
			$("#reply_view").html(data);
			$('#reply').val('');
		});
	});
});



*/

