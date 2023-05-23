<!DOCTYPE html>
<html lang="en">
<?php
include 'link.php';
session_start();
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

<body style="background-color:#ffffff">
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

                    <?php
                    // 假設 $_SESSION["user_identity"] 已經被設定為 "教職員"
                    if($_SESSION["user_identity"] == "教職員") {
                    ?>
                        <a href="新增活動.php" class="nav-item nav-link fw-bold">新增活動</a>
                    <?php
                    } elseif($_SESSION["user_identity"] !== '教職員') {
                    ?>
                        <a href="" class="nav-item nav-link fw-bold"></a>
                    <?php
                    }
                    ?>



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bold" data-bs-toggle="dropdown">個人專區</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">我的收藏</a>
                            <a href="我的歷史.php" class="dropdown-item">我的報名</a>                           
                            <a href="舉辦活動歷史.php" class="dropdown-item">舉辦過的活動</a>
                        </div>
                    </div>
                    <?php if (isset($_SESSION["user_name"])) { ?>
                        <a href="登出.php" class="nav-item nav-link fw-bold"><?php echo $_SESSION["user_name"] ?>, 登出</a>
                    <?php } else { ?>
                        <a href="login/login.php" class="nav-item nav-link fw-bold">登入/註冊</a><?php } ?>
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
            <h1 class="display-3 mb-3 animated slideInDown">瀏覽活動</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">首頁</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">活動</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">瀏覽活動</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->

    <!-- <input type="hidden" name="dbaction" value="insert"> -->
    
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">舉辦過的活動</h1>
            </div>

            <br>
            <div style="display: flex; align-items: center; justify-content: space-between;">
                    
                    
                </div><br><br>


                <div class="row g-4">
                    <?php
                    include 'link.php';
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT * FROM user u, activity a WHERE u.user_id = a.user_id AND a.user_id = '$user_id'";


                    $result = mysqli_query($link, $sql);


                    while ($row = mysqli_fetch_array($result)) { ?>


                        <div class="col-lg-4 col-md-6">
                            <div class="card bg-light" style="border-radius:10px">
                                <div class="card-body">
                                    <h4 class="card-title text-primary"><a href="活動內容.php?act_id=<?php echo $row['act_id'] ?>"><?php echo $row['act_name'] ?></a></h4>
                                    <p class="card-description">
                                        <?php echo $row['act_id'] ?> &nbsp;&nbsp;&nbsp; <?php echo $row['act_category'] ?>
                                    </p>
                                    <br>
                                    <p>
                                        報名時間：<?php echo $row['act_signup'] ?> ~ <?php echo $row['act_signdue'] ?> <br>
                                        <!-- 場次數：1 -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

            </form>
        </div>
    </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-8">
                    <h1 class="fw-bold text-primary mb-4">活動管理系統</h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <h4 class="text-light mb-4">Address</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>242新北市新莊區中正路510號</p>
                    <p><i class="fa fa-phone-alt me-3"></i>02 2905 2000</p>
                    <p><i class="fa fa-envelope me-3"></i>pubwww@mail.fju.edu.tw</p>
                </div>
                <div class="col-lg-4 col-md-8">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="瀏覽活動.php">瀏覽活動</a>
                    <a class="btn btn-link" href="login/login.php">登入</a>
                    <a class="btn btn-link" href="register.php">註冊</a>
                    <!-- <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a> -->
                </div>


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