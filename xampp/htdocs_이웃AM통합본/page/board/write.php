<?php 
	include "../../db.php";
    if(isset($_SESSION['userid'])){
?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" href="../../css/board.css" />
 </head>
 <body>
    <div id="board_write">
        <h1><a href="../list.php">자유게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
            <div id="write_area">
                <div id="icon">
                    <!--- 준비중 -->
                </div>
                <form action="write_ok.php" method="post" enctype="multipart/form-data">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div id="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required/>  
                    </div>
                    <div id="in_file">
                        <input type="file" name="b_file" />
                    </div>
                    <div id="in_lock">
                        <input type="checkbox" value="1" name="lockpost" />해당글을 비공개로 설정합니다.
                    </div>
                    <div class="bt_se">
                        <button>글 작성</button>
                    </div>
                </form>
            </div>
        </body>
    </html>
<?php 
}else{
    header('Content-Type: text/html; charset=utf-8');
echo "<script>alert('잘못된 접근입니다.'); location.href='../../index.php'; </script>";
    } 
?>