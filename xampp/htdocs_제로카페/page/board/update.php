<?php

$no = $_POST['no'];

$d = mfaq("select * from board where no=?",array($no));

if($d['pw'] != $_POST['pw_ok']){
	echo "
		<script>
			msg('비밀번호를 확인해주세요.');
			goPage('/board/board/rewrite/{$no}');
		</script>
	";
}else{
	if(isset($_POST['pw']) && $_POST['pw']!=""){
		mq("update board set title=?,content=?,pw=? where no=?",array($_POST['title'],$_POST['content'],$_POST['pw'],$no));
	}else{
		mq("update board set title=?,content=? where no=?",array($_POST['title'],$_POST['content'],$no));
	}
	echo "
		<script>
			msg('글이 수정되었습니다.');
			goPage('/board/board/view/{$no}');
		</script>
	";
}