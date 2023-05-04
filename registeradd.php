
    <?php
    include 'link.php';
    $user_id = $_POST['user_id'];
	  $user_email = $_POST['user_email'];
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_birth = $_POST['user_birth'];
    $user_phone = $_POST['user_phone'];
    
	//這裡是新增的語法
	$sql  = "INSERT INTO user (user_id, user_email, user_name, user_password, user_birth, user_phone) VALUES ('$user_id', '$user_email', '$user_name', '$user_password', '$user_birth', '$user_phone')";
  echo ($sql);
/*    if(mysqli_query($link,$sql))
	  {
		?>
	      <script>
        alert('註冊成功!');
        header(location="index.php");
        </script>
		<?php
	  }
	else
	  {
		
		?>
	      <script>
        alert('註冊失敗!');
        history.back();
        </script>
		<?php
	  }
 
  ?>
*/