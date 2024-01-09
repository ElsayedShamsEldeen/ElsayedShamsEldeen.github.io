<?php
mysqli_report(MYSQLI_REPORT_OFF);
// connect to DB
include './includes/connect.php';
include './includes/form.php';

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

    <div class="patient-form w-75 mx-auto my-5">
        <h1 class="mb-3">ادخل بيانات المريض :</h1>
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <label class="label" for="name" style="color: black;">الاسم:</label>
            <input  class="form-control my-2" type="text" name="name">
            <label class="label" for="phone"  style="color: black;">الهاتف:</label>
            <input  class="form-control my-2" pattern="\d+" type="tel" name="phone">
            <label class="label" for="sex" style="color: black;">النوع:</label>
            <select class="form-control my-2 w-25 " name="sex" id="sex">
                <option value="ذكر">ذكر</option>
                <option value="انثي">انثي</option>
            </select>
            <br>
            <label class="label" for="age" style="color: black;">السن:</label>
            <input  class="form-control my-2" pattern="\d+" type="text" name="age">
            <label class="label" for="ref-doctor" style="color: black;">الطبيب:</label>
            <input  class="form-control my-2" type="text" name="doctor">
            <label class="label" for="date" style="color: black;">التاريخ:</label>
            <input  class="form-control my-2 w-25" type="date" name="date">
            <label class="label" for="img" style="color: black;">رفع النتيجة</label>
            <input class="form-control my-2 w-25" type="file" id="img" name="img" accept="image/*">
            <input class="submit form-control text-black " name="submit"  type="submit" value="تسجيل حالة جديدة" style="color: black;">
        </form>

    </div>
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