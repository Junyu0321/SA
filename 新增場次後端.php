<?php
    include 'link.php';

    $act_id=$_POST['act_id'];
    $ses_id=strval(rand(10000,99999));
    $ses_name=$_POST['ses_name'];
    $ses_start=$_POST['ses_start'];
    $ses_end=$_POST['ses_end'];
    $ses_location=$_POST['ses_location'];
    // $ses_quota=$_POST['ses_quota'];
    $option_length=$_POST["options"];
    $ses_available="";
    for ($i=0; $i <sizeof($option_length) ; $i++) { 
      $ses_available=$ses_available." ".$option_length[$i];
    }
    $ses_number=$_POST['ses_number'];
    $_SESSION["ses_id"]=$ses_id;


    $sql  = "insert into session (ses_id, ses_name, ses_start, ses_end, ses_location, ses_available, ses_number, act_id) 
    values ('$ses_id', '$ses_name', '$ses_start', '$ses_end', '$ses_location', '$ses_available', '$ses_number', '$act_id')";
    
    if(mysqli_query($link,$sql))
         {
        ?>
        <script>
            alert('新增成功!');
            location.href="活動內容.php?act_id=<?php echo $act_id?>";
        </script>
            <?php
          }
        else
          {
            
            ?>
        <script>
            alert('新增失敗!');
            history.back();
            </script>
            <?php
          }
     
      ?>