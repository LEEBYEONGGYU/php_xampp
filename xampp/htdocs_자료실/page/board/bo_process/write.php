
<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php"; ?>
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>글작성</h1>
					<span class="subheading"></span>
		  </div>
		</div>
	  </div>
	</div>
  </header>
    <div id="sub_main">
        <div id="board_write">
            <h1><a href="/">자유게시판</a></h1>
            <h4>글을 작성하는 공간입니다.</h4>
                <div id="write_area">
                    <form action="write_ok.php" method="post" enctype="multipart/form-data">
                        <div id="in_title">
                            <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                        </div>
                        <div class="wi_line"></div>
                        <div id="in_name">
                            <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required></textarea>
                        </div>
                        <div class="wi_line"></div>
                        <div id="in_content">
                            <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                        </div>
                        <div id="in_file">
                            <input type="file" value="1" name="b_file" />
                        </div>
                        <div class="bt_se">
                            <button type="submit">글 작성</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>