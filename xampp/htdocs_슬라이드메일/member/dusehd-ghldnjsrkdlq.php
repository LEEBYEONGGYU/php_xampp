<meta charset="UTF-8" />
<?php
 include "dbp.php";
 $host = 'localhost';
 $user = 'root';
 $pw = 'apmsetup';
 $dbName = '0811member';
 $conn = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=$_POST['pw'];
 $name=$_POST['name'];
 $pn=$_POST['pn'];
        $id_check =  mq("select * from member
         where id='".$id."'");
        $id_chec = $id_check->fetch_array();
        if($id_chec == 0)
        {
        $sql = "insert into member (id,pw,name,pn)";
	$sql = $sql."values('$id','$password','$name','$pn')";
        if($conn->query($sql)===TRUE)
        {
                ?>  
                <script>
                        alert("회원가입 되었습니다.");
                        location.replace("/index.php");
                </script>
                 <?php
        }
        else
        {
                echo 'fail to insert sql';
        }
        } 
        else 
        {
                ?>  
                <script>
                        alert("중복된 아이디 입니다. .");
                        history.back();
                </script>
                 <?php
        }



 
?>