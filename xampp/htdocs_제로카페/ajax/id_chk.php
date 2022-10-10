<?php

include "../include/lib.php";

$d = mfaq("select * from user where id=?",array($_POST['id']));

if($d){
?>
<span id="id_ok" data-ok="no" style="color:red; font-weight:bold;">√</span>
<?php
}else{
?>
<span id="id_ok" data-ok="yes" style="color:blue; font-weight:bold;">√</span>
<?php
}
?>
