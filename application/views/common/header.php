<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/admin-pro/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Mar 2018 13:59:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Learn C Programming</title>

    <!-- Bootstrap Core CSS -->

    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="../assets/plugins/icheck/skins/all.html" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../assets/css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link rel="stylesheet"
        href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/styles/default.min.css">
  <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>



    <link href="../assets/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <link href="../assets/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Learn C Programming</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down"></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">


                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/<?php if($this->session->userdata('user_img')) { echo $this->session->userdata('user_img'); }else {
                              echo'profile.png';
                            } ?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/<?php if($this->session->userdata('user_img')) { echo $this->session->userdata('user_img'); }else {
                                              echo'profile.png';
                                            } ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?=$this->session->userdata('user_name')?></h4>
                                                <p class="text-muted"><a href="" class="__cf_email__" data-cfemail="02746370776c42656f636b6e2c616d6f"><?=$this->session->userdata('user_email')?></a></p><a href="index" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="index"><i class="ti-user"></i> My Profile</a></li>

                                    <li role="separator" class="divider"></li>
                                    <li><a href="index"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../post/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="nav-small-cap">INTRODUCTION TO C</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 1 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="welcome">Welcome </a></li>
                                <li><a href="history">History and Evolution</a></li>
                                <li><a href="howworks">How It Works</a></li>
                                <li><a href="tools">Tools and Tips</a></li>
                                <li><a href="quiz?no=1">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 2</span></a>
                            <ul aria-expanded="false" class="collapse">
                              <li><a href="structure">C Program Structure</a></li>
                              <li><a href="syntax">Basic Syntax &amp; Data Types</a></li>
                              <li><a href="variables">Variables &amp; Constants</a></li>
                              <li><a href="operators">Operators</a></li>
                              <li><a href="casting">Type Casting</a></li>
                              <li><a href="quiz?no=2">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 3</span></a>
                            <ul aria-expanded="false" class="collapse">
                              <li><a href="ifelse">if-else</a></li>
                              <li><a href="nestedifelse">Nested if-else</a></li>
                              <li><a href="switch">Switch Statement</a></li>
                              <li><a href="conditionaloperator">Conditional Operator</a></li>
                              <li><a href="quiz?no=3">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 4 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="loop">Loop</a></li>
                                <li><a href="nestedloop">Nested Loop</a></li>
                                <li><a href="eof">End of File (EOF)</a></li>
                                <li><a href="quiz?no=4">Quiz</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">STRUCTURED C PROGRAMMING</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 1 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="array">Arrays </a></li>
                                <li><a href="marray">Multidimensional Arrays</a></li>
                                <li><a href="quiz?no=5">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 2</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li><a href="string">String</a></li>
                               <li><a href="stringo">String Operation</a></li>
                               <li><a href="quiz?no=6">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 3</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="function">Fuction</a></li>
                                <li><a href="rfunction">Recurtion Function</a></li>
                                <li><a href="quiz?no=7">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 4 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="structureinc">Structure</a></li>
                                <li><a href="astructure">Array of Structures </a></li>
                                <li><a href="#">Structures within Structures</a></li>
                                <li><a href="quiz?no=8">Quiz</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">DATA STRUCTURES &amp; ALGORITHMS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 1 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Algorithms Basics</a></li>
                                <li><a href="#">Asymptotic Analysis</a></li>
                                <li><a href="#">Greedy Algorithms</a></li>
                                <li><a href="#">Divide and Conquer</a></li>
                                <li><a href="#">Dynamic Programming</a></li>
                                <li><a href="quiz?no=9">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 2 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Data Structures Basics</a></li>
                                <li><a href="#">Array Data Structure</a></li>
                                <li><a href="#">Linked List Basic</a></li>
                                <li><a href="quiz?no=10">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 3</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Stack</a></li>
                                <li><a href="#">Queue</a></li>
                                <li><a href="quiz?no=11">Quiz</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Linear Search</a></li>
                                <li><a href="#">Binary Search</a></li>
                                <li><a href="quiz?no=12">Quiz</a></li>

                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Week 5 </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Bubble Sort</a></li>
                                <li><a href="#">Merge Sort</a></li>
                                <li><a href="#">Quick Sort</a></li>
                                <li><a href="quiz?no=13">Quiz</a></li>


                            </ul>
                        </li>



                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">


          <?php
            if($this->session->userdata('user_name')==''){
              redirect(index);
            }
          ?>
