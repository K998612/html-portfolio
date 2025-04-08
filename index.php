<?php 

include 'conn.php';

$sql= "SELECT * FROM users ";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0){

    $total= mysqli_num_rows($result);

}else{
    $total = 0  ;
}

//total withdrawn
$sql_qry1 = "SELECT SUM(moni) AS count FROM wbtc WHERE status = 'completed' ";
$duration1 = $link->query($sql_qry1);
while($record1 = $duration1->fetch_array()){
    $withdraw = $record1['count'];
}

//total invested
$sql_qry11 = "SELECT SUM(usd) AS countusd FROM investment ";
$duration11 = $link->query($sql_qry11);
while($record11 = $duration11->fetch_array()){
    $t_investt = $record11['countusd'];
}


$dayStarted = 0;


?>

<!doctype html>
<html lang="en">


<!-- Mirrored from Earn Mood/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 04:23:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta name="description" content="">
    <meta name="keywords" content="BITCOIN, INVESTMENT, ETHEREUM, BITCOIN COMPANY">
    <title>Earn Mood</title>
    <link rel="icon" type="image/png" href="public/em/assets/images/favicon.html" SIZES="16x16">
    <!-- Mobile Specific Metas ====================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- =========== CSS =========== -->
    <link rel="stylesheet" type="text/css" href="public/ona/css/custom.css">
    <link rel="stylesheet" type="text/css" href="public/ona/css/responsive.css">

    <!-- =========== fav-icon =========== -->
    <link rel="shortcut icon" href="public/ona/images/favicon.png">

</head>

