<?php include("clg_header.php") ?>


<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ATMAS | GCT</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">

</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	ATMAS<br>
            	
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Official Student Attendance Management System of
                <br> Sri C Achuth Menon Government College, Thrissur
            </p>
            <a href="login.php" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Admin</a>&nbsp;
            <a href="principal_login.php" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Principal</a>&nbsp;
            <a href="teacher_login.php" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Teacher</a>&nbsp;
            <a href="student_login.php" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Student</a>&nbsp;
        </div>
    </div>
   
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
       2023 ATMAS
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="mailto:atmasgct@gmail.com" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>