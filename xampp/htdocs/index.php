<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>No</title>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="" />
	 <style>
		* {
			margin: 0 ;
			padding:0;
		}

		ul li {list-style: none;}
		a {color:#ccc; text-decoration: none;}
		img {vertical-align: top; border: 0;}
		.tl {text-align:left;}
		.tc {text-align:center;}
		.tr {text-align:right;}


		header {
			width:100%; 
			height:60px;
			background:#ECCEF5;
		}

		#todoArea {
			border:solid 1px #ccc;
			margin-top:30px;
			left:0;
			box-shadow: 7px 7px 2px 1px rgba(0, 0, 255, .2);
			background:white;

		}

		.txt {
			text-align:center;
			font:bold 26px 'malgun gothic';
			margin-top:15px;
		}
		/*body {
			background: linear-gradient(to bottom, #4bcc9d, #cb9bda);
		}*/
		.areaLine {
			width:500px;
			height:2px;
			background:#D8D8D8;
			margin-top:15px;
		}
		section {
			text-align:center;
			position:relative;
			margin-top:30px;
		}

		section article{
			width:600px;
			height:400px;
			border:solid 1px #ccc;
			display: inline-block;
}

		#todoListWrap{
			margin-top:30px;
		}
		.todoList {
			background:#F2F2F2;
			width:550px;
			height:50px;
			margin-top:10px;
			position:relative;
			margin-left:20px;
		}
		.todo_txt {
			font:16px 'malgun gothic';
			line-height:50px;
			margin-left:10px;
		}
		.remove_bt {
			position:absolute;
			top:10px;
			right:70px;
			
		}
		.edit_bt {
			position:absolute;
			top:10px;
			right:20px;
		}

		#doingArea {
			border:solid 1px #ccc;
			box-shadow: 7px 7px 2px 1px rgba(0, 0, 255, .2);
			background:white;

		}



		#doneArea {

			border:solid 1px #ccc;
			position:relative;

			box-shadow: 7px 7px 2px 1px rgba(0, 0, 255, .2);
			background:white;
		}

		#planDay {
			width:600px;
			height:400px;
			border:solid 1px #ccc;
			margin-top:30px;
			margin-left:10px;
			
			box-shadow: 7px 7px 2px 1px rgba(0, 0, 255, .2);
			background:white;
		}
		#planInfo {
			font:bold 20px 'malgun gothic';
			color:black;
			margin-top:20px;
			margin-left:10px;
		}
		p {
			font:bold 20px 'malgun gothic';
			color:black;
			margin-top:0px;
			margin-left:10px;
		}

		#join_form_in {
	width:700px;
	height:600px;
	margin-top:150px;
	background: white;
}
#join_f {
	margin-left: 50px; 
	margin-top:50px; 
}
.form-group {
	margin-bottom: 40px; 
	margin-left: 50px;
	font-size: 16px;
	font-weight: bold;
	height:30px;
	padding:5px 10px;
	font-size:14px;
}
.mb {
	margin-top:10px; 
}
.inp {
	padding: 0 0 0 10px;
	font-size:12px;
	border-radius: 10px;
	border:solid 1px #D8D8D8;
	width: 450px; 
	height: 35px; 
}
.inp:focus {
	box-shadow: 1px 1px 10px 1px #00BFFF;
	transition: 0.5s;
}
.form_btn {
	margin-top:70px; 
	margin-left: 200px; 
}
.form_bt {
	padding:10px 20px 10px 20px;
	background: #58D3F7;
	border: 0px;
	color:white;
}
.form_bt:hover {
	background: #01A9DB;
}
.form_bt2 {
	margin-left: 30px;
	padding: 10px 20px 10px 20px;
	background: #FFBF00;
	border: 0;
	color:white;
	font-size: 12px;
}
.form_bt2 a {
	color:white;
}
.form_bt2:hover {
	background: #DBA901;
}
	 </style>
</head>
<body>
	<header></header>
	<section>
		<article>
			<div class="txt">Todo-List(해야 할 일) <img src="imgs/write.png" alt="write" title="write" width="35" height="35" id="write_icon" /></div>
			<div class="areaLine"></div>
			<div id="todoListWrap">
				<!-- DB로 반복 돌려야하는 구간-->
				<div class="todoList">
					<div class="todo_txt tl">휴가 전결수정</div>
					<div class="remove_bt" onclick="remove();"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt" onclick="edit();"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">출장기능추가</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">FCM링크 변경</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">쿼리스트링 권한 제거</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
			</div>
		</article>
		<article class="tc">
		<div class="txt">Doing-List(진행 중) </div>
		<div class="areaLine"></div>
		<div id="todoListWrap">
				<!-- DB로 반복 돌려야하는 구간-->
				<div class="todoList">
					<div class="todo_txt tl">휴가 전결수정</div>
					<div class="remove_bt" onclick="remove();"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt" onclick="edit();"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">출장기능추가</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">FCM링크 변경</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">쿼리스트링 권한 제거</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
			</div>
		</article>
		<article>
		<div class="txt">Done-List(완료) </div>
		<div class="areaLine"></div>
		<div id="todoListWrap">
				<!-- DB로 반복 돌려야하는 구간-->
				<div class="todoList">
					<div class="todo_txt">휴가 전결수정</div>
					<div class="remove_bt" onclick="remove();"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt" onclick="edit();"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">출장기능추가</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">FCM링크 변경</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
				<div class="todoList">
					<div class="todo_txt">쿼리스트링 권한 제거</div>
					<div class="remove_bt"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
					<div class="edit_bt"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
				</div>
			</div>
		</article>
	</section>

	<div id="dialog" title="Basic dialog" style="display:none;">
		<form action="" method="post" id="">
			<div id="join_f">
				<div class="form-group">
					<label for="userid">할 일 입력</label>
					<div class="mb"><input type="text" class="inp" id="userid" name="userid" placeholder="할 거 넣기" /></div>
				</div>
				<div class="form-group">
					<label for="userpw">시작일</label>
					<div class="mb"><input type="password" class="inp" id="userpw" name="userpw" placeholder="시작일" /></div>
				</div>
				<div class="form-group">
					<label for="name">예상종료일</label>
					<div class="mb"><input type="text" class="inp" id="name" name="name" placeholder="종료일" /></div>
				</div>
				<div class="form-group">
					<div class="mb">진행여부<input type="checkbox" /></div>
					<div class="mb">완료여부<input type="checkbox" /></div>
				</div>
				<div class="form_btn">
					<button type="submit" class="form_bt">등록</button>
					   <button type="reset" class="form_bt2">취소</button>
				</div>
			</div> <!-- join_f end -->
		</form>

	  </div>
	  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	  <script src="js/common.js"></script>
</body>

</html>