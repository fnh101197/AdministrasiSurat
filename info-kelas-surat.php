<?php session_start(); ?>
<!doctype html>

<html>
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
                                <a href="beranda.php"><i class="fa fa-home"></i><span>Home</span></a>
                            </li>
                            <?php if ($_SESSION['level']=='umpeg') { ?>
                            <li>
                                <a href="datauser.php"><i class="fa fa-database"></i><span>Data User</span></a>
                            </li>
                            <?php } ?>
                            <li class="active">
                                <a href=""><i class="fa fa-info-circle"></i><span>Informasi</span></a>
                                <ul class="collapse">
                                    <li><a href="info-bidang.php">Info Bidang</a></li>
                                    <li class="active"><a href="info-kelas-surat.php">Info Kelas Surat</a></li>
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
                                <a href="logout.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a>
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
                            <h4 class="page-title pull-left">INFO KELAS SURAT</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Aplikasi Administrasi Surat Masuk dan Surat Keluar</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle"><?php echo $_SESSION['nama']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                <?php if ($_SESSION['level']=='umpeg') { ?>
                                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kelas Surat</button>
                                <?php } ?>
                                <!-- Large modal start -->
                                <!-- Large modal -->
                                <div class="modal fade bd-example-modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Kelas Surat</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <!-- Server side start -->
                                                <div class="card-body">
                                                    <form class="needs-validation" novalidate="" method="POST" action="tambah-kelas.php" name="input" enctype="multipart/form-data">
                                                            <div class="form-row">
                                                                <label for="validationCustom05">Kode Kelas</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Kode Kelas" name="kd_kelas" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Kode Kelas Surat
                                                                    </div>

                                                            </div>
                                                            <br>
                                                            <div class="form-row">
                                                                <label for="validationCustom05">Nama Kelas</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Nama Kelas" name="nm_kelas" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Nama Kelas
                                                                    </div>
                                                                    
                                                            </div>
                                                            <!-- Server side end -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" name="input" value="Tambah">
                                                        </form>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Kode Kelas</th>
                                                    <th scope="col">Nama Kelas</th>
                                                    <?php if ($_SESSION['level']=='umpeg') { ?>
                                                    <th scope="col">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <?php 
                                                include "koneksi.php";

                                                $query=mysql_query("SELECT * FROM kelas_surat ORDER BY kd");

                                                $no = 0;
                                                while($var=mysql_fetch_array($query)) { 
                                                $no++;
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $no?></td>
                                                    <td><?php echo $var['kd_kelas']; ?></td>
                                                    <td><?php echo $var['nm_kelas']; ?></td>
                                                    <td>
                                                        <?php if ($_SESSION['level']=='umpeg') { ?>
                                                        <a href="hapus-kelas.php?kd=<?php echo $var['kd']; ?>"><i class="ti-trash" title="hapus"  onclick="javascript: return confirm('Anda Yakin Hapus?');" ></i></a>
                                                        <a href="form-edit-kelas.php?kd=<?php echo $var['kd']; ?>" ><i class="fa fa-edit" title="edit"></i>  
                                                        </a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- page title area end -->
    <div class="main-content-inner">
        <div>
            
        </div>
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
    <!-- start chart js -->
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>