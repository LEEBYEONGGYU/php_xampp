<?php include  $_SERVER['DOCUMENT_ROOT']."/include/header.php";
		$bno = $_GET['pno']; /* bno함수에 idx값을 받아와 넣음*/
        echo $bno; 
		$date = date('Y-m-d');
        $userid="";
        //$userip = $_SERVER['REMOTE_ADDR']; '".$userip."'
        if(isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
        }else{
            $userid = "guest";
        }


        $sql = mq("insert into recent(pro_no,userid,creation_date) values('".$bno."', '".$userid."', '".$date."')");
		$sql2 = mq("select * from product pr inner join catagory ca on pr.pro_class = ca.title where pro_num='".$bno."'"); /* 받아온 idx값을 선택 */
		$product = $sql2->fetch_array();

?>

<div id="product">
<div id="product_header">
    <div id="product_img">
        <img src="/imgs/catagory/product/<?php echo $product['img']; ?>/<?php echo $product['pro_proimg']; ?>.png" 
        alt="<?php echo $product['pro_name']; ?>" title="<?php echo $product['pro_name']; ?>"
        width="400" height="250" />
    </div>
    <div id="product_t"><?php echo $product['pro_name']; ?></div>
    <div id="product_price"><?php echo $product['pro_price']; ?>원</div>
</div>
    </div>
<?php include  $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>