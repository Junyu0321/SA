<?php
include 'link.php';
?>
<?php
    $act_id = $_GET['act_id'];
    $sql = "delete from activity where act_id = '$act_id'";
    
    
    if(mysqli_query($link,$sql))
    {
        //echo $sql;
      ?>
      <script>
        alert('刪除成功');
        location.href='瀏覽活動.php';
      </script>
      <?php
    }
  else
    {
        //echo $sql;
      ?>
  <script>
   alert('刪除失敗');
   location.href='瀏覽活動.php';
  </script>
  <?php
    }
?> 