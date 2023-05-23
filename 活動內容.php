<!DOCTYPE html>
<html lang="en">
<?php
 include 'link.php';
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
            <h1 class="display-3 mb-3 animated slideInDown">活動內容</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">首頁</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">活動</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">活動內容</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5 mb-3">活動資訊</h1>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <div class="container-xxl py-3">
        <div class="container">
            <?php include 'link.php';
            $act_id = $_GET["act_id"];

            $sql  = "select * from activity where act_id='$act_id'";

            $result = mysqli_query($link, $sql);

            $num = 1;



            ?>

            <div class="col-md-14 grid-margin">
                <?php while ($row = mysqli_fetch_array($result)) { ?>

                    <div class="card">
                        <div class="card-body-c" style="border-style:double;" >
                            <ul><br>
                                <li><b>活動名稱</b>
                                    <blockquote><?php echo $row["act_name"] ?></blockquote>
                                </li>
                                <li><b>主講人</b>
                                    <blockquote><?php echo $row["act_presenter"] ?></blockquote>
                                <li><b>活動內容</b>
                                    <blockquote><?php echo $row["act_detail"] ?>
                                    </blockquote>
                                </li>
                                <li><b>承辦單位</b>
                                    <blockquote>
                                        <?php echo $row["act_organizer"] ?>
                                    </blockquote>
                                </li>
                                <li><b>社會適應能力</b>
                                    <blockquote>
                                        <?php echo $row["act_type1"] ?>
                                        <?php echo $row["act_type2"] ?>
                                        <?php echo $row["act_type3"] ?>
                                        <?php echo $row["act_type4"] ?>
                                        <?php echo $row["act_type5"] ?>
                                        <?php echo $row["act_type6"] ?>
                                        <?php echo $row["act_type7"] ?>
                                    </blockquote>
                                </li>
                                <li><b>活動費用</b>
                                    <blockquote>
                                        <?php echo $row["act_fee"] ?>
                                    </blockquote>
                                </li>
                                <li><b>報名狀態</b>
                                    <blockquote>
                                        <?php echo $row["act_state"] ?>
                                    </blockquote>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div><br>
            <div class="col-md-14 grid-margin"> 
                <?php if ($_SESSION["user_identity"] == '教職員') { ?>
                    <div class="row">
                        
                        <div class="col-4">
                            <button type="button" class="btn btn-success rounded-pill py-3 px-5" onclick="location.href='刪除活動.php?act_id=<?php echo $act_id ?>'">刪除活動</button>
                        </div><br>
                        <div class="col-4">
                            <button type="button" class="btn btn-success rounded-pill py-3 px-5" onclick="location.href='修改活動.php?act_id=<?php echo $act_id ?>'">修改活動</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary rounded-pill py-3 px-5" onclick="location.href='新增場次.php?act_id=<?php echo $act_id ?>'">新增場次</button>
                        </div><br>
                    </div> 
                <?php } ?>
                <br>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <?php
                include 'link.php';
                $ses_id = $_SESSION['ses_id'];
                $user_indentity = $_SESSION['user_indentity'];
                $sql2  = "select * from session, activity where activity.act_id = session.act_id and session.act_id = '$act_id'";

                $result2 = mysqli_query($link, $sql2);


                while ($row = mysqli_fetch_array($result2)) { ?>


                    <div class="card">
                        <div class="card-body" style="border-style:double;">
                            <h4 class="card-title">場次一</h4>
                            <p>場次代碼：<?php echo $row["ses_id"] ?></p>
                            <p>場次名稱：<?php echo $row["ses_name"] ?></p>
                            <p>場次開始時間：<?php echo $row["ses_start"] ?></p>
                            <p>場次結束時間：<?php echo $row["ses_end"] ?></p>
                            <p>地點：<?php echo $row["ses_location"] ?></p>
                            <p>已報名/總名額：<?php echo $row["ses_number"] ?></p>
                            <p>可報名者身份：<?php echo $row["ses_available"] ?></p>

                            
                            <?php
                                if ($_SESSION["user_identity"] == '教職員' or $_SESSION["user_identity"] ==  '校外人士' or $_SESSION["user_identity"] =='輔大學生') {
                                    $isRegistered = false; // 預設為未報名

                                    // 檢查帳號是否已經報名過這個活動，您可以根據實際情況替換成適當的程式碼
                                    $act_id = $_GET["act_id"]; // 從 URL 參數取得活動 ID
                                    $user_id = $_SESSION["user_id"]; // 從 Session 取得使用者 ID
                                    $list_id = $_SESSION["list_id"];

                                    // 假設您已經有一個名為 $link 的資料庫連線物件
                                    $query = "SELECT * FROM list WHERE act_id = '$act_id' AND user_id = '$user_id'";
                                    $result = mysqli_query($link, $query);
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        $isRegistered = true; // 已報名
                                        $row = mysqli_fetch_assoc($result); // 從結果集中獲取一行資料，存儲到 $row 中
                                        ?>
                                        <a class="btn btn-danger rounded-pill py-1 px-2" href="取消報名.php?list_id=<?php echo $row["list_id"] ?>&act_id=<?php echo $row["act_id"] ?>">取消報名</a>
                                        
                                        <?php
                                    }

                                    if (!$isRegistered) {
                                        // 使用者未報名過，顯示報名按鈕
                                        ?>
                                        <a class="btn btn-primary rounded-pill py-1 px-2" href="報名表單.php?ses_id=<?php echo $row["ses_id"] ?>&act_id=<?php echo $row["act_id"] ?>&act_name=<?php echo $row["act_name"] ?>">我要報名</a>
                                        <?php
                                    }
                                }
                            ?>

                            <?php if ($_SESSION["user_identity"] == '教職員') { ?>
                                <div class="col-6">
                                    <button class="btn btn-primary rounded-pill py-1 px-2" onclick="location.href='報名名單.php?ses_id=<?php echo $row['ses_id'] ?>&act_id=<?php echo $row['act_id'] ?>'">報名名單</button>
                                </div>
                            <?php } ?>           
                        
                        </div>
                    </div>
                            
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- main-panel ends -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">F<span class="text-secondary">oo</span>dy</h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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