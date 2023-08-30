<?php include "bin/db.php"; ?>
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>No</title>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/css/common.css" />
</head>
<body>
	<header></header>
	<section class="layout">
		<div class="grow1">
		<div class="div1">
					<div class="txt">Todo-List(해야 할 일) <img src="imgs/write.png" alt="write" title="write" width="35" height="35" id="write_icon" /></div>
					<div class="areaLine"></div>
					<div id="todoListWrap">
						<?php 
							$sql = mq("select * from todo order by to_idx");  
							while($todo = $sql->fetch_array()){

							$title=$todo["to_title"]; 
							if(strlen($title)>30){ 
								$title=str_replace($todo["to_title"],mb_substr($todo["to_title"],0,30,"utf-8")."...",$todo["to_title"]);
							}
						?>
						<div class="todoList">
							<div class="todo_txt tl"><?php echo $title; ?></div>
							<div class="remove_bt" onclick="remove();"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
							<div class="edit_bt" onclick="edit();"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
						</div>
						<?php } ?>
					</div>
				</div>
		</div>
		<div class="grow1">
		<div class="txt">Doing-List(진행 중) </div>
						<div class="areaLine"></div>
						<div id="todoListWrap">
							<?php 
								$sql = mq("select * from doing order by doing_idx");  
								while($doing = $sql->fetch_array()){

								$doing_title=$doing["doing_title"]; 
								if(strlen($doing_title)>30){ 
									$doing_title=str_replace($doing["doing_title"],mb_substr($doing["doing_title"],0,30,"utf-8")."...",$doing["doing_title"]);
								}
							?>
							<div class="todoList">
								<div class="todo_txt tl"><?php echo $doing_title; ?></div>
								<div class="remove_bt" onclick="remove();"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
								<div class="edit_bt" onclick="edit();"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
							</div>
						<?php } ?>
					</div>
		</div>
		<div class="grow1">
		<div class="txt">Done-List(완료) </div>
						<div class="areaLine"></div>
						<div id="todoListWrap">
						<?php 
								$sql = mq("select * from done order by done_idx");  
								while($done = $sql->fetch_array()){

								$done_title=$done["done_title"]; 
								if(strlen($done_title)>30){ 
									$done_title=str_replace($done["done_title"],mb_substr($done["done_title"],0,30,"utf-8")."...",$done["done_title"]);
								}
							?>
								<div class="todoList">
									<div class="todo_txt"><?php echo $done_title; ?></div>
									<div class="remove_bt" onclick="remove();"><img src="imgs/trash.png" alt="trash" title="trash" width="25" height="25" /></div>
									<div class="edit_bt" onclick="edit();"><img src="imgs/edit.png" alt="edit" title="edit" width="45" height="45" style="margin-top:-10px;"/></div>
								</div>
					<?php } ?>
				</div>
		</div>
	</section>
							</div>


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