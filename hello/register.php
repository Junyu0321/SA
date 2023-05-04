<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <form method="post" action="registeradd.php">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">校外人士註冊</h2>
                        <h4 class="font-weight-bold">Step 1 : 填寫報名者帳號資訊</h4>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" class="form-control" id="exampleInputaccount" name="user_id" placeholder="帳號" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-control" id="exampleInputPassword4" name="user_password" placeholder="密碼"/>
                            </div>
                            <h4 class="font-weight-bold">Step 2 : 填寫報名者資訊</h4>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" id="exampleInputName1" name="user_name" placeholder="姓名"/>
                            </div>
                           
                            <div class="form-group">
                                <label for="birthday"></label>
                                <input type="date" class="form-control" id="exampleInputbd" name="user_birth" placeholder="生日"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"></label>
                                <input type="text" class="form-control" id="exampleInputphone" name="user_phone" placeholder="連絡電話"/>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="exampleInputEmail3" name="user_email" placeholder="電子郵件信箱"/>
                            </div>
                            
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="../login/login.php" class="signup-image-link">我已註冊過</a>
                    </div>
                </div>
            </div>
        </section>

        
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>