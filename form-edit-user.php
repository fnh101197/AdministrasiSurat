<!doctype html>
<html><?php session_start(); ?>
    <?php 
        include 'koneksi.php';
        $kd_user=$_GET['kd_user'];
        $query=mysql_query("select * from user where kd_user='$kd_user'");
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Apliaksi Administrasi Surat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="beranda.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
                            </li>
                            <li class="active">
                                <a href="datauser.php"><i class="fa fa-database"></i><span>Data User</span></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-info-circle"></i><span>Informasi</span></a>
                                <ul class="collapse">
                                    <li><a href="info-bidang.php">Info Bidang</a></li>
                                    <li><a href="info-kelas-surat.php">Info Kelas Surat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-envelope"></i><span>Surat</span></a>
                                <ul class="collapse">
                                    <li><a href="surat-masuk.php">Surat Masuk</a></li>
                                    <li><a href="surat-keluar.php">Surat Keluar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="login.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Edit Data User</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Aplikasi Administrasi Surat Masuk dan Surat Keluar</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <a href="profil.php">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle"><?php echo $_SESSION['nama']; ?></h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                            <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                                <?php
                                while($row=mysql_fetch_array($query)){
                                ?>
                        <div class="card-body">
                        <form action="edit.php" method="POST" name="edit">
                        <input type="Hidden" name="kd_user" value="<?php echo $kd_user;?>" />
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="validationCustom05" aria-describedby="emailHelp" name="nama" placeholder="Nama" value="<?php echo $row['nama']; ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Username</label>
                                        <input type="text" class="form-control" id="validationCustom05" name="username"placeholder="Password" value="<?php echo $row['username']; ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="validationCustom05" placeholder="Password" value="<?php echo $row['password']; ?>" required="">
                                    </div>
                                    <input type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="edit">
                                </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
        <div class="footer-area">
           <p>© Copyright 2018. All right reserved.</p>
        </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
