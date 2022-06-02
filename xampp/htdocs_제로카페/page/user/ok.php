<?php
include "../../include/lib.php";

mq("update user set ok=1 where no=?",array($_POST['no']));