<body id="page-top" class="homepage work-zoom one-page" data-spy="scroll">

    <!-- Loader Start -->
    <div class="se-pre-con">
        <div class="spinner">
            <div class="triple-spinner"></div>
        </div>
    </div>
    <!-- Loader End -->

    <div id="current" class="main">

        <!-- HEADER START -->
        <header class="navbar navbar-custom header" id="header">
            <div class="navbar-expand">
                <div class="container">
                    <div class="row m-0 align-items-center">
                        <div class="col-lg-3 col-6 left-sm p-0">
                            <div class="header-middle-left">
                                <div class="logo navbar-header float-none-sm">
                                    <a class="navbar-brand page-scroll" href="index.html">
                                        <img alt="Logo" src="logo/logo.png">
                                    </a>
                                    <div id="google_translate_element" style="background: black;border-radius: 10px;margin-top: 10px;margin-bottom: 11px;font-size: ;"></div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-1 p-0">
                            <div class="overlay"></div>
                            <div id="menu" class="navbar-collapse collapse justify-content-center">
                                <ul id="menu-main" class="nav navbar-nav">
                                    <li class="level">
                                        <a class="page-scroll" href="index.html">Home</a>
                                    </li>
                                    <li class="level">
                                        <a class="page-scroll" href="indexe47e.html?a=about">About</a>
                                    </li>
                                    <li class="level">
                                        <a class="page-scroll" href="index88fd.html?a=plans">Plan</a>
                                    </li>
                                    <li class="level">
                                        <a class="page-scroll" href="index38cd.html?a=faq">Question Guide</a>
                                    </li>
                                    <li class="level">
                                        <a class="page-scroll" href="index15a0.html?a=support">Contact</a>
                                    </li>
                                    <li class="level dropdown"> <span class="opener plus"></span>
                                        <a class="page-scroll" href="javascript:void(0)">Account</a>
                                        <div class="megamenu mobile-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <ul class="sub-menu-level1">
                                                    <li class="level2 ">
                                                        <ul class="sub-menu-level2">

                                                                                                    <li class="level3">
                                                                <a href="register.php"><span></span>Register</a>
                                                            </li>
                                                            <li class="level3">
                                                                <a href="login.php"><span></span>Login</a>
                                                            </li>
                                                            

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-5 p-0">
                            <div class="right-side header-right-link">
                                <ul>
                                    <li>
                                        <div class="signin d-none d-lg-block">
                                                                                        <a href="login.php" class="btn btn-color">Sign in</a>                                         </div>
                                    </li>
                                    <li class="side-toggle">
                                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        <!-- BANNER STRAT -->
        <section class="home-banner banner-bg" style="margin-top: 50px; margin-bottom: -35px">
            <div class="background-shape">
                <svg class="shape_1" width="400" height="232" xmlns="http://www.w3.org/2000/svg" viewBox="1200 386 698 405" fill="#4e11be">
                    <path d="M1242,624l188-204l468,371h-445L1242,624z" />
                    <path d="M1339 386c76.8 0 139 62.2 139 139s-62.2 139-139 139-139-62.2-139-139 62.2-139 139-139z" />
                </svg>
                <svg class="shape_2" width="150" height="150" xmlns="http://www.w3.org/2000/svg" viewBox="223 105 100 100">
                    <path fill="#4e11be" d="M273 105c27.6 0 50 22.4 50 50s-22.4 50-50 50-50-22.4-50-50 22.4-50 50-50z" />
                </svg>
                <svg class="shape_3" width="350" height="350" xmlns="http://www.w3.org/2000/svg" viewBox="844 111 601 604">
                    <path fill="#4e11be" d="M1175.9,111L1445,456.9L1113.1,715L844,369.1L1175.9,111z" />
                </svg>
            </div>
            <div class="banner">
                <div class="banner-inner d-lg-flex align-items-center">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 col-sm-10 col-12 offset-lg-0 offset-sm-1 wow animate__fadeInRight animate__animated" data-wow-duration="2s">
                                <div class="banner-img">
                                    <img src="public/ona/images/banner-img.png" alt="Earn Mood">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-detail">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="banner-detail-inner slider-animation">
                                    <span class="slogan wow animate__fadeInLeft animate__animated animate__delay-1s">The Best
                                        Investment Company Ever!</span>
                                    <h1 class="banner-title  wow animate__fadeInLeft animate__animated animate__delay-1_5s">
                                        Earn Mood <br><span>INVESTMENT COMPANY</span></h1>
                                    <p class=" wow animate__fadeInLeft animate__animated animate__delay-2s">Start earning
                                        everyday with the Earn Mood as your choice of daily profit generation
                                        company. We are always the best alternative in generating a daily income when it come to
                                        investment company.</p>
                                    <a class="btn btn-color wow animate__fadeInLeft animate__animated animate__delay-2_5s" href="register.php">Register
                                        <i class="fa fa-users"></i>
                                    </a>

                                    <a class="btn btn-color wow animate__fadeInLeft animate__animated animate__delay-2_5s" href="login.php">Login
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                            <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BANNER END -->

        <!-- CONTAIN START -->

        <!-- about-part Start -->
        <section id="about" class="light-bg">
            <div class="ptb-100 about-section bg-position">
                <div class="background-shape">
                    <svg class="shape_4 rotation" width="200" height="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.7 28.3" fill="#4e11be">
                        <path d="M24.7 5.9c-3.3-4.7-9.3-7-15.1-5.5-2.2.7-4.2 1.7-5.8 3.2l20.9 2.3zM0 19.3c2.6 6.6 9.8 10.4 16.8 8.5 3.4-.9 6.1-2.9 8-5.5L0 19.3z" />
                    </svg>
                    <svg class="shape_5" width="386" height="321" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 149.9 124.7" fill="#4e11be">
                        <path d="M62.4 124.7L0 62.4 62.4 0l62.4 62.4-.2.2-62.2 62.1zM.8 62.4l61.5 61.5 61.5-61.5L62.4.8.8 62.4z" />
                        <path d="M109.4 102.2L68.9 61.7l40.5-40.5 40.5 40.5-40.5 40.5zM69.8 61.7l39.6 39.6L149 61.7l-39.6-39.6-39.6 39.6z" />
                    </svg>
                    <svg class="shape_6" width="300" height="609.9" xmlns="http://www.w3.org/2000/svg" overflow="visible">
                        <style>
                            .geo-arrow {
                                fill: none;
                                stroke: #614cfb;
                                stroke-width: 2;
                                stroke-miterlimit: 10
                            }

                        </style>
                        <g class="item-to bounce-1">
                            <path class="geo-arrow draw-in" d="M135.06 142.564L267.995 275.5 135.06 408.434 2.125 275.499z">
                            </path>
                        </g>
                    </svg>
                    <svg class="shape_7" width="300" height="609.9" xmlns="http://www.w3.org/2000/svg" overflow="visible">
                        <style>
                            .geo-arrow {
                                fill: none;
                                stroke: #614cfb;
                                stroke-width: 2;
                                stroke-miterlimit: 10
                            }

                        </style>
                        <g class="item-to bounce-1">
                            <path class="geo-arrow draw-in" d="M135.06 142.564L267.995 275.5 135.06 408.434 2.125 275.499z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="container">
                    <div class="about-part">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5 mb-sm-30 center-sm">
                                <div class="about-img  wow animate__fadeInLeft animate__animated" data-wow-duration="2s">
                                    <img src="public/ona/images/about-img.svg" alt="Earn Mood ">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7 offset-lg-1 h-100 my-auto">
                                <div class="wow animate__fadeInRight animate__animated" data-wow-duration="2s">
                                    <div class="heading-part text-left">
                                        <h6 class="heading-sub-title title-line">WHAT IS Earn Mood ABOUT</h6>
                                        <h5 class="main_title heading">We’ve built a platform for our investors to be able to
                                            get on with there daily activities without having to worry as we take care of
                                            everything.</h5>
                                    </div>
                                    <div class="about-info mb-30">
                                        <p class="mb-10">Our mission is to provide our clients with wide-ranging and
                                            best-in-class financial services, and to become the primary firm of choice for
                                            aspiring investors across the World. </p>
                                        <p class="m-0">Our employees act as true owners of the firm, constantly
                                            striving to achieve the best possible result in whatever we do.</p>
                                    </div>
                                    <a class="btn btn-color read-more" href="indexe47e.html?a=about">Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                            <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-part End -->
        

        <section id="feature" class="dark-bg bg-pattern">
            <div class="ptb-100">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-12 p-0 mb-40 wow animate__fadeInUp animate__animated">
                            <div class="heading-part align-center">
                                <h6 class="heading-sub-title title-line">Earn Mood</h6>
                                <h2 class="main_title heading mb-15">Statistics</h2>
                                <p class="heading-des"> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-part mb_-30">
                                <div id="feature-part">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12" data-wow-delay="0.2s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="196.1 226.5 50 58" fill="#0ab1e8">
                                                                <path d="M232.8 255c2.8-3.9 4.2-8.6 4.2-13.4v-10.7c0-.5-.4-1-.9-1.1l-14.6-3.3h-.5l-14.6 3.3c-.5.1-.9.6-.9 1.1v10.7c0 4.8 1.5 9.5 4.2 13.4 2.8 3.9 6.6 6.9 11.2 8.6.1 0 .3.1.4.1s.3 0 .4-.1c4.5-1.7 8.3-4.6 11.1-8.6zm-11.5 6.3c-3.9-1.5-7.3-4.1-9.7-7.6-2.5-3.6-3.8-7.7-3.8-12.1v-9.8l13.5-3 13.5 3v9.8c0 4.4-1.3 8.5-3.8 12.1-2.5 3.5-5.8 6.1-9.7 7.6zm11.5-27c0-.5-.4-1-.9-1.1l-10.4-2.3h-.5l-10.4 2.3c-.6.1-1 .7-.9 1.4.1.6.7 1 1.4.9l10.2-2.3 9.3 2.1v6.5c0 3.5-1.1 6.8-3.1 9.7-1.6 2.3-3.8 4.2-6.2 5.4-2.5-1.2-4.6-3.1-6.2-5.4-1.7-2.5-2.8-5.4-3-8.3v-.8c0-.6-.5-1.1-1.2-1.1-.6 0-1.1.5-1.1 1.2v.9c.3 3.4 1.4 6.7 3.4 9.5 1.9 2.8 4.6 5 7.6 6.4a.9.9 0 0 0 .5.1c.2 0 .3 0 .5-.1a18.19 18.19 0 0 0 7.6-6.4c2.3-3.2 3.5-7 3.5-11l-.1-7.6zM218 247.5c.2.2.5.4.8.4h.1c.3 0 .6-.1.8-.3l8.2-7.4c.5-.4.5-1.1.1-1.6s-1.1-.5-1.6-.1l-7.3 6.6-2.1-2.5c-.4-.5-1.1-.5-1.6-.1s-.5 1.1-.1 1.6l2.7 3.4zm-6.3 16.5c-.6-.8-1.5-1.3-2.4-1.4-1-.1-1.9.1-2.7.8-.4.3-.7.6-.9 1l-.3-.4c-.3-.4-.5-.9-.5-1.3v-10.2a3.8 3.8 0 0 0-3.8-3.8c-2 0-3.6 1.5-3.8 3.4l-1.2 12.8a4.37 4.37 0 0 0 .9 3.1l9.6 12.5v2.9a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-3.3c0-.2-.1-.5-.2-.7l-9.9-12.8c-.3-.4-.5-1-.4-1.5l1.2-12.8c.1-.8.7-1.4 1.5-1.4a1.54 1.54 0 0 1 1.5 1.5v10.2c0 1 .3 2 .9 2.7l2.4 3.1 1.9 2.5c.4.5 1.1.6 1.6.2s.6-1.1.2-1.6l-1.9-2.5c-.4-.6-.3-1.4.2-1.9a1.93 1.93 0 0 1 1-.3c.4 0 .7.2.9.5l4.6 6c.9 1.2 1.4 2.7 1.4 4.1v7.9a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-7.9c0-2-.7-3.9-1.9-5.5l-4.3-5.9zm34.4.8l-1.2-12.8c-.2-2-1.8-3.4-3.8-3.4a3.8 3.8 0 0 0-3.8 3.8v10.2c0 .5-.2 1-.5 1.3l-.3.4c-.2-.4-.5-.7-.9-1-.8-.6-1.7-.9-2.7-.8s-1.8.6-2.4 1.4l-4.6 6c-1.2 1.6-1.9 3.5-1.9 5.5v7.9a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-7.9c0-1.5.5-3 1.4-4.1l4.6-6c.2-.3.6-.5.9-.5a1.69 1.69 0 0 1 1 .3c.6.5.7 1.3.2 1.9l-1.9 2.5c-.4.5-.3 1.2.2 1.6s1.2.3 1.6-.2l1.9-2.5 2.4-3.1c.6-.8.9-1.7.9-2.7v-10.2a1.54 1.54 0 0 1 1.5-1.5c.8 0 1.4.6 1.5 1.4l1.2 12.8c.1.6-.1 1.1-.4 1.5l-9.9 12.8c-.2.2-.2.4-.2.7v3.3a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-2.9l9.6-12.5c1-1 1.3-2.1 1.2-3.2zm-35.9-25.6c.4.3.9.2 1.3 0 .4-.3.5-.8.4-1.2-.1-.5-.5-.8-1-.8s-.9.3-1.1.7 0 1 .4 1.3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title">94days</h3>
                                                            <h3 class="feature-title bottom-title-line">Days since started</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.4s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="199 214.5 50 54" fill="#0ab1e8">
                                                                <path d="M220.7 226.7c.3 0 .5-.1.7-.4.2-.2.2-.5.1-.8-.6-2.2-1.7-4.2-3.2-5.9-1.2-1.3-3-1.8-4.7-1.4-.2.1-.4.3-.5.5 0 .1-.1.3-.1.4v.5c0 1.4.6 2.8 1.6 3.8 1.7 1.5 3.7 2.6 5.9 3.2 0 .1.1.1.2.1zm-4.9-4.5c-.4-.4-.6-.8-.8-1.2h0c0-.1-.1-.2-.1-.3v-.4c0-.1 0-.3-.1-.4.9.1 1.7.4 2.3 1.1.9 1 1.6 2.2 2.1 3.4-1.2-.6-2.4-1.3-3.4-2.2h0zm32.3 5.2h-13.8a11.51 11.51 0 0 0 1.7-1.4c3.2-3.2 3.3-8.1 1.3-10.1s-6.9-1.9-10.1 1.3c-1.3 1.4-2.4 3.1-3.2 4.8-.8-1.8-1.8-3.4-3.2-4.8-3.2-3.2-8.1-3.3-10.1-1.3s-1.9 6.9 1.3 10.1a11.51 11.51 0 0 0 1.7 1.4h-13.8c-.5 0-.9.4-.9.9v8.9c0 .5.4.9.9.9h1.8V264a4.48 4.48 0 0 0 4.5 4.5h35.7a4.48 4.48 0 0 0 4.5-4.5v-25.9h1.8c.5 0 .9-.4.9-.9v-8.9c-.1-.5-.5-.9-1-.9zm-19.7-9c2.6-2.6 6.3-2.5 7.6-1.3 1.3 1.3 1.3 5-1.3 7.6-1.2 1.1-2.5 2-4 2.6h-5.3v-.9c0-.2 0-.3-.1-.5v-.2c0-.2-.1-.4-.1-.7v-.1c0-.2-.1-.4-.1-.5v-.1c.6-2.1 1.8-4.2 3.3-5.9zm-.8 17.9h-7.1v-7.2h7.1v7.2zm-14.3-11.6c-2.6-2.6-2.5-6.3-1.3-7.6 1.3-1.3 5-1.3 7.6 1.3 1.6 1.8 2.8 4 3.6 6.3l.3.9c0 .1 0 .2.1.2 0 .2.1.4.1.6v.9h-6.4c-1.5-.6-2.9-1.5-4-2.6zm-12.5 4.4h17.9v7.2h-17.9v-7.2zm2.7 34.9v-25.9h17v28.6h-14.3a2.69 2.69 0 0 1-2.7-2.7zm18.7 2.7v-28.6h3.6v28.6h-3.6zm22.3-2.7a2.69 2.69 0 0 1-2.7 2.7h-14.3v-28.6h17V264zm2.7-27.7h-17.9v-7.2h17.9v7.2zm-19.9-9.6h.3a13.85 13.85 0 0 0 5.9-3.3c1.3-1.2 1.8-3 1.4-4.7-.1-.2-.3-.4-.5-.5-1.7-.4-3.5.2-4.7 1.4-1.5 1.7-2.6 3.7-3.2 5.9-.1.3 0 .6.1.8.2.3.4.4.7.4zm3.7-5.8c.6-.6 1.5-1 2.3-1.1-.1.9-.4 1.7-1.1 2.3-1 .9-2.2 1.6-3.4 2.1.5-1.1 1.3-2.3 2.2-3.3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <!--<h3 class="feature-title"><?php echo $total ?></h3>-->
                                                            <h3 class="feature-title">2,345</h3>
                                                            <h3 class="feature-title bottom-title-line">User's Account</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.6s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="231 229 50 54" fill="#0ab1e8">
                                                                <path d="M231.8 268.6c.4 0 .8-.4.8-.8v-32.1c0-2.8 2.3-5.1 5.1-5.1h13.1c2.8 0 5.1 2.3 5.1 5.1v1.7c0 .4.4.8.8.8s.8-.4.8-.8v-1.7a6.7 6.7 0 0 0-6.7-6.7h-13.1a6.7 6.7 0 0 0-6.7 6.7v32.1c0 .5.4.8.8.8h0zm16 12.8h-10.1c-2.8 0-5.1-2.3-5.1-5.1v-5.1c0-.4-.4-.8-.8-.8s-.8.4-.8.8v5.1a6.7 6.7 0 0 0 6.7 6.7h10.1c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h0zm8.1-32v7.1c0 .4.4.8.8.8s.8-.4.8-.8v-7.1c0-.4-.4-.8-.8-.8s-.8.4-.8.8h0zm-18.2 6.3h13.1c.7 0 1.4.5 1.6 1.1.1.4.6.6 1 .5s.6-.6.5-1c-.5-1.3-1.7-2.2-3.1-2.2h-13.1a3.33 3.33 0 0 0-3.3 3.3v18.9a3.33 3.33 0 0 0 3.3 3.3h8.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-8.8c-1 0-1.7-.8-1.7-1.7v-13.8h10.3c.4 0 .8-.4.8-.8s-.4-.8-.8-.8H236v-3.6c0-.8.7-1.6 1.7-1.6zm1.7-12.3c0 2.7 2.2 4.8 4.8 4.8 2.7 0 4.8-2.2 4.8-4.8s-2.2-4.8-4.8-4.8-4.8 2.2-4.8 4.8zm8.1 0c0 1.8-1.5 3.2-3.2 3.2-1.8 0-3.2-1.5-3.2-3.2s1.5-3.2 3.2-3.2 3.2 1.4 3.2 3.2zm-3.2-8.7a8.71 8.71 0 0 0-8.7 8.7 8.71 8.71 0 0 0 8.7 8.7c3.3 0 6.3-1.9 7.8-4.8l16.7-.9c.9-.1 1.7-.8 1.7-1.8v-2.4c0-.9-.7-1.7-1.7-1.8l-5.1-.3c-.4 0-.8.3-.8.7s.3.8.7.8l5.1.3c.1 0 .2.1.2.2v2.4c0 .1-.1.2-.2.2l-17.1 1c-.3 0-.6.2-.7.5-1.1 2.6-3.7 4.3-6.5 4.3a7.13 7.13 0 0 1-7.1-7.1 7.13 7.13 0 0 1 7.1-7.1c2.8 0 5.4 1.7 6.5 4.3.1.3.4.5.7.5l8.6.5c.4 0 .8-.3.8-.7s-.3-.8-.7-.8l-8.1-.5c-1.6-3-4.6-4.9-7.9-4.9h0zm31.6 24.2H273c-.4 0-.8.4-.8.8s.4.8.8.8h2.9c1.9 0 3.5 1.6 3.5 3.5v7.5h-9c-.4 0-.8.4-.8.8s.4.8.8.8h9v2.1H270c-.4 0-.8.4-.8.8s.4.8.8.8h9.4v1.3c0 1.9-1.6 3.5-3.5 3.5h-22.1c-1.9 0-3.5-1.6-3.5-3.5v-1.3h9.4c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-9.4V273h9c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-9v-7.5c0-1.9 1.6-3.5 3.5-3.5h15.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-15.8c-2.8 0-5.1 2.3-5.1 5v14c0 2.8 2.3 5 5.1 5h22.1c2.8 0 5.1-2.3 5.1-5v-14c0-2.6-2.3-4.9-5.1-4.9zm-11 10.8c-1.7 0-3.2 1.4-3.2 3.1 0 .8.3 1.6.8 2.1l-.4 1.4c-.2.5-.1 1 .2 1.5.3.4.8.7 1.3.7h2.4c.5 0 1-.3 1.3-.7s.4-1 .2-1.5l-.4-1.4c.5-.6.8-1.3.8-2.1.2-1.7-1.3-3.1-3-3.1h0zm.7 5.3l.6 1.8h-2.4l.6-1.8c.1-.3 0-.7-.3-.9-.4-.3-.6-.8-.6-1.3a1.6 1.6 0 1 1 3.2 0c0 .5-.2 1-.6 1.3-.5.2-.6.6-.5.9h0zm-10.1-12.2a3.12 3.12 0 0 0-3.1 3.1 3.12 3.12 0 0 0 3.1 3.1h1.5a3.12 3.12 0 0 0 3.1-3.1 3.12 3.12 0 0 0-3.1-3.1h-1.5zm3.1 3.1a1.58 1.58 0 0 1-1.6 1.6h-1.5a1.6 1.6 0 1 1 0-3.2h1.5c.9.1 1.6.8 1.6 1.6zm5.7.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-1.7c-.4 0-.8.4-.8.8s.4.8.8.8h1.7zm13.4-.8c0-.4-.4-.8-.8-.8h-9.7c-.4 0-.8.4-.8.8s.4.8.8.8h9.7c.5 0 .8-.3.8-.8zm-14.8-16.1c-.4-.2-.9-.1-1.1.3l-1.5 2.7c-.2.4-.1.9.3 1.1.1.1.3.1.4.1.3 0 .6-.1.7-.4l1.5-2.7c.3-.4.1-.9-.3-1.1h0zm.3 6.9h2.6c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-2.6c-.4 0-.8.4-.8.8 0 .5.4.8.8.8z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <!--<h3 class="feature-title">$<?php echo number_format($t_investt,2) ?></h3>-->
                                                            <h3 class="feature-title">$53,345</h3>
                                                            <h3 class="feature-title bottom-title-line">Total Invested</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.8s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="228 231 56 50" fill="#0ab1e8">
                                                                <path d="M277.5 244.5c-.4-3.6-2.1-6.9-4.7-9.4-2.8-2.7-6.5-4.1-10.4-4.1-5.7 0-10.9 3.1-13.5 8.1-1.5-1-3.3-1.6-5.2-1.6-4.2 0-7.9 2.8-9 6.9-4.1 1.6-6.7 5.6-6.7 10 0 5.9 4.8 10.7 10.8 10.7h2.3c.7 2.8 1.9 5.5 3.6 7.9 2.8 3.8 6.5 6.6 11 8 .1 0 .2.1.3.1s.2 0 .3-.1c4.4-1.5 8.2-4.2 11-8 1.7-2.4 3-5.1 3.6-7.9h2.3c5.9 0 10.8-4.8 10.8-10.7 0-4.3-2.6-8.2-6.5-9.9h0zM256 278.8c-8-2.8-13.3-10.3-13.3-18.8v-8c4.6-.5 9.1-1.8 13.3-3.7 4.2 1.9 8.7 3.1 13.3 3.7v8c0 8.5-5.3 16-13.3 18.8h0zm17.2-15.9h-1.9c.1-1 .2-1.9.2-2.9v-9c0-.6-.4-1-1-1.1-4.9-.5-9.7-1.7-14.1-3.8-.3-.1-.6-.1-.9 0-4.4 2.1-9.2 3.3-14.1 3.8-.6.1-1 .5-1 1.1v9c0 1 .1 1.9.2 2.9h-1.9c-4.7 0-8.6-3.8-8.6-8.6 0-3.7 2.3-6.9 5.8-8.1.4-.1.6-.4.7-.8.7-3.3 3.6-5.7 7-5.7 1.8 0 3.5.7 4.9 1.9a1.69 1.69 0 0 0 1 .3c.4-.1.6-.3.8-.6 2-4.9 6.8-8 12.1-8 6.8 0 12.6 5.3 13 12.1 0 .4.3.8.7 1 3.4 1.2 5.7 4.5 5.7 8 0 4.6-3.8 8.5-8.6 8.5h0zm-12.4-3.6h-.1v-1.2c0-2.6-2.1-4.7-4.7-4.7s-4.7 2.1-4.7 4.7v1.2h-.1c-1.1 0-1.9.9-1.9 1.9v7.7c0 1.1.9 1.9 1.9 1.9h9.7c1.1 0 1.9-.9 1.9-1.9v-7.7c0-1-.9-1.9-2-1.9zm-7.3 0v-1.2c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v1.2h-5zm3.7 6.2v2.2h-2.4v-2.2c-.3-.3-.5-.8-.5-1.3 0-1 .8-1.7 1.8-1.7s1.8.8 1.8 1.7c-.1.6-.3 1-.7 1.3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title">$47,234</h3>
                                                            <h3 class="feature-title bottom-title-line">Total Withdrawn</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Best Features Start -->
        <section id="feature" class="dark-bg bg-pattern">
            <div class="ptb-100">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-12 p-0 mb-40 wow animate__fadeInUp animate__animated">
                            <div class="heading-part align-center">
                                <h6 class="heading-sub-title title-line">globaltrade-elites.com Feature</h6>
                                <h2 class="main_title heading mb-15">Most Reliabe Investment Company</h2>
                                <p class="heading-des">We are the pride of an investment company that really deliver to our
                                    investors with ease. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-part mb_-30">
                                <div id="feature-part">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.2s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="196.1 226.5 50 58" fill="#0ab1e8">
                                                                <path d="M232.8 255c2.8-3.9 4.2-8.6 4.2-13.4v-10.7c0-.5-.4-1-.9-1.1l-14.6-3.3h-.5l-14.6 3.3c-.5.1-.9.6-.9 1.1v10.7c0 4.8 1.5 9.5 4.2 13.4 2.8 3.9 6.6 6.9 11.2 8.6.1 0 .3.1.4.1s.3 0 .4-.1c4.5-1.7 8.3-4.6 11.1-8.6zm-11.5 6.3c-3.9-1.5-7.3-4.1-9.7-7.6-2.5-3.6-3.8-7.7-3.8-12.1v-9.8l13.5-3 13.5 3v9.8c0 4.4-1.3 8.5-3.8 12.1-2.5 3.5-5.8 6.1-9.7 7.6zm11.5-27c0-.5-.4-1-.9-1.1l-10.4-2.3h-.5l-10.4 2.3c-.6.1-1 .7-.9 1.4.1.6.7 1 1.4.9l10.2-2.3 9.3 2.1v6.5c0 3.5-1.1 6.8-3.1 9.7-1.6 2.3-3.8 4.2-6.2 5.4-2.5-1.2-4.6-3.1-6.2-5.4-1.7-2.5-2.8-5.4-3-8.3v-.8c0-.6-.5-1.1-1.2-1.1-.6 0-1.1.5-1.1 1.2v.9c.3 3.4 1.4 6.7 3.4 9.5 1.9 2.8 4.6 5 7.6 6.4a.9.9 0 0 0 .5.1c.2 0 .3 0 .5-.1a18.19 18.19 0 0 0 7.6-6.4c2.3-3.2 3.5-7 3.5-11l-.1-7.6zM218 247.5c.2.2.5.4.8.4h.1c.3 0 .6-.1.8-.3l8.2-7.4c.5-.4.5-1.1.1-1.6s-1.1-.5-1.6-.1l-7.3 6.6-2.1-2.5c-.4-.5-1.1-.5-1.6-.1s-.5 1.1-.1 1.6l2.7 3.4zm-6.3 16.5c-.6-.8-1.5-1.3-2.4-1.4-1-.1-1.9.1-2.7.8-.4.3-.7.6-.9 1l-.3-.4c-.3-.4-.5-.9-.5-1.3v-10.2a3.8 3.8 0 0 0-3.8-3.8c-2 0-3.6 1.5-3.8 3.4l-1.2 12.8a4.37 4.37 0 0 0 .9 3.1l9.6 12.5v2.9a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-3.3c0-.2-.1-.5-.2-.7l-9.9-12.8c-.3-.4-.5-1-.4-1.5l1.2-12.8c.1-.8.7-1.4 1.5-1.4a1.54 1.54 0 0 1 1.5 1.5v10.2c0 1 .3 2 .9 2.7l2.4 3.1 1.9 2.5c.4.5 1.1.6 1.6.2s.6-1.1.2-1.6l-1.9-2.5c-.4-.6-.3-1.4.2-1.9a1.93 1.93 0 0 1 1-.3c.4 0 .7.2.9.5l4.6 6c.9 1.2 1.4 2.7 1.4 4.1v7.9a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-7.9c0-2-.7-3.9-1.9-5.5l-4.3-5.9zm34.4.8l-1.2-12.8c-.2-2-1.8-3.4-3.8-3.4a3.8 3.8 0 0 0-3.8 3.8v10.2c0 .5-.2 1-.5 1.3l-.3.4c-.2-.4-.5-.7-.9-1-.8-.6-1.7-.9-2.7-.8s-1.8.6-2.4 1.4l-4.6 6c-1.2 1.6-1.9 3.5-1.9 5.5v7.9a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-7.9c0-1.5.5-3 1.4-4.1l4.6-6c.2-.3.6-.5.9-.5a1.69 1.69 0 0 1 1 .3c.6.5.7 1.3.2 1.9l-1.9 2.5c-.4.5-.3 1.2.2 1.6s1.2.3 1.6-.2l1.9-2.5 2.4-3.1c.6-.8.9-1.7.9-2.7v-10.2a1.54 1.54 0 0 1 1.5-1.5c.8 0 1.4.6 1.5 1.4l1.2 12.8c.1.6-.1 1.1-.4 1.5l-9.9 12.8c-.2.2-.2.4-.2.7v3.3a1.11 1.11 0 0 0 1.1 1.1 1.11 1.11 0 0 0 1.1-1.1v-2.9l9.6-12.5c1-1 1.3-2.1 1.2-3.2zm-35.9-25.6c.4.3.9.2 1.3 0 .4-.3.5-.8.4-1.2-.1-.5-.5-.8-1-.8s-.9.3-1.1.7 0 1 .4 1.3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title bottom-title-line">Safe & Secure</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backend">
                                                        <div class="features-details">
                                                            <p class="feature-des m-0">We are the best investment company that
                                                                safeguard our clients resources with the best security ever
                                                                know.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.4s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="199 214.5 50 54" fill="#0ab1e8">
                                                                <path d="M220.7 226.7c.3 0 .5-.1.7-.4.2-.2.2-.5.1-.8-.6-2.2-1.7-4.2-3.2-5.9-1.2-1.3-3-1.8-4.7-1.4-.2.1-.4.3-.5.5 0 .1-.1.3-.1.4v.5c0 1.4.6 2.8 1.6 3.8 1.7 1.5 3.7 2.6 5.9 3.2 0 .1.1.1.2.1zm-4.9-4.5c-.4-.4-.6-.8-.8-1.2h0c0-.1-.1-.2-.1-.3v-.4c0-.1 0-.3-.1-.4.9.1 1.7.4 2.3 1.1.9 1 1.6 2.2 2.1 3.4-1.2-.6-2.4-1.3-3.4-2.2h0zm32.3 5.2h-13.8a11.51 11.51 0 0 0 1.7-1.4c3.2-3.2 3.3-8.1 1.3-10.1s-6.9-1.9-10.1 1.3c-1.3 1.4-2.4 3.1-3.2 4.8-.8-1.8-1.8-3.4-3.2-4.8-3.2-3.2-8.1-3.3-10.1-1.3s-1.9 6.9 1.3 10.1a11.51 11.51 0 0 0 1.7 1.4h-13.8c-.5 0-.9.4-.9.9v8.9c0 .5.4.9.9.9h1.8V264a4.48 4.48 0 0 0 4.5 4.5h35.7a4.48 4.48 0 0 0 4.5-4.5v-25.9h1.8c.5 0 .9-.4.9-.9v-8.9c-.1-.5-.5-.9-1-.9zm-19.7-9c2.6-2.6 6.3-2.5 7.6-1.3 1.3 1.3 1.3 5-1.3 7.6-1.2 1.1-2.5 2-4 2.6h-5.3v-.9c0-.2 0-.3-.1-.5v-.2c0-.2-.1-.4-.1-.7v-.1c0-.2-.1-.4-.1-.5v-.1c.6-2.1 1.8-4.2 3.3-5.9zm-.8 17.9h-7.1v-7.2h7.1v7.2zm-14.3-11.6c-2.6-2.6-2.5-6.3-1.3-7.6 1.3-1.3 5-1.3 7.6 1.3 1.6 1.8 2.8 4 3.6 6.3l.3.9c0 .1 0 .2.1.2 0 .2.1.4.1.6v.9h-6.4c-1.5-.6-2.9-1.5-4-2.6zm-12.5 4.4h17.9v7.2h-17.9v-7.2zm2.7 34.9v-25.9h17v28.6h-14.3a2.69 2.69 0 0 1-2.7-2.7zm18.7 2.7v-28.6h3.6v28.6h-3.6zm22.3-2.7a2.69 2.69 0 0 1-2.7 2.7h-14.3v-28.6h17V264zm2.7-27.7h-17.9v-7.2h17.9v7.2zm-19.9-9.6h.3a13.85 13.85 0 0 0 5.9-3.3c1.3-1.2 1.8-3 1.4-4.7-.1-.2-.3-.4-.5-.5-1.7-.4-3.5.2-4.7 1.4-1.5 1.7-2.6 3.7-3.2 5.9-.1.3 0 .6.1.8.2.3.4.4.7.4zm3.7-5.8c.6-.6 1.5-1 2.3-1.1-.1.9-.4 1.7-1.1 2.3-1 .9-2.2 1.6-3.4 2.1.5-1.1 1.3-2.3 2.2-3.3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title bottom-title-line">Referral Bonus</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backend">
                                                        <div class="features-details">
                                                            <p class="feature-des m-0">We give the best referral bonus to our
                                                                investors to appreciate them in introucing family and friends to
                                                                globaltrade-elites.com and also to encourage them in investing
                                                                more.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.6s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="231 229 50 54" fill="#0ab1e8">
                                                                <path d="M231.8 268.6c.4 0 .8-.4.8-.8v-32.1c0-2.8 2.3-5.1 5.1-5.1h13.1c2.8 0 5.1 2.3 5.1 5.1v1.7c0 .4.4.8.8.8s.8-.4.8-.8v-1.7a6.7 6.7 0 0 0-6.7-6.7h-13.1a6.7 6.7 0 0 0-6.7 6.7v32.1c0 .5.4.8.8.8h0zm16 12.8h-10.1c-2.8 0-5.1-2.3-5.1-5.1v-5.1c0-.4-.4-.8-.8-.8s-.8.4-.8.8v5.1a6.7 6.7 0 0 0 6.7 6.7h10.1c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h0zm8.1-32v7.1c0 .4.4.8.8.8s.8-.4.8-.8v-7.1c0-.4-.4-.8-.8-.8s-.8.4-.8.8h0zm-18.2 6.3h13.1c.7 0 1.4.5 1.6 1.1.1.4.6.6 1 .5s.6-.6.5-1c-.5-1.3-1.7-2.2-3.1-2.2h-13.1a3.33 3.33 0 0 0-3.3 3.3v18.9a3.33 3.33 0 0 0 3.3 3.3h8.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-8.8c-1 0-1.7-.8-1.7-1.7v-13.8h10.3c.4 0 .8-.4.8-.8s-.4-.8-.8-.8H236v-3.6c0-.8.7-1.6 1.7-1.6zm1.7-12.3c0 2.7 2.2 4.8 4.8 4.8 2.7 0 4.8-2.2 4.8-4.8s-2.2-4.8-4.8-4.8-4.8 2.2-4.8 4.8zm8.1 0c0 1.8-1.5 3.2-3.2 3.2-1.8 0-3.2-1.5-3.2-3.2s1.5-3.2 3.2-3.2 3.2 1.4 3.2 3.2zm-3.2-8.7a8.71 8.71 0 0 0-8.7 8.7 8.71 8.71 0 0 0 8.7 8.7c3.3 0 6.3-1.9 7.8-4.8l16.7-.9c.9-.1 1.7-.8 1.7-1.8v-2.4c0-.9-.7-1.7-1.7-1.8l-5.1-.3c-.4 0-.8.3-.8.7s.3.8.7.8l5.1.3c.1 0 .2.1.2.2v2.4c0 .1-.1.2-.2.2l-17.1 1c-.3 0-.6.2-.7.5-1.1 2.6-3.7 4.3-6.5 4.3a7.13 7.13 0 0 1-7.1-7.1 7.13 7.13 0 0 1 7.1-7.1c2.8 0 5.4 1.7 6.5 4.3.1.3.4.5.7.5l8.6.5c.4 0 .8-.3.8-.7s-.3-.8-.7-.8l-8.1-.5c-1.6-3-4.6-4.9-7.9-4.9h0zm31.6 24.2H273c-.4 0-.8.4-.8.8s.4.8.8.8h2.9c1.9 0 3.5 1.6 3.5 3.5v7.5h-9c-.4 0-.8.4-.8.8s.4.8.8.8h9v2.1H270c-.4 0-.8.4-.8.8s.4.8.8.8h9.4v1.3c0 1.9-1.6 3.5-3.5 3.5h-22.1c-1.9 0-3.5-1.6-3.5-3.5v-1.3h9.4c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-9.4V273h9c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-9v-7.5c0-1.9 1.6-3.5 3.5-3.5h15.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-15.8c-2.8 0-5.1 2.3-5.1 5v14c0 2.8 2.3 5 5.1 5h22.1c2.8 0 5.1-2.3 5.1-5v-14c0-2.6-2.3-4.9-5.1-4.9zm-11 10.8c-1.7 0-3.2 1.4-3.2 3.1 0 .8.3 1.6.8 2.1l-.4 1.4c-.2.5-.1 1 .2 1.5.3.4.8.7 1.3.7h2.4c.5 0 1-.3 1.3-.7s.4-1 .2-1.5l-.4-1.4c.5-.6.8-1.3.8-2.1.2-1.7-1.3-3.1-3-3.1h0zm.7 5.3l.6 1.8h-2.4l.6-1.8c.1-.3 0-.7-.3-.9-.4-.3-.6-.8-.6-1.3a1.6 1.6 0 1 1 3.2 0c0 .5-.2 1-.6 1.3-.5.2-.6.6-.5.9h0zm-10.1-12.2a3.12 3.12 0 0 0-3.1 3.1 3.12 3.12 0 0 0 3.1 3.1h1.5a3.12 3.12 0 0 0 3.1-3.1 3.12 3.12 0 0 0-3.1-3.1h-1.5zm3.1 3.1a1.58 1.58 0 0 1-1.6 1.6h-1.5a1.6 1.6 0 1 1 0-3.2h1.5c.9.1 1.6.8 1.6 1.6zm5.7.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-1.7c-.4 0-.8.4-.8.8s.4.8.8.8h1.7zm13.4-.8c0-.4-.4-.8-.8-.8h-9.7c-.4 0-.8.4-.8.8s.4.8.8.8h9.7c.5 0 .8-.3.8-.8zm-14.8-16.1c-.4-.2-.9-.1-1.1.3l-1.5 2.7c-.2.4-.1.9.3 1.1.1.1.3.1.4.1.3 0 .6-.1.7-.4l1.5-2.7c.3-.4.1-.9-.3-1.1h0zm.3 6.9h2.6c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-2.6c-.4 0-.8.4-.8.8 0 .5.4.8.8.8z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title bottom-title-line">Universal Access</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backend">
                                                        <div class="features-details">
                                                            <p class="feature-des m-0">With globaltrade-elites.com, be sure to
                                                                make a daily investment at any point in time and also our
                                                                platform is very easy to operate with no hitches or whatsoever.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="0.8s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="228 231 56 50" fill="#0ab1e8">
                                                                <path d="M277.5 244.5c-.4-3.6-2.1-6.9-4.7-9.4-2.8-2.7-6.5-4.1-10.4-4.1-5.7 0-10.9 3.1-13.5 8.1-1.5-1-3.3-1.6-5.2-1.6-4.2 0-7.9 2.8-9 6.9-4.1 1.6-6.7 5.6-6.7 10 0 5.9 4.8 10.7 10.8 10.7h2.3c.7 2.8 1.9 5.5 3.6 7.9 2.8 3.8 6.5 6.6 11 8 .1 0 .2.1.3.1s.2 0 .3-.1c4.4-1.5 8.2-4.2 11-8 1.7-2.4 3-5.1 3.6-7.9h2.3c5.9 0 10.8-4.8 10.8-10.7 0-4.3-2.6-8.2-6.5-9.9h0zM256 278.8c-8-2.8-13.3-10.3-13.3-18.8v-8c4.6-.5 9.1-1.8 13.3-3.7 4.2 1.9 8.7 3.1 13.3 3.7v8c0 8.5-5.3 16-13.3 18.8h0zm17.2-15.9h-1.9c.1-1 .2-1.9.2-2.9v-9c0-.6-.4-1-1-1.1-4.9-.5-9.7-1.7-14.1-3.8-.3-.1-.6-.1-.9 0-4.4 2.1-9.2 3.3-14.1 3.8-.6.1-1 .5-1 1.1v9c0 1 .1 1.9.2 2.9h-1.9c-4.7 0-8.6-3.8-8.6-8.6 0-3.7 2.3-6.9 5.8-8.1.4-.1.6-.4.7-.8.7-3.3 3.6-5.7 7-5.7 1.8 0 3.5.7 4.9 1.9a1.69 1.69 0 0 0 1 .3c.4-.1.6-.3.8-.6 2-4.9 6.8-8 12.1-8 6.8 0 12.6 5.3 13 12.1 0 .4.3.8.7 1 3.4 1.2 5.7 4.5 5.7 8 0 4.6-3.8 8.5-8.6 8.5h0zm-12.4-3.6h-.1v-1.2c0-2.6-2.1-4.7-4.7-4.7s-4.7 2.1-4.7 4.7v1.2h-.1c-1.1 0-1.9.9-1.9 1.9v7.7c0 1.1.9 1.9 1.9 1.9h9.7c1.1 0 1.9-.9 1.9-1.9v-7.7c0-1-.9-1.9-2-1.9zm-7.3 0v-1.2c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v1.2h-5zm3.7 6.2v2.2h-2.4v-2.2c-.3-.3-.5-.8-.5-1.3 0-1 .8-1.7 1.8-1.7s1.8.8 1.8 1.7c-.1.6-.3 1-.7 1.3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title bottom-title-line">Secure Investment</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backend">
                                                        <div class="features-details">
                                                            <p class="feature-des m-0">Your investment is always safe with us
                                                                as we have a professional ict company which foresee to the most
                                                                secure investment processes in globaltrade-elites.com </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="1s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="935 514 50 52" fill="#0ab1e8">
                                                                <circle cx="942.9" cy="555.3" r="1" />
                                                                <circle cx="981.7" cy="543.2" r="1" />
                                                                <path d="M970 535.6h-1.6c-.5 0-.9-.4-.9-.9v-.9c0-.5.4-.9.9-.9h1.7a.68.68 0 0 1 .7.7c0 .6.5 1 1 1a1.08 1.08 0 0 0 1-1c0-1.5-1.2-2.7-2.7-2.8v-.8c0-.6-.5-1-1-1a1.08 1.08 0 0 0-1 1v.9c-1.5.1-2.7 1.4-2.7 2.9v.9c0 1.6 1.3 2.9 2.9 2.9h1.6c.5 0 .9.4.9.9v.9c0 .5-.4.9-.9.9h-1.7a.68.68 0 0 1-.7-.7c0-.6-.5-1-1-1a1.08 1.08 0 0 0-1 1c0 1.5 1.2 2.7 2.7 2.8v.9c0 .6.5 1 1 1a1.08 1.08 0 0 0 1-1v-.9c1.5-.1 2.7-1.4 2.7-2.9v-.9c0-1.7-1.3-3-2.9-3zm14.7 12.8c-.4-.9-1.2-1.7-2.1-2-1-.4-2-.3-3 .1l-6.4 3c-.5.2-.7.8-.5 1.3s.8.7 1.3.5l6.4-2.9c.4-.2.9-.2 1.4 0a1.65 1.65 0 0 1 1 1c.2.5.2 1 0 1.4a1.65 1.65 0 0 1-1 1l-13 5.8c-2.1.9-4.4.9-6.4-.1l-4.8-2.4c-2.6-1.3-5.5-1.3-8.1-.2h-.1l-3.5-8 4.9-2.2c2.4-1 5-1.1 7.4-.2l9.6 3.5c.9.3 1.3 1.3 1 2.1-.3.9-1.3 1.4-2.1 1.1l-7.4-2.5c-.5-.2-1.1.1-1.3.6s.1 1.1.6 1.3l7.4 2.5c.4.1.8.2 1.2.2 1.5 0 3-1 3.5-2.5.6-1.9-.4-4-2.2-4.7l-9.6-3.5c-.6-.2-1.3-.4-2-.5v-5.6c0-5.5 4.5-10 10-10h3.7c5.5 0 10 4.5 10 10v2.6c0 .6.5 1 1 1a1.08 1.08 0 0 0 1-1v-2.6c0-5.9-4.2-10.8-9.7-11.8v-3.1l2.6-4.4c.1-.2.2-.5.1-.8s-.3-.5-.5-.6l-3.1-1.4c-.2-.1-.5-.1-.8 0l-2.3.8-2.1-.8c-.2-.1-.5-.1-.7 0l-3.3 1.3a.9.9 0 0 0-.6.6c-.1.3-.1.6.1.8l2.5 4.6v3.1c-5.6 1-9.8 6-9.8 11.9v5.4c-1.7 0-3.3.3-4.9 1l-5 2.2c-.3-.4-.7-.8-1.2-.9-.6-.2-1.3-.2-1.9 0l-6.4 2.8c-.4.2-.6.5-.6.9V565c0 .4.2.7.5.9.2.1.3.2.5.2s.3 0 .5-.1l12.4-6.3c.6-.3 1.1-.8 1.3-1.4.2-.5.2-1 .1-1.6h.1c2.1-.9 4.4-.9 6.4.1l4.8 2.4c2.6 1.3 5.5 1.3 8.1.2l13-5.8c.9-.4 1.7-1.2 2-2.1.4-1.1.4-2.1 0-3.1zM971 524.2h-4.2v-2.1h4.2v2.1zm-6.4-7.4l1.8-.7 2.1.8c.2.1.5.1.7 0l2.3-.8 1.7.8-1.8 3.2h-5l-1.8-3.3zm-16.5 40.9c-.1 0-.1.1 0 0l-11 5.6v-4.1l2.8-1.4c.5-.2.7-.9.5-1.4s-.9-.7-1.4-.5l-2 1v-8.6l5.8-2.6c.2-.1.3 0 .4 0s.2.1.3.3l.2.5 4.6 10.5c.1.3 0 .6-.2.7z" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title bottom-title-line">Low Cost</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backend">
                                                        <div class="features-details">
                                                            <p class="feature-des m-0">Starting an investment process is
                                                                globaltrade-elites.com is totally free and you don't really need
                                                                to pay any charges to join this great company.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12 wow animate__zoomIn animate__animated" data-wow-delay="1.2s">
                                            <div class="features-box mb-30">
                                                <div class="features-inner-box ">
                                                    <div class="frontend">
                                                        <div class="features-icon icon6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="935 514 50 52" fill="#0ab1e8">
                                                                <path d="M984 564h-2.3v-32.3c0-1.5-1.2-2.7-2.8-2.7h-5.1c-1.5 0-2.8 1.2-2.8 2.7V564h-5.7v-17.7c0-1.5-1.2-2.7-2.8-2.7h-5.1c-1.5 0-2.8 1.2-2.8 2.7V564H949v-9.2c0-1.5-1.2-2.7-2.8-2.7h-5.1c-1.5 0-2.8 1.2-2.8 2.7v9.2H936c-.6 0-1 .5-1 1a1.08 1.08 0 0 0 1 1h48c.6 0 1-.5 1-1a1.08 1.08 0 0 0-1-1zm-37 0h-6.5v-9.2a.68.68 0 0 1 .7-.7h5.1a.68.68 0 0 1 .7.7v9.2zm16.3 0h-6.5v-17.7a.68.68 0 0 1 .7-.7h5.1a.68.68 0 0 1 .7.7V564zm16.3 0h-6.5v-32.3a.68.68 0 0 1 .7-.7h5.1a.68.68 0 0 1 .7.7V564zm2.1-48.9c0-.3-.1-.6-.3-.8s-.5-.3-.8-.3h-6.2c-.6 0-1 .5-1 1a1.08 1.08 0 0 0 1 1h3.9l-10.2 10-3.8-3.8a1.08 1.08 0 0 0-.7-.3 1.08 1.08 0 0 0-.7.3l-18.5 18.3c-.4.4-.4 1 0 1.4a1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l17.8-17.5 3.8 3.8a1.09 1.09 0 0 0 1.5 0l10.9-10.8v3.4c0 .6.5 1 1 1 .6 0 1-.5 1-1l-.1-5.7z" />
                                                                <circle cx="941.4" cy="544.8" r="1" />
                                                            </svg>
                                                        </div>
                                                        <div class="features-details">
                                                            <h3 class="feature-title bottom-title-line">Several Profit</h3>

                                                            <div class="features-btn d-block d-md-none mt-sm-15">
                                                                <a class="btn btn-color" href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backend">
                                                        <div class="features-details">
                                                            <p class="feature-des m-0">By choosing globaltrade-elites.com as
                                                                your number 1 investment company, you stand a chance to make
                                                                more money ranging from referral to investing more and also
                                                                appreciative bonues.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Best Features End -->

        <section id="team" class="dark-bg bg-position ptb-100">
            <div class="background-shape-3">
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
            </div>
            <div class="container">
                <div class="team-part">
                    <div class="row m-0">
                        <div class="col-12 p-0 mb-40 wow animate__fadeInUp animate__animated">
                            <div class="heading-part align-center">
                                <h6 class="heading-sub-title title-line">Best Choice Of Investments</h6>
                                <h2 class="main_title heading mb-15">Our Current Plans</h2>
                                <p class="heading-des">Simply choose from our current plans to start with your investment
                                    journey. </p>
                            </div>
                        </div>
                    </div>
                    <div class="owl-slider team-slider">
                        <div class="row">
                            <div class="owl-carousel  our-team ">
                                <?php 
                    				$query = mysqli_query($link, "SELECT * FROM package1 ");
                    				if(mysqli_num_rows($query) > 0){
                    					while($row = mysqli_fetch_assoc($query)){  
                    				
                    			?>
                                <div class="item wow animate__zoomIn animate__animated" data-wow-delay="0.4s">
                                    <div class="team-item">
                                        <div class="team-box">
                                            <div class="listing-effect">
                                                <img alt="earnmood.pro" src="public/ona/images/tm2.png">
                                            </div>
                                            <div class="team-item-detail">
                                                <div class="team-info">
                                                    <h2 class="team-title"><?php echo strtoupper($row['pname']) ?></h2>
                                                    <div class="sub-title"><?php echo $row['increase'] ?>% for 24 hours</div>
                                                </div>
                                                <div class="social_icon">
                                                    <ul class="price">

                                                        <li style="font-size: large;color: aqua;" class="grey"> Minimum Deposit:
                                                            $<?php echo $row['froms'] ?></li>
                                                        <li style="font-size: large;color: aqua;" class="red"> Maximum Deposit:
                                                            $<?php echo $row['tos'] ?></li>
                                                        <!--<li style="font-size: large;color: aqua;">Referal bonus 10%.</li>-->
                                                        <!--<li style="font-size: large;color: aqua;">Duration cycle of plan is 24 hours</li>-->
                                                        <li style="font-size: large;color: aqua;">Instand Withdrawal </li>



                                                        <li style="font-size: large;color: aqua;" class="grey"><a href="register.php" class="button btn btn-success">SIGN UP</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                               			} 
                           			}
                                ?>
                                 
                                



                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
        
        
        
        
        
        
        
        
        <!-- <section id="team" class="dark-bg bg-position ptb-100">-->
        <!--    <div class="background-shape-3">-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--        <div class="cube"></div>-->
        <!--    </div>-->
        <!--    <div class="container">-->
        <!--        <div class="team-part">-->
        <!--            <div class="row m-0">-->
        <!--                <div class="col-12 p-0 mb-40 wow animate__fadeInUp animate__animated">-->
        <!--                    <div class="heading-part align-center">-->
        <!--                        <h6 class="heading-sub-title title-line">Best Choice Of Investments</h6>-->
        <!--                        <h2 class="main_title heading mb-15">Our Current Plans</h2>-->
        <!--                        <p class="heading-des">Simply choose from our current plans to start with your investment-->
        <!--                            journey. </p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="owl-slider team-slider">-->
        <!--                <div class="row">-->
        <!--                    <div class="owl-carousel  our-team ">-->
        <!--                        <div class="item wow animate__zoomIn animate__animated" data-wow-delay="0.4s">-->
        <!--                            <div class="team-item">-->
        <!--                                <div class="team-box">-->
        <!--                                    <div class="listing-effect">-->
        <!--                                        <img alt="globaltrade-elites.com " src="public/ona/images/tm2.png">-->
        <!--                                    </div>-->
        <!--                                    <div class="team-item-detail">-->
        <!--                                        <div class="team-info">-->
        <!--                                            <h2 class="team-title">STARTER PLAN</h2>-->
        <!--                                            <div class="sub-title">24/7 Live Support Assistance.</div>-->
        <!--                                        </div>-->
        <!--                                        <div class="social_icon">-->
        <!--                                            <ul class="price">-->

        <!--                                                <li style="font-size: large;color: aqua;" class="grey"> Minimum Funding:-->
        <!--                                                    $100</li>-->
        <!--                                                <li style="font-size: large;color: aqua;" class="red"> Maximum Funding:-->
        <!--                                                    $499</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Referal bonus 10%.</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Duration cycle of plan is 24 hours</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Earn 20% profit after 24 hours investment cycle. </li>-->



        <!--                                                <li style="font-size: large;color: aqua;" class="grey"><a href="indexcca3.html?a=signup" class="button btn btn-success">SIGN UP</a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="item wow animate__zoomIn animate__animated" data-wow-delay="0.4s">-->
        <!--                            <div class="team-item">-->
        <!--                                <div class="team-box">-->
        <!--                                    <div class="listing-effect">-->
        <!--                                        <img alt="globaltrade-elites.com " src="public/ona/images/tm2.png">-->
        <!--                                    </div>-->
        <!--                                    <div class="team-item-detail">-->
        <!--                                        <div class="team-info">-->
        <!--                                            <h2 class="team-title">SILVER PLAN</h2>-->
        <!--                                            <div class="sub-title">24/7 Live Support Assistance.</div>-->
        <!--                                        </div>-->
        <!--                                        <div class="social_icon">-->
        <!--                                            <ul class="price">-->

        <!--                                                <li style="font-size: large;color: aqua;" class="grey"> Minimum Funding:-->
        <!--                                                    $500</li>-->
        <!--                                                <li style="font-size: large;color: aqua;" class="red"> Maximum Funding:-->
        <!--                                                    $999</li>-->
        <!--                                                <li style="font-size: large;color: aqua;"> Referal bonus is 10%.</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Duration cycle of plan is 48 hours</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Earn 35% profit after 48 hours investment cycle. </li>-->



        <!--                                                <li style="font-size: large;color: aqua;" class="grey"><a href="indexcca3.html?a=signup" class="button btn btn-success">SIGN UP</a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                         <div class="item wow animate__zoomIn animate__animated" data-wow-delay="0.4s">-->
        <!--                            <div class="team-item">-->
        <!--                                <div class="team-box">-->
        <!--                                    <div class="listing-effect">-->
        <!--                                        <img alt="globaltrade-elites.com " src="public/ona/images/tm2.png">-->
        <!--                                    </div>-->
        <!--                                    <div class="team-item-detail">-->
        <!--                                        <div class="team-info">-->
        <!--                                            <h2 class="team-title">ADVANCED PLAN</h2>-->
        <!--                                            <div class="sub-title">24/7 Live Support Assistance.</div>-->
        <!--                                        </div>-->
        <!--                                        <div class="social_icon">-->
        <!--                                            <ul class="price">-->

        <!--                                                <li style="font-size: large;color: aqua;" class="grey"> Minimum Funding:-->
        <!--                                                    $1,000</li>-->
        <!--                                                <li style="font-size: large;color: aqua;" class="red"> Maximum Funding:-->
        <!--                                                    $4,999</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Referal bonus is 10%.</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Duration cycle of 72 hours</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Earn 80% profit after 72 hours investment cycle. </li>-->



        <!--                                                <li style="font-size: large;color: aqua;" class="grey"><a href="indexcca3.html?a=signup" class="button btn btn-success">SIGN UP</a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="item wow animate__zoomIn animate__animated" data-wow-delay="0.4s">-->
        <!--                            <div class="team-item">-->
        <!--                                <div class="team-box">-->
        <!--                                    <div class="listing-effect">-->
        <!--                                        <img alt="globaltrade-elites.com " src="public/ona/images/tm2.png">-->
        <!--                                    </div>-->
        <!--                                    <div class="team-item-detail">-->
        <!--                                        <div class="team-info">-->
        <!--                                            <h2 class="team-title">EXTENDED PLAN</h2>-->
        <!--                                            <div class="sub-title">24/7 Live Support Assistance.</div>-->
        <!--                                        </div>-->
        <!--                                        <div class="social_icon">-->
        <!--                                            <ul class="price">-->

        <!--                                                <li style="font-size: large;color: aqua;" class="grey"> Minimum Funding:-->
        <!--                                                    $5,000</li>-->
        <!--                                                <li style="font-size: large;color: aqua;" class="red"> Maximum Funding:-->
        <!--                                                    Unlimited</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Daily Referal bonus of 10%.</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Duration cycle of 96 hours(s)</li>-->
        <!--                                                <li style="font-size: large;color: aqua;">Earn 120% profit after 96 hours investment cycle. </li>-->



        <!--                                                <li style="font-size: large;color: aqua;" class="grey"><a href="indexcca3.html?a=signup" class="button btn btn-success">SIGN UP</a></li>-->
        <!--                                            </ul>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->



        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                
        <!--    </div>-->
        <!--</section>-->


       
        <!-- FAQ section strat -->
        <!--<section id="faq-part" class="faq-part dark-bg ptb-100">-->
        <!--    <div class="container">-->
        <!--        <div class="row m-0">-->
        <!--            <div class="col-12 p-0 mb-40 wow animate__fadeInUp animate__animated">-->
        <!--                <div class="heading-part align-center">-->
        <!--                    <h6 class="heading-sub-title title-line">DEPOSIT & WITHDRAWAL</h6>-->
        <!--                    <h2 class="main_title heading mb-15">Recent Deposit & Withdrawal </h2>-->
        <!--                    <p class="heading-des">This is the statistics showing the real time investment and withdrawal-->
        <!--                        from Earn Mood. </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-12">-->
        <!--                <div id="tabs" class="wow animate__zoomIn animate__animated">-->
        <!--                    <ul class="nav nav-tabs">-->
        <!--                        <li><a class="tab-General selected" title="General">Latest Deposit</a></li>-->

        <!--                        <li><a class="tab-Token-sale" title="Token-sale">Latest Withdrawals</a></li>-->

        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div id="items">-->
        <!--                    <div class="tab_content">-->
        <!--                        <ul>-->
        <!--                            <li>-->










        <!--                                <div class="items-General selected">-->
        <!--                                    <div id="accordion" class="accordion ">-->
        <!--                                        <div class="row justify-content-center">-->
        <!--                                            <div class="col-lg-8">-->
        <!--                                                <div class="card">-->

        <!--                                                    <table class="table transection__table">-->
        <!--                                                        <thead>-->
        <!--                                                            <tr style="color: white; text-align: center">-->
        <!--                                                                <th>Name</th>-->
        <!--                                                                <th>Trx ID</th>-->
        <!--                                                                <th>Date</th>-->
        <!--                                                                <th>Amount</th>-->
        <!--                                                            </tr>-->
        <!--                                                        </thead>-->
        <!--                                                        <tbody>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Saadat Tahir</span>-->

        <!--                                                                </td>-->
        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-976413 </span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Date"><span class="date">Aug, 09, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        100.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Cecelia Amelivio</span>-->

        <!--                                                                </td>-->
        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-314340 </span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Date"><span class="date">Aug, 07, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        10000.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Annabel Carolyn</span>-->

        <!--                                                                </td>-->
        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-902106 </span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Date"><span class="date">Aug, 03, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        11750.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Cintia</span>-->

        <!--                                                                </td>-->
        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-704197 </span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Date"><span class="date">Aug, 03, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        10500.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Stephen</span>-->

        <!--                                                                </td>-->
        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-381460 </span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Date"><span class="date">Aug, 03, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        5750.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Uziyah Garcia</span>-->

        <!--                                                                </td>-->
        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-302737 </span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Date"><span class="date">Aug, 02, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        10000.00</span></td>-->

        <!--                                                            </tr>-->

        <!--                                                        </tbody>-->
        <!--                                                    </table>-->

        <!--                                                </div>-->



        <!--                                            </div>-->

        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <div class="items-Token-sale">-->
        <!--                                    <div id="accordion-token" class="accordion ">-->
        <!--                                        <div class="row justify-content-center">-->
        <!--                                            <div class="col-lg-8">-->
        <!--                                                <div class="card">-->
        <!--                                                    <table class="table transection__table">-->
        <!--                                                        <thead>-->
        <!--                                                            <tr style="color: white; text-align: center">-->
        <!--                                                                <th>Name</th>-->
        <!--                                                                <th>Trx ID</th>-->
        <!--                                                                <th>Date</th>-->
        <!--                                                                <th>Amount</th>-->
        <!--                                                            </tr>-->
        <!--                                                        </thead>-->
        <!--                                                        <tbody>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">HannahO5</span>-->

        <!--                                                                </td>-->

        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-TXT-ID-662367 </span>-->
        <!--                                                                </td>-->

        <!--                                                                <td data-label="Date"><span class="date">Aug, 10, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        19300.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Sazalmiah</span>-->

        <!--                                                                </td>-->

        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-6780577 </span>-->
        <!--                                                                </td>-->

        <!--                                                                <td data-label="Date"><span class="date">Aug, 05, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        105.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Janegumnez</span>-->

        <!--                                                                </td>-->

        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-8026332 </span>-->
        <!--                                                                </td>-->

        <!--                                                                <td data-label="Date"><span class="date">Aug, 05, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        1450.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Hannahjosh05</span>-->

        <!--                                                                </td>-->

        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-6045852 </span>-->
        <!--                                                                </td>-->

        <!--                                                                <td data-label="Date"><span class="date">Jul, 28, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        85000.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">Sazalmiah</span>-->

        <!--                                                                </td>-->

        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-33460 </span>-->
        <!--                                                                </td>-->

        <!--                                                                <td data-label="Date"><span class="date">Jul, 27, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        94.00</span></td>-->

        <!--                                                            </tr>-->
        <!--                                                            <tr style="color: white; text-align: center">-->

        <!--                                                                <td data-label="wallet">-->
        <!--                                                                    <span class="name">RyanAndrew</span>-->

        <!--                                                                </td>-->

        <!--                                                                <td data-label="Wallet"><span class="wallet">TXN-ID-6946096 </span>-->
        <!--                                                                </td>-->

        <!--                                                                <td data-label="Date"><span class="date">Jul, 25, 2022</span>-->
        <!--                                                                </td>-->
        <!--                                                                <td data-label="Amount"><span class="amount">$-->
        <!--                                                                        2000.00</span></td>-->

        <!--                                                            </tr>-->

        <!--                                                        </tbody>-->
        <!--                                                    </table>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
                                                    <!-- <div class="col-lg-6">
        <!--                                                </div> -->-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- FAQ section end -->


        <!-- Contact Us Start  -->
        <section id="contact-section" class="bg-position">
            <div class="contact-bg ptb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 wow animate__fadeInLeft animate__animated" data-wow-duration="2s">
                            <div class="contact-img d-none d-lg-block">
                                <img src="public/ona/images/contact-img.png" alt="globaltrade-elites.com ">
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 wow animate__fadeInRight animate__animated" data-wow-duration="2s">
                            <div class="row m-0">
                                <div class="col-12 p-0 mb-40">
                                    <div class="heading-part text-left">
                                        <h6 class="heading-sub-title title-line">Get advice our experts</h6>
                                        <h2 class="main_title heading mb-0">Get In Touch</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="main-form-detail">
                                <div class="col-lg-11">
                                </div>
                                <div class="col-lg-11">
                                </div>
                                <div class="main-form">
                                    <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16791133949663"><input type="hidden" name="form_token" value="03809eb6d99142b07e80f86fc0b44f71">
                                    <input type=hidden name=a value=support>
                                    <input type=hidden name=action value=send>
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <input type="text" placeholder="Full Name" name="name" value="">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input type="email" placeholder="Email" name="email" value="">
                                            </div>
                                            <div class="col-12 mb-30">
                                                <textarea placeholder="Message" rows="4" cols="30" name="message"></textarea>
                                            </div>
                                            
                                            <div class="col-12 mb-30">
                                            
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="form-btn">
                                                    <button type="submit" class="btn-color btn ">Submit Now <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                            <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us block End  -->


        <!-- CONTAINER END -->



        <!-- Javascript code below -->
        <script>
            //get plan select option
            var plan = document.getElementById("plan");
            //get compounding input
            var percentAge = document.getElementById("compounding");
            //getting profit value
            var profit = document.getElementById("profit");
            //getting total for daily
            var total = document.getElementById("total");
            //getting total for monthly
            var totalMonth = document.getElementById("totalMonth");



            function getPlan() {
                //getting the value of the option plan
                var planVal = plan.value;
                //running a check on the values
                switch (planVal) {
                    case "2.85714285714 %":
                        percentAge.value = "2.85714285714 %";
                        break;
                    case "4.28571428571%":
                        percentAge.value = "4.28571428571%";
                        break;
                    case "7.14285714286%":
                        percentAge.value = "7.14285714286%";
                        break;

                }
            }

            function getTotal() {
                var percentageVal = percentAge.value; //percentage value
                var profitVal = profit.value; //profit value from user

                if (percentageVal == "2.85714285714 %") {
                    var cent = 100;
                    var per = 2.85714285714;
                    var resultVal = (profitVal / 100) * 2.85714285714;
                    var resultValue = resultVal.toLocaleString();
                    var totalRet = total.value = "$" + resultValue;
                    var totalMon = (resultVal * 7);
                    var totalMon = totalMon.toLocaleString();
                    totalMonth.value = "$" + totalMon;
                }

                if (percentageVal == "4.28571428571%") {
                    var cent = 100;
                    var per = 4.28571428571;
                    var resultVal = (profitVal / 100) * 4.28571428571;
                    var resultValue = resultVal.toLocaleString();
                    var totalRet = total.value = "$" + resultValue;
                    var totalMon = (resultVal * 7);
                    var totalMon = totalMon.toLocaleString();
                    totalMonth.value = "$" + totalMon;

                }

                if (percentageVal == "7.14285714286%") {
                    var cent = 100;
                    var per = 7.14285714286;
                    var resultVal = (profitVal / 100) * 7.14285714286;
                    var resultValue = resultVal.toLocaleString();
                    var totalRet = total.value = "$" + resultValue;
                    var totalMon = (resultVal * 7);
                    var totalMon = totalMon.toLocaleString();
                    totalMonth.value = "$" + totalMon;
                }

                if (percentageVal == "20%") {
                    var cent = 100;
                    var per = 20;
                    var resultVal = (profitVal / 100) * 20;
                    var resultValue = resultVal.toLocaleString();
                    var totalRet = total.value = "$" + resultValue;
                    var totalMon = (resultVal * 2);
                    var totalMon = totalMon.toLocaleString();
                    totalMonth.value = "$" + totalMon;
                }

            }

        </script>



