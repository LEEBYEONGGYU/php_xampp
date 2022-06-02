<meta charset="UTF-8">
<?php
include('db.php');
$connect=mysqli_connect("localhost","root",
"apmsetup","0805member");
$id = $_POST['name'];
$userpw = $_POST['pw'];
$bno = $_POST['idx'];
$query = "SELECT * FROM member where name ='$id'";
$queri = "SELECT * FROM member where pw='$userpw'";
$result = $connect->query($query);
$resulo = $connect->query($queri);
$sql = mq("select * from member where idx='".$bno."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();
    //아이디가 있다면 비밀번호 검사
    if(mysqli_num_rows($result)==1) 
    {

        $row=mysqli_fetch_assoc($result);

            //비밀번호가 맞다면 세션 생성
            if($row['pw']==$userpw)
            {
                    $_SESSION['name']=$id;
                    if(isset($_SESSION['name']))
                    {
?>                         
                        <?php
                        $sql = mq("update member set name='".$_POST['name']."',pw='".$userpw."',title='".$_POST['title']."'
                        ,content='".$_POST['content']."' where idx='".$bno."'");
                        ?>
                        <script>
                                alert("수정 되었습니다.");
                                location.replace("/index.php");
                        </script>
<?php
                    }
                    else
                    {
                            echo "session fail";
                            
                    }
            }

            else 
            {
?>                      <script>
                            alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                            history.back();
                    </script>
<?php
            }

    }

    else
    {
?>          <script>
            alert("아이디 혹은 비밀번호가 잘못되었습니다?");
            history.back();
        </script>
<?php
    }


?>




