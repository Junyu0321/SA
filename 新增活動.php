<!DOCTYPE html>
<html lang="en">
<?php
include 'link.php';
?>

<head>
    <meta charset="utf-8">
    <title>輔大活動管理系統</title>
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
                    
                    <a href="新增活動.php" class="nav-item nav-link fw-bold">新增活動</a>
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
            <h1 class="display-3 mb-3 animated slideInDown">新增活動</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">關於活動</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">新增活動</h1>
              
            </div>
         
                    <form  method="get" action="新增活動後端.php" >
                        <div class="row g-3 justify-content-center">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="act_presenter" name="act_presenter" placeholder="主講人" required>
                                    <label >主講人</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="act_name" name="act_name" placeholder="主題" required>
                                    <label >主題</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="act_signup" name="act_signup"     placeholder="主題" required>
                                    <label >開始報名時間</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="act_signdue" name="act_signdue" placeholder="主題" required>
                                    <label >結束報名時間</label>
                                </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="act_organizer" name="act_organizer" placeholder="主題">
                                    <label >承辦單位</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="act_coorganizer" name="act_coorganizer" placeholder="主題" required>
                                    <label >協辦單位</label>
                                </div>
                            </div>
                           
                          
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="act_fee" name="act_fee" placeholder="主題" required>
                                        <label >費用</label>
                                    </div>
                                </div>
                                <div class="col-md-12" >
                                    <label for="act_way">報名方式</label>
                                      <select class="form-control" id="act_way" name="act_way" required>
                                        <option>網路報名</option>
                                       
                                      </select>
                                </div>
                                <div class="col-md-12" >
                                    <label for="exampleSelectGender">學群</label>
                                      <select class="form-control" id="act_category" name="act_category" required>
                                        <option>藝文</option>
                                        <option>學術</option>
                                        <option>體育</option>
                                        <option>服務</option>
                                        <option>健康促進</option>
                                        <option>休閒娛樂</option>
                                        <option>自我成長</option>
                                        <option>校園文化</option>
                                      </select>
                                </div>
                                
                                    <div class="col-md-12" >
                                        <div group = >
                                            <label for="exampleSelectGender">報名狀態：</label>
                                            <select class="form-control" id="act_state" name="act_state" required>
                                                <option>尚未開放報名</option>
                                                <option>開放報名中</option>
                                                <option>已結束報名</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="act_people" name="act_people" placeholder="主題" required>
                                            <label >聯絡人員</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="act_contact" name="act_contact"placeholder="主題" required>
                                            <label >聯絡方式</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-floating">
                                        <div group = >
                                        <label for="ability">社會適應性能力</label>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type1" name="act_type1" value="問題分析與解決行為">
                                        <label for="option1">問題分析與解決行為</label>
                                    </div>
                                </div>
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type2" name="act_type2" value="創新能力">
                                        <label for="option2">創新能力</label>
                                    </div>
                                </div>
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type3" name="act_type3" value="溝通能力">
                                        <label for="option3">溝通能力</label>
                                    </div>
                                    </div>
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type4" name="act_type4" value="應變能力">
                                        <label for="option4">應變能力</label>
                                    </div>
                                </div>
                                    
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type5" name="act_type5" value="規劃能力">
                                        <label for="option5">規劃能力</label>
                                    </div>
                                </div>
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type6" name="act_type6" value="整合與善用資源能力">
                                        <label for="option6">整合與善用資源能力</label>
                                    </div>
                                </div>
                                    <div class="form-floating">
                                        <div group = >
                                        <input type="checkbox" id="act_type7" name="act_type7" value="團結合作能力">
                                        <label for="option7">團結合作能力</label>
                                    </div>
                                </div>
                                    <br>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="內容" id="act_detail" name="act_detail" style="height: 200px" required></textarea>
                                            <label >內容</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" id="myButton">提交</button>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
            
        
        <!-- <div id="myModal">
        <div id="popup-container">
            </div>
        </div>
        <div id="myPopup">
        <div class="row g-3 justify-content-center"> -->

            <!-- <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="hostname" placeholder="主講人">
                    <label for="hostname">活動id</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="hostname" placeholder="主講人">
                    <label for="hostname">場次id</label>
                </div>
            </div> -->

       
    </form>
   
</div>
</div>
</div>
</div>
    <!-- Contact End -->


 


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
                    <h4 class="text-light mb-4">地址</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">快速連結</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">新郵件</h4>
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