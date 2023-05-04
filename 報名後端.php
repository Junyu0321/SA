<?php
    // if(isset($_SESSION["user_identity"])){
    include 'link.php';
    $list_id=strval(rand(10000,99999));
    // $user_phone=$_POST['user_phone'];
    // $user_email=$_POST['user_email'];
    $option_length=$_POST["options"];
    $list_dining="";
    for ($i=0; $i <sizeof($option_length) ; $i++) { 
      $list_dining=$list_dining." ".$option_length[$i];
    }
    $list_detail=$_POST['list_detail'];
    $act_id= $_POST["act_id"];
    $ses_id= $_POST["ses_id"];
    $user_id= $_POST["user_id"];

    $sql  = "insert into list (list_id, act_id, ses_id, user_id, list_dining, list_detail) 
    values ('$list_id', '$act_id', '$ses_id', '$user_id', '$list_dining', '$list_detail')";

    if(mysqli_query($link,$sql))
         {
          // echo $sql;
        ?>
        <script>
            alert('報名成功!');
            location.href="瀏覽活動.php";
        </script>
            <?php
          }
        else
          {
             //echo $sql;
            ?>
        <script>
            alert('報名失敗!');
            history.back();
            </script>
            <?php
          }
        // }
      ?>