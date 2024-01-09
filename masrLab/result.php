<?php
mysqli_report(MYSQLI_REPORT_OFF);

// connect to DB
include './includes/connect.php';
include './includes/form.php';
include './includes/get-data.php';


?>







<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>MasrLab - مصر لاب</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

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
     <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex" dir="rtl" id="top">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>السنطة-برج هدهود-الدور الخامس</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>السبت الي الخميس من 9.30 ص حتي 8 م</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class=" fs-5 mx-3" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a class=" fs-5 " href="#"><i class="fab fa-instagram"></i></a>

                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid text-white pt-4 pb-5 d-none d-lg-flex bg-primary" dir="rtl">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">اتصل بنا</h5>
                        <span>01092390392</span>
                    </div>
                </div>
                <a href="index.html" class="h1 text-white mb-0">Masr<span class="" style="color: #e01f36 !important;">Lab</span> <img src="./img/logo-removebg-preview.png" class="w-25"> </a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">راسلنا</h5>
                        <span>elsayedshams3@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top " dir="rtl" >
        <div class="container" >
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3 " style="border-radius: 10px;box-shadow: 6px 7px 20px -4px rgba(94,91,91,0.75);">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0"><img src="./img/logo-removebg-preview.png" class="w-25"> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="./index.php" class="nav-item nav-link ">الرئيسية</a>
                        <a href="#about" class="nav-item nav-link">تعرف علينا</a>
                        <a href="#services" class="nav-item nav-link">الخدمات</a>
                        <div class="nav-item dropdown" >
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">اعرف اكثر!</a>
                            <div class="dropdown-menu bg-light m-0" dir="ltr">
                                <a href="#team" class="dropdown-item ms-auto">المالك و المؤسس</a>
                                <a href="#features" class="dropdown-item">المميزات</a>

                                <a href="#testimonial" class="dropdown-item">آراء عملاؤنا</a>


                            </div>
                        </div>
                        <a href="#contact" class="nav-item nav-link">اتصل بنا</a>
                    </div>
                    <div class="me-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Content Start -->
    <div class="container mt-4 d-flex justify-content-center" >
        <div class="row " dri="ltr">

            <div class="col-md-6 py-3 ">
                <div class="pt-3 d-flex flex-column justify-content-between  pe-5" style="background-color:#efefef; border-radius:10px; height: 434px;">
                <p  class="  " style="font-size: 17px;"><span style="font-size: 18px;  font-weight:bold">الاسم: </span><?php echo $data[0]["name"]; ?></p>
                <p class=" " style="font-size: 17px;"><span style="font-size: 18px;  font-weight:bold">الطبيب: </span><?php echo $data[0]['doctor']; ?></p>
                <p class=" " style="font-size: 17px;"><span style="font-size: 18px;  font-weight:bold">الهاتف: </span><?php echo $data[0]['phone']; ?></p>
                <p class=" " style="font-size: 17px;"><span style="font-size: 18px;  font-weight:bold">السن: </span><?php echo $data[0]['age']; ?></p>
                <p class=" " style="font-size: 17px;"><span style="font-size: 18px;  font-weight:bold">النوع: </span><?php echo $data[0]['sex']; ?></p>
                <p class=" " style="font-size: 17px;"><span style="font-size: 18px;  font-weight:bold">التاريخ: </span><?php echo $data[0]['date']; ?></p>
                </div>


            </div>
            <div class="col-md-6 py-3">
            <div class="  pt-3 d-flex justify-content-center" style="background-color:#efefef; border-radius:10px; padding-bottom: 31px;">
                <a href="<?php echo $data[0]['result']; ?>" class="d-flex justify-content-center">
                <img src="<?php echo $data[0]['result']; ?>" class="w-50 d-block" alt="">
                </a>
            </div>
            </div>


        </div>
    </div>
    <!-- Content end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>