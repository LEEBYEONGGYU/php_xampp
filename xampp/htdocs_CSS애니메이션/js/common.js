$(function(){
	$(".login_bottom").click(function(){
		$(".join_frm").dialog({
			title:"회원가입",
			width:600,
			modal:true,
		});
	});

	$(".login_bottom2").click(function(){
		$("#login_2").dialog({
			title:"로그인",
			width:480,
			modal:true,
		});
	});


});