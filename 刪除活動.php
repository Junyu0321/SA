<!DOCTYPE html>
<html lang="en">
<?php
include 'link.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>

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
</body>
</html>