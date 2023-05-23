<!DOCTYPE html>
<html lang="en">
<?php
include 'link.php';
// $list_id = $_POST["list_id"];
// $user_attend = $_POST["num"];
// $sql  = "UPDATE list SET user_attend='$user_attend' WHERE list_id='$list_id'" ;
//   if(mysqli_query($link,$sql)){

//      }
?>
<head>
    <meta charset="utf-8">
    <title>輔大活動報名系統</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>


<body>
  
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>242新北市新莊區中正路510號</small>
                <small class="ms-4"><i class="fa fa-cellphone"></i>02 2905 2000</small>
            </div>
            
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="瀏覽活動.php" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/fju.png">
            </a>
            <h2 class="fw-bold text-black m-0">活動管理系統</h2> 
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="瀏覽活動.php" class="nav-item nav-link fw-bold">瀏覽活動</a>
                <?php if ($_SESSION["user_identity"] == '教職員') { ?>
                    <a href="新增活動.php" class="nav-item nav-link fw-bold">新增活動</a>
                <?php }?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bold" data-bs-toggle="dropdown">個人專區</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">我的收藏</a>
                            <a href="我的歷史.php" class="dropdown-item">我的報名</a>
                            <a href="舉辦活動歷史.php" class="dropdown-item">舉辦過的活動</a>
                        </div>
                    </div>
                    <?php if(isset($_SESSION["user_name"])){ ?>
                        <a href="登出.php" class="nav-item nav-link fw-bold"><?php echo $_SESSION["user_name"]?>, 登出</a>
                    <?php }else{?>
                        <a href="login/login.php" class="nav-item nav-link fw-bold">登入/註冊</a><?php }?>
                </div>
                
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-bell text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">報名活動</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">報名活動</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


   
    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">報名者名單</h4>
                    <div class="table-responsive">
                    <form action="attendence.php"  method="post"> 
                      <table class="table table-striped">
                        <button type="submit">點名</button>
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>學號</th>
                            <th>姓名</th>
                            <th>身分</th>
                            <th>系級</th>
                            <th>電子郵件</th>
                            <th>出席情況</th>
                            <th>編輯</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                            $act_id =$_GET['act_id'];
                            $ses_id =$_GET['ses_id'];
                            $sql="select * from list l, user u, activity a, session s where l.act_id = a.act_id and l.act_id = s.act_id and u.user_id = l.user_id
                                  and l.ses_id = s.ses_id and s.act_id = '$act_id' and l.ses_id = '$ses_id'";
                            $rs=mysqli_query($link,$sql);
                            $num=0;
                                        
                            while($row=mysqli_fetch_array($rs)){
                                  
                            $num++;
                        ?>
                                        
                                  <tr>
                                      <th scope="row"  width="10%"><?php echo $num;?></th>
                                      <td><?php echo $row["user_id"]?></td>
                                      <td><?php echo $row["user_name"]?></td>
                                      <td><?php echo $row["user_identity"]?></td>
                                      <td><?php echo $row["user_name"]?></td>
                                      <td><?php echo $row["user_email"]?></td>
                                      <td><?php echo $row["user_name"]?></td>
                                      <td>
                                      <a href="signup_cancel.php?list_id=<?php echo $row["list_id"]?>" class="genric-btn link-border circle small">刪除</a></td>
                          
                                  </tr>
                                  </form>
                                <?php
                                }?>
                                <p class="card-description">
                                報名人數：<?php echo $num;?>  &nbsp; 出席人數：0  &nbsp; 出席率：0 %
                                </p>
                        </tbody>
                       
                      </table>
                    </div>  
                  </div>
                </div>
              </div>
           
            
        </div>
    </div>
    <!-- Testimonial End -->



    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>