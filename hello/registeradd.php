
    <?php
    include 'link.php';
    $user_id = $_POST['user_id'];
	  $user_email = $_POST['user_email'];
    $user_name = $_POST['user_name'];
    $user_identity = $_POST['user_identity'];
    $user_password = $_POST['user_password'];
    $user_birth = $_POST['user_birth'];
    $user_phone = $_POST['user_phone'];
    
	//這裡是新增的語法
	$sql  = "INSERT INTO user (user_id, user_email, user_name, user_identity, user_password, user_birth, user_phone) VALUES ($user_id, '$user_email', '$user_name','校外人士', '$user_password', '$user_birth', '$user_phone')";

 if(mysqli_query($link,$sql))
	  {
		?>
	      <script>
        alert('註冊成功!');
        location.href="../index.php";
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
