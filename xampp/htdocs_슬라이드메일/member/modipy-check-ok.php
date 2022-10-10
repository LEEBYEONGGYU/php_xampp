<meta charset="utf-8" />
<?php  
include('db.php');
$connect=mysqli_connect("localhost","root",
"apmsetup","0805member");
$id = $_GET['id'];
$pw = $_GET['pw'];
$bno = $_GET['idx'];
$query = "SELECT * FROM member where name='$id'";
$result = $connect->query($query);
$sql = mq("select * from member where idx='".$bno."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) 
        {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['pw']==$pw)
                {
                        $_SESSION['id']=$id;
                        if(isset($_SESSION['id']))
                        {
?>                         <li><a href="modyfi.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
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