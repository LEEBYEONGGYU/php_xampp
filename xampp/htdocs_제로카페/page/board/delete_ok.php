<?php
$d = mfaq("select * from board where no=?",array($_POST['no']));
$no = $_POST['no'];
if($d['pw'] != $_POST['pw']){
	echo "
		<script>
			msg('비밀번호를 확인해주세요.');
			goPage('/board/board/view/{$no}');
		</script>
	";
}else{
	mq("delete from board where no=?",array($_POST['no']));
	echo "
		<script>
			msg('삭제되었습니다.');
			goPage('/board/board');
		</script>
	";
}