<script src="../code.tidio.co_443/rluon6ruijhkk20hf8tksalzceayulzb.js" async></script>




        <!-- FOOTER START -->
        <div class="footer dark-bg">
            <!-- News Letter Start -->
            <div class="newsletter-bg">
                <div class="container">
                    <div class="newsletter wow animate__zoomIn animate__animated">
                        <div class="newsletter-inner center-sm">
                            <div class="row justify-content-center align-items-center">
                                <div class=" col-xl-10 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="d-lg-flex align-items-center">
                                                <div class="newsletter-title">
                                                    <h2 class="main_title mb-0">Join Earn Mood Now</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">

                                            <div class="newsletter-box">
                                                <a href="register.php" class="btn btn-color" style="color: white">Register

                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17" fill="#fff">
                                                        <path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z" />
                                                    </svg>
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News Letter End -->
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-middle">
                        <div class="row">
                            <div class="col-lg-4 f-col  wow animate__fadeInUp animate__animated" data-wow-delay="0.2s">
                                <div class="footer-static-block"> <span class="opener plus"></span>
                                    <div class="f-logo mb-30">
                                        <a href="index.html" class="">
                                            <img src="logo/logo.png" alt="Earn Mood">
                                        </a>
                                    </div>
                                    <div class="footer-block-contant">
                                        <p>Our mission is to provide our clients with wide-ranging and best-in-class
                                            financial services, and to become the primary firm of choice for aspiring
                                            investors across the World.</p>
                                        <ul class="social-icon">
                                            <li><a title="Facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a title="Twitter" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a title="Linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a title="RSS" class="rss"><i class="fas fa-rss"></i></a>
                                            </li>
                                            <li><a title="Pinterest" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-3 f-col  wow animate__fadeInUp animate__animated" data-wow-delay="0.4s">
                                        <div class="footer-static-block"> <span class="opener plus"></span>
                                            <h3 class="title">Quick Link<span></span></h3>
                                            <ul class="footer-block-contant link">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="login.php">Dashboard</a></li>
                                                <li><a href="register.php">Register</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 f-col  wow animate__fadeInUp animate__animated" data-wow-delay="0.6s">
                                        <div class="footer-static-block"> <span class="opener plus"></span>
                                            <h3 class="title">Support<span></span></h3>
                                            <ul class="footer-block-contant link">
                                                <li><a href="index15a0.html?a=support">Contact Us</a></li>
                                                <li><a href="index38cd.html?a=faq">FAQs </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 f-col  wow animate__fadeInUp animate__animated" data-wow-delay="0.8s">
                                        <div class="footer-static-block">
                                            <ul class="address-footer">
                                                <li class="item">
                                                    <div class="address-icon icon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path d="M446.812 493.966l-67.499-142.781c-1.347-2.849-3.681-5.032-6.48-6.223l-33.58-14.949 58.58-98.231c11.568-22.579 17.434-46.978 17.434-72.515 0-42.959-16.846-83.233-47.435-113.402C337.248 15.703 296.73-.588 253.745.016c-41.748.579-81.056 17.348-110.685 47.22s-46.078 69.313-46.326 111.066c-.152 25.515 5.877 50.923 17.431 73.479.124.241.255.479.394.713l58.184 97.517-33.774 15.031c-2.763 1.229-4.993 3.408-6.285 6.142L65.187 493.966a12.63 12.63 0 0 0 2.388 14.23c3.693 3.777 9.345 4.859 14.172 2.711l84.558-37.646 84.558 37.646c3.271 1.455 7.006 1.455 10.277 0l84.558-37.646 84.558 37.646a12.62 12.62 0 0 0 5.135 1.093 12.63 12.63 0 0 0 9.037-3.803c3.691-3.778 4.643-9.454 2.384-14.231zm-310.339-274.06c-9.73-19.132-14.599-39.805-14.47-61.453.428-72.429 59.686-132.17 132.094-133.173 36.166-.486 70.263 13.199 95.993 38.576 25.738 25.383 39.911 59.267 39.911 95.412 0 21.359-4.869 41.757-14.473 60.638L266.85 402.054c-3.318 5.56-8.692 6.16-10.849 6.16s-7.532-.6-10.849-6.16L136.473 219.906zm214.361 227.985c-3.271-1.455-7.006-1.455-10.277 0l-84.558 37.646-84.558-37.646c-3.271-1.455-7.006-1.455-10.277 0l-58.578 26.08 50.938-107.749 32.258-14.356 37.668 63.133c6.904 11.572 19.072 18.481 32.547 18.481s25.643-6.909 32.547-18.48l37.668-63.133 32.261 14.361 50.935 107.744-58.574-26.081zm-94.83-346.284c-31.794 0-57.659 25.865-57.659 57.658s25.865 57.658 57.659 57.658 57.658-25.865 57.658-57.658-25.865-57.658-57.658-57.658zm0 90.05c-17.861.001-32.393-14.529-32.393-32.392s14.531-32.392 32.393-32.392 32.392 14.531 32.392 32.392-14.531 32.392-32.392 32.392z" />
                                                        </svg>
                                                    </div>
                                                    <p class="address">Unit 3 Blackpool Trade Park,Preston New Road Blackpool, England,
                                                        FY4 4QX </p>
                                                </li>
                                                <!--<li>
                                                    <div class="address-icon icon2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="952 532 16 16"  ><path fill="#fff" d="M960 532c-4.4 0-8 3.9-8 8.7v4c0 .2.2.4.4.4h1.1v1.5a1.54 1.54 0 0 0 1.5 1.5h1.1c.2 0 .4-.2.4-.4v-6.5c0-.2-.2-.4-.4-.4H955a1.54 1.54 0 0 0-1.5 1.5v-1.5c0-4 2.9-7.3 6.5-7.3s6.5 3.3 6.5 7.3v1.5a1.54 1.54 0 0 0-1.5-1.5h-1c-.2 0-.4.2-.4.4v6.5c0 .2.2.4.4.4h1.1a1.54 1.54 0 0 0 1.5-1.5v-1.5h1.1c.2 0 .4-.2.4-.4v-4c-.1-4.8-3.7-8.7-8.1-8.7z"/><defs /></svg>
                                                    </div>
                                                    <p></p>
                                                </li>-->
                                                <li>
                                                    <div class="address-icon icon3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="952 534 16 12">
                                                            <path fill="#fff" d="M966.7 534h-13.3c-.7 0-1.3.6-1.3 1.3v9.3c0 .7.6 1.3 1.3 1.3h13.3c.7 0 1.3-.6 1.3-1.3v-9.3c0-.7-.6-1.3-1.3-1.3zm-13.4.7h13.4l-6.3 5.8c-.1.1-.3.2-.5.2s-.4-.1-.5-.2l-6.3-5.8h.2zm-.6 10v-9.5l5.3 4.8-5.3 4.9v-.2zm14 .6h-13.5l5.3-4.9c.2.2.4.4.6.5.3.2.6.4.9.4s.7-.1.9-.4c.2-.1.4-.3.6-.5l5.3 4.9h-.1zm.6-.6v.2L962 540l5.3-4.8v9.5z" />
                                                            <defs />
                                                        </svg>
                                                    </div>
                                                    <p>support@earnmood.pro</p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom ">
                <div class="copy-right-bg">
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-12">
                                <div class="copy-right ">© 2019 - 2022 All Rights Reserved. Design By <a href="index.html">Earn Mood ICT Team</a></div>
                            </div>
                        </div>
                    </div>
                    <div style="position: fixed; left: 0; bottom: 0; z-index: 999999; width: 100%;">
                        <div style="width: 100%; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; font-size: 16px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px;">
                            <script src="../widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                            <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="#ffffff" locale="en">
                            </coingecko-coin-price-marquee-widget>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="scroll-top">
        <div class="scrollup"></div>
    </div>-->
        <!-- FOOTER END -->
    </div>


    <!-- interval -->

    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;">Someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
    </div>

    <style>
        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            right: 50px;
            background: #fff;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #f2d516;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #f2d516;
        }

    </style>
    <script data-cfasync="false" src="#"></script>
    <!--<script type="text/javascript">-->
    <!--    var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia',-->
    <!--        'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa',-->
    <!--        'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa',-->
    <!--        'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa',-->
    <!--        'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'-->
    <!--    ];-->
    <!--    var listPlans = ['$500', '$1500', '$1000', '$10,000', '$2000', '$3000', '$4000', '$600', '$700', '$2500'];-->
    <!--    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);-->
    <!--    var run = setInterval(request, interval);-->

    <!--    function request() {-->
    <!--        clearInterval(run);-->
    <!--        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);-->
    <!--        var country = listCountries[Math.floor(Math.random() * listCountries.length)];-->
    <!--        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];-->
    <!--        var msg = 'While you are still doubting and contemplating, Someone from <b>' + country +-->
    <!--            '</b> just invested with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';-->
    <!--        $(".mgm .txt").html(msg);-->
    <!--        $(".mgm").stop(true).fadeIn(300);-->
    <!--        window.setTimeout(function() {-->
    <!--            $(".mgm").stop(true).fadeOut(300);-->
    <!--        }, 6000);-->
    <!--        run = setInterval(request, interval);-->
    <!--    }-->

    <!--</script>-->







    <!-- Interval ended -->

    <script>
        function googleTranslateElementInit() {

            new google.translate.TranslateElement({

                pageLanguage: 'en'

            }, 'google_translate_element');

        }

    </script>

    <style type="text/css">
        /*google translate Dropdown */

        #google_translate_element select {
            background: #f6edfd;
            color: #383ffa;
            border: none;
            border-radius: 3px;
            padding: 6px 8px
        }

        /*google translate link | logo */
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        /* google translate banner-frame */

        .goog-te-banner-frame {
            display: none !important;
        }

        #goog-gt-tt,
        .goog-te-balloon-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        body {
            top: 0 !important;
        }

    </style>

    <script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>




    <script src="public/ona/js/jquery-3.4.1.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="public/ona/js/bootstrap.min.js"></script>
    <script src="public/ona/js/jquery.downCount.js"></script>
    <script src="public/ona/js/chart.min.js"></script>
    <script src="public/ona/js/wow.min.js"></script>
    <script src="public/ona/js/jquery-ui.min.js"></script>
    <script src="public/ona/js/scrolling-nav.js"></script>
    <script src="public/ona/js/owl.carousel.min.js"></script>
    <script src="public/ona/js/custom.js"></script>

</body>


<!-- Mirrored from Earn Mood/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 04:23:35 GMT -->
</html>