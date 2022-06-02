<?php

include "../../include/lib.php";

$start = $_POST['start'];
$list = $_POST['list'];

$q = mq("select * from coffee where no>0 order by no desc limit {$start},{$list}");
while($d = mfa($q)){
?>
	<tr>
        <td><?php echo $d['no'];?></td>
        <td><?php echo $d['kind'];?></td>
        <td><?php echo $d['percent'];?></td>
        <td><?php echo $d['country'];?></td>
        <td><?php echo $d['memo'];?></td>
        <td><?php echo $d['count'];?></td>
        <td><?php echo $d['price'];?></td>
    </tr>
<?php
}
?>