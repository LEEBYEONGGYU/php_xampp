<?php include  $_SERVER['DOCUMENT_ROOT']."/include/header.php";
        date_default_timezone_set('Asia/Seoul');
        $currdt = date("Y-m-d H:i:s"); 
		$bno = $_GET['pno']; /* bno함수에 pno값을 받아와 넣음*/
        $userid="";
        $userip = $_SERVER['REMOTE_ADDR'];

        if(isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
        }else{
            $userid = "guest";
        }

        $sql = mq("insert into recent(pro_no,ip_addr,userid,creation_date) values('".$bno."', '".$userip."', '".$userid."', '".$currdt."')");
		$sql2 = mq("select * from product pr inner join catagory ca on pr.pro_class = ca.title where pro_num='".$bno."'"); /* 받아온 idx값을 선택 */
		$product = $sql2->fetch_array();

?>
<div id="product">
    <div id="product_header">
        <div id="product_img">
            <img src="/imgs/catagory/product/computer/ssd970.png" alt="ssd970" title="ssd970" width="600" height="400">
        </div>
        <div id="product_t">asdf</div>
        <div id="product_price">345</div>
        <div id="product_line"></div>
        <div id="product_op">
            <div>
                <select>
                    <option>1. 필수선택</option>
                    
                </select>
            </div>
            <div>
                <?php 

                ?>
                <select>
                    <option>2. 옵션선택</option>
                    <?php 
                        $sql3 = mq("select * from product_op po inner join product p on po.op_num = p.pro_num where po.pro_num = '".$bno."'");
                        while($product_op = $sql3->fetch_array()){
                    ?>
                        <option value="<?php echo $product_op['op_num'];?>"><?php echo $product_op['op_name'];?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>

<?php include  $_SERVER['DOCUMENT_ROOT']."/include/footer.php"; ?>