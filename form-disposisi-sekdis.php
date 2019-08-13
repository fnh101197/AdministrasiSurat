<!doctype html><?php error_reporting(0)?>
<html>
<?php session_start(); ?>
    <?php 
    include "koneksi.php";
    include "tgl-indo.php";
        $kd_sm=$_GET['kd_sm'];
        $query=mysql_query("SELECT
            surat_masuk.kd_sm,
            surat_masuk.isi_disposisi,
            disposisi.indeks,
            disposisi.pengelola,
            disposisi.instruksi,
            disposisi.tgl_diteruskan,
            disposisi.kd_sm,
            disposisi.kd_disposisi

            FROM disposisi
            LEFT JOIN surat_masuk ON surat_masuk.kd_sm=disposisi.kd_sm
            WHERE Disposisi.kd_sm='$kd_sm'");
    ?>
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
                            <li>
                                <a href=""><i class="fa fa-info-circle"></i><span>Informasi</span></a>
                                <ul class="collapse">
                                    <li><a href="info-bidang.php">Info Bidang</a></li>
                                    <li><a href="info-kelas-surat.php">Info Kelas Surat</a></li>
                                </ul>
                            </li>
                            <li  class="active">
                                <a href=""><i class="fa fa-envelope"></i><span>Surat</span></a>
                                <ul class="collapse">
                                    <li  class="active"><a href="surat-masuk.php">Surat Masuk</a></li>
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
                            <h4 class="page-title pull-left">Disposisi</h4>
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
            <?php
                $row=mysql_fetch_array($query);
            ?>
    <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <?php 
                        include "koneksi.php";
                            $kd_sm= $_GET['kd_sm'];
                            $query2=mysql_query("SELECT

                                isi_disposisi,kd_sm
                                FROM surat_masuk WHERE kd_sm='$kd_sm'");
                        ?>
                        <?php
                            $row2=mysql_fetch_array($query2);
                        ?>
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Informasi Disposisi</h4>
                        <p><?php echo $row2['isi_disposisi']; ?></p>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-3">
                            <label for="validationCustom05">Kode Disposisi</label>
                            <input value="<?php echo $row['kd_disposisi']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" disabled>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Pengelola</label>
                            <input value="<?php echo $row['pengelola']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" disabled>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Indeks</label>
                            <input value="<?php echo $row['indeks']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" required="" disabled>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Instruksi</label>
                            <input value="<?php echo $row['instruksi']; ?>" type="text" class="form-control" id="validationCustom05" name="instruksi" required="" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-3">
                            <label for="validationCustom05">Tanggal Diteruskan</label>
                            <input value="<?php echo TanggalIndo($row['tgl_diteruskan']); ?>" type="text" class="form-control" id="validationCustom05" name="tgl_diteruskan" required="" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <a href="tambah-disposisi-sekdis.php" type="submit" class="btn btn-primary mt-4 pr-4 pl-4" data-toggle="modal" data-target=".bd-indeks-modal-lg">EDIT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Large modal -->
    <div class="modal fade bd-indeks-modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Disposisi</h5>
                    <button type="button" class="close" data-d</span></button>
               </div>
                    <!-- Server side start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="POST" action="tambah-disposisi-sekdis.php" name="input" enctype="multipart/form-data">
                            <input type="hidden" name="kd_disposisi" value="<?php echo $row['kd_disposisi']; ?>" />
                            <input type="hidden" name="kd_sm" value="<?php echo $kd_sm;?>" />
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Pengelola</label>
                                        <select name="pengelola" type="text" class="form-control" id="validationCustom01" required="">
                                            <?php 
                                                include "koneksi.php";
                                                $query=mysql_query("SELECT * FROM subbidang ORDER BY kd_sb");
                                                                                
                                                while($var=mysql_fetch_array($query)) { 
                                            ?>
                                            <option><?php echo $var['nm_sb']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="valid-feedback">
                                            Pastikan Pengelola
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="validationCustom05">Tanggal Diteruskan</label>
                                        <input type="date" class="form-control" id="validationCustom05" placeholder="Zip" name="tgl_diteruskan" required="" value="<?php echo date("Y-m-d");?>">
                                        <div class="invalid-feedback">
                                        Masukan Tanggal Surat.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Instruksi</label>
                                        <input name="instruksi" type="text" class="form-control" id="validationCustom05" placeholder="Masukan Instruksi" value="<?php echo $row['instruksi']; ?>">
                                    </div>
                                </div>
                                <br>
                                <!-- Server side end -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input class="btn btn-primary" type="submit" name="input" value="EDIT">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Large modal modal end -->  
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