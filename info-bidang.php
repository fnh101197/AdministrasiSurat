<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Aplikasi Administrasi Surat</title>
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
                                    <li class="active"><a href="info-bidang.php">Info Bidang</a></li>
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
                            <h4 class="page-title pull-left">INFO BIDANG</h4>
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
                                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Bidang</button>
                                <?php } ?>
                                <!-- Large modal start -->
                                <!-- Large modal -->
                                <div class="modal fade bd-example-modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Bidang</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <!-- Server side start -->
                                                <div class="card-body">
                                                    <form class="needs-validation" novalidate="" method="POST" action="tambah-info-bidang.php" name="input" enctype="multipart/form-data">
                                                            <div class="form-row">
                                                                <label for="validationCustom05">Nama Bidang</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Nama Lengkap" name="nm_lengkap_sb" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Nama Bidang.
                                                                    </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-row">
                                                                <label for="validationCustom05">Singkatan</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Singkatan" name="nm_sb" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Singkatan.
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
                                                    <th scope="col">Nama Bidang</th>
                                                    <th scope="col">Singkatan</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                include "koneksi.php";

                                                $query=mysql_query("SELECT * FROM subbidang ORDER BY kd_sb");

                                                $no = 0;
                                                while($var=mysql_fetch_array($query)) {
                                                $no++ 
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $var['nm_sb']; ?></td>
                                                    <td><?php echo $var['nm_lengkap_sb']; ?></td>
                                                    <td>
                                                        <?php if ($_SESSION['level']=='umpeg') { ?>
                                                        <a href="hapus-info-bidang.php?kd_sb=<?php echo $var['kd_sb']; ?>"><i class="ti-trash" title="hapus"  onclick="javascript: return confirm('Anda Yakin Hapus?');" ></i></a>
                                                        <a href="form-edit-bidang.php?kd_sb=<?php echo $var['kd_sb']; ?>"><i class="fa fa-edit" title="edit"></i>  
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
    <?php
        $row=mysql_fetch_array($query);
    ?>
    <div class="modal fade bd-edit-modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Bidang</h5>
                    <button type="button" class="close" data-d</span></button>
                </div>
                    <!-- Server side start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="POST" action="edit-bidang.php" name="input" enctype="multipart/form-data">
                            <input type="" name="kd_sb" value="<?php echo $row['kd_sb'];?>">
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Nama Bidang</label>
                                        <input name="nm_lengkap_sb" type="text" class="form-control" id="validationCustom05" placeholder="Nama Bidang" required="" value="<?php echo $row['nm_lengkap_sb']; ?>">
                                        <div class="invalid-feedback">
                                            Masukan Nama Bidang
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Nama Singkatan</label>
                                        <input name="nm_sb" type="text" class="form-control" id="validationCustom05" placeholder="Nama Bidang" required="" value="<?php echo $row['nm_sb']; ?>">
                                        <div class="invalid-feedback">
                                            Masukan Singkatan
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Server side end -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input class="btn btn-primary" type="submit" name="input" value="Edit">
                                </div>
                        </form>
                    </div>
            </div>
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