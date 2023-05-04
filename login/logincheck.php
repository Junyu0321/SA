<?php 
include 'link.php';

    $user_id = $_POST['user_id'];
    $user_password = $_POST['user_password'];
    
    $sql  = "select * from user where user_id = $user_id and user_password = '$user_password'";
    $result = mysqli_query($link,$sql);
  if($row=mysqli_fetch_array($result))
  {
    $_SESSION["user_id"]=$row["user_id"];
    $_SESSION["user_identity"]=$row["user_identity"];
    $_SESSION["user_name"]=$row["user_name"];
    $_SESSION["user_phone"]=$row["user_phone"];
    $_SESSION["user_email"]=$row["user_email"];
    ?>
    <script>
        alert('登入成功');
        location.href='../瀏覽活動.php';
    </script>
    <?php

  }
     else
     {
        
        ?>
        <script>
          alert('登入失敗');
          location.href='login.php';
        </script>
        <?php
     }

  ?>
