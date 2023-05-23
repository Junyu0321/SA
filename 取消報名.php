<?php
include 'link.php';
?>
<?php
    $act_id = $_GET['act_id'];
    $list_id = $_GET['list_id'];
    $sql = "delete from list where list_id = '$list_id'";
    
    
    if(mysqli_query($link,$sql))
    {
        //echo $sql;
      ?>
      <script>
        alert('取消報名成功');
        location.href='我的歷史.php';
      </script>
      <?php
    }
  else
    {
        //echo $sql;
      ?>
      <script>
        alert('取消報名失敗');
        location.href='我的歷史.php';
      </script>
  <?php
    }
?> 