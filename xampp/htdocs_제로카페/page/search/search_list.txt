<?php
include "../../include/lib.php";

$te="";
$key=$_POST['search'];
if(isset($key) && $key != ""){
	$te .= " and kind like '%$key%' or percent like '%$key%' or memo like '%$key%' or country like '%$key%' or count like '%$key%' or price like '%$key%'";
}
$start = $_POST['start'];
$list = $_POST['list'];
$q = mq("select * from coffee where no>0 {$te} order by no desc limit {$start},{$list}");
while($d = mfa($q)){
?>
	<tr>
        <td><?php echo $d['no'];?></td>
        <td><?php str($key,$d['kind']);?></td>
        <td><?php str($key,$d['percent']);?></td>
        <td><?php str($key,$d['country']);?></td>
        <td><?php str($key,$d['memo']);?></td>
        <td><?php str($key,$d['count']);?></td>
        <td><?php str($key,$d['price']);?></td>
    </tr>
<?php
}