 <?php
  session_start();
  
  $db = new mysqli("localhost","web","1234","0811member");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>