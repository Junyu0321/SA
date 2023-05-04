<?php
    include 'link.php';

    $act_id=strval(rand(10000,99999));
    $act_category=$_POST['act_category'];
    $act_state=$_POST['act_state'];
    $act_presenter=$_POST['act_presenter'];
    $act_name=$_POST['act_name'];
    $act_signup=$_POST['act_signup'];
    $act_signdue=$_POST['act_signdue'];
    $act_organizer=$_POST['act_organizer'];
    $act_coorganizer=$_POST['act_coorganizer'];
    $act_fee=$_POST['act_fee'];
    $act_way=$_POST['act_way'];
    $act_people=$_POST['act_people'];
    $act_contact=$_POST['act_contact'];
    $act_detail=$_POST['act_detail'];
    $option_length=$_POST["options"];
    $act_type="";
    for ($i=0; $i <sizeof($option_length) ; $i++) { 
      echo $option_length[$i];
      $act_type=$act_type." ".$option_length[$i];
    }
    $_SESSION["act_id"]=$act_id;
   
    $sql  = "insert into activity (act_id, act_category, act_state, act_presenter, act_name, act_signup, act_signdue, act_organizer, act_coorganizer, act_fee, act_way, act_people, act_contact, act_detail, act_type) 
    values ('$act_id', '$act_category','尚未開放報名', '$act_presenter', '$act_name', '$act_signup', '$act_signdue', '$act_organizer', '$act_coorganizer', '$act_fee', '$act_way', '$act_people', '$act_contact', '$act_detail', '$act_type')";

    if(mysqli_query($link,$sql))
         {
        ?>
        <script>
            alert('新增成功!');
            location.href="瀏覽活動.php";
        </script>
            <?php
          }
        else
          {
            // echo $sql;
            ?>
        <script>
            alert('新增失敗!');
            history.back();
            </script>
            <?php
          }
     
      ?>