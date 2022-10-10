<?php

include "../../include/lib.php";

mq("insert into reply set bno=?,uid=?,content=?",array($_POST['bno'],$_SESSION['id'],$_POST['content']));

$mq=mq("select * from reply where bno=? order by no desc",array($_POST['bno']));
while($md = mfa($mq)){
?>

<li style="margin-top:10px; float:left;">
	<strong style="font-size:1.3em;"><?php echo $md['uid'];?></strong> <span style="font-size:0.89em;"><?php echo $md['date'];?></span>
</li>
<li style="margin-top:5px; width:100%; float:left; border-bottom:1px solid #ccc; padding-bottom:10px;">
	<?php echo ut($md['content']);?>
</li>

<?php
}
?>