<?php
include 'connection.php';
if(!isset($_SESSION['log_user_status']) && $_SESSION['log_user_status']!==true){
    header('location:login.php');
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hospital Managment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
     <style>
        body {
            background-color: #f8f9fa;
        }
        .prescription-pad {
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 25px;
            margin: 20px auto;
            max-width: 800px;
        }
        .prescription-header {
            border-bottom: 2px solid #007bff;
            margin-bottom: 20px;
            padding-bottom: 15px;
        }
        .hospital-logo {
            max-height: 80px;
        }
        .prescription-title {
            color: #007bff;
            font-weight: bold;
        }
        .patient-info {
            background-color: #f1f8ff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .medicine-table th {
            background-color: #007bff;
            color: white;
        }
        .doctor-signature {
            margin-top: 50px;
            border-top: 1px dashed #6c757d;
            padding-top: 10px;
        }
        .watermark {
            opacity: 0.1;
            position: absolute;
            z-index: -1;
            font-size: 80px;
            color: #007bff;
            transform: rotate(-30deg);
            left: 20%;
            top: 30%;
        }
        .prescription-footer {
            font-size: 12px;
            color: #6c757d;
            margin-top: 20px;
            border-top: 1px solid #dee2e6;
            padding-top: 10px;
        }
        .section-label {
           font-weight: bold;
           margin-bottom: 10px;
       }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">