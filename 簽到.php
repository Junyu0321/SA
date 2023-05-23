<!DOCTYPE html>
<html lang="en">
<?php
include 'link.php';
?>
<head>
    <meta charset="utf-8">
    <title>Foody - Organic Food Website Template</title>
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
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="product.html" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="testimonial.html" class="dropdown-item active">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                    <form action="attend.php"  method="get"> 

                      <table class="table table-striped">
                        <button type="submit">提交</button>
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>學號</th>
                            <th>姓名</th>
                            <th>身分</th>
                            <th>系級</th>
                            <th>電子郵件</th>
                            <th colspan="2">簽到/簽退</th>
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
                                          $list_id = $row["list_id"];
                                          ?>
                                        
                                  <tr>
                                      <th scope="row"  width="10%"><?php echo $num;?></th>
                                      <td><?php echo $row["user_id"]?></td>
                                      <td><?php echo $row["user_name"]?></td>
                                      <td><?php echo $row["user_identity"]?></td>
                                      <td><?php echo $row["user_dep"]?></td>
                                      <td><?php echo $row["user_email"]?></td>
                                      <td>
                                      <div class="form-check">
                                              <input
                                                type="radio"
                                                class="form-check-input"
                                                name="<?php echo $list_id;?>"
                                                id="present"
                                                value="present"
                                                <?php
                                                if ($row["user_attend"] == 'present') {
                                                  echo "checked";
                                              }
                                               ?>
                                              /><label class="form-check-label">
                                              出席
                                            </label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                              <input
                                                type="radio"
                                                class="form-check-input"
                                                name="<?php echo $list_id;?>"
                                                id="absent"
                                                value="absent"
                                                <?php
                                                if ($row["user_attend"] == 'absent') {
                                                  echo "checked";
                                              }
                                               ?>
                                              />
                                              <label class="form-check-label">
                                              缺席
                                            </label>
                                          </div>
                                            <?php
                                            include 'link.php';
                                            $list_id = $row["list_id"];
                                            $user_attend = $row["user_attend"];
                                            if(isset($_GET["$list_id"])){
                                            $user_attend = $_GET["$list_id"];
                                            }
                                            else{
                                              $user_attend = $row["user_attend"];
                                            } 
                                              ?>
                                      </td>
                                      <td>
                                      <a href="reserve_cancel.php?number=<?php echo $row["list_id"]?>" class="genric-btn link-border circle small">刪除</a></td>
                          
                                  </tr>
                                  <?php 
                                  }
                                  ?>
                                  <p class="card-description">
                                  報名人數：<?php echo $num;?>
                                </p>
                                
                        </tbody>
                       
                      </table>
                      </form>  
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