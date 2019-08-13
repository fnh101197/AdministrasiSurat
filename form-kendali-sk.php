<!doctype html>
<html>
<?php session_start(); ?>
<?php 
    include "koneksi.php";
        $kd_sk=$_GET['kd_sk'];
        $query=mysql_query("SELECT
            surat_keluar.pengelola,
            kk_sk.indeks,
            kk_sk.indeks,
            kk_sk.catatan,
            kk_sk.lampiran
            FROM surat_keluar
            LEFT JOIN kk_sk ON surat_keluar.kd_sk=kk_sk.kd_sk
            WHERE kk_sk.kd_sk='$kd_sk'");
?>
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
                                <a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
                            </li>
                            <li>
                                <a href="datauser.php"><i class="fa fa-database"></i><span>Data User</span></a>
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
                                    <li><a href="surat-masuk.php">Surat Masuk</a></li>
                                    <li  class="active"><a href="surat-keluar.php">Surat Keluar</a></li>
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
                            <h4 class="page-title pull-left">KARTU KENDALI SURAT KELUAR</h4>
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
                        include 'tgl-indo.php';
                            $kd_sk= $_GET['kd_sk'];
                            $query2=mysql_query("SELECT
                                pengelola,perihal,kd_sk
                                FROM surat_keluar WHERE kd_sk='$kd_sk'");
                    ?>
                    <?php
                        $row2=mysql_fetch_array($query2);
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Perihal</h4>
                        <p><?php echo $row2['perihal']; ?></p>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                            <label for="validationCustom05">Indeks</label>
                            <input value="<?php echo $row['indeks']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" required="" disabled>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Pengelola</label>
                            <input value="<?php echo $row2['pengelola']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" required="" disabled>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">catatan</label>
                            <input value="<?php echo $row['catatan']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" disabled>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">lampiran</label>
                            <input value="<?php echo $row['lampiran']; ?>" type="text" class="form-control" id="validationCustom05" name="indeks" required="" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div><p>1. Kartu kendali belum dibuat saat Indeks, Catatan dan Lampiran kosong<br>
                                2. Tambah kartu kendali untuk isi Indeks, Catatan dan Lampiran<br>
                        </p></div>
                    </div>
                    <div class="modal-footer">
                        <a href="" type="submit" class="btn btn-primary mt-4 pr-4 pl-4" data-toggle="modal" data-target=".bd-indeks-modal-lg">TAMBAH</a>
                        <a href="edit-kk-sk.php?kd_sk=<?php echo $row2['kd_sk']; ?>" target="/blank" type="submit" class="btn btn-primary mt-4 pr-4 pl-4" data-toggle="modal" data-target=".bd-editkk-modal-lg">EDIT</a>
                        <a href="hapus-kendali-sk.php?kd_sk=<?php echo $row2['kd_sk']; ?>" onclick="javascript: return confirm('Anda Yakin Hapus?');" type="submit" class="btn btn-primary mt-4 pr-4 pl-4">HAPUS</a>
                        <a href="cetak-kk-sk.php?kd_sk=<?php echo $row2['kd_sk']; ?>" target="/blank" type="submit" class="btn btn-primary mt-4 pr-4 pl-4">CETAK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-indeks-modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TAMBAH KARTU KENDALI</h5>
                    <button type="button" class="close" data-d</span></button>
               </div>
                    <!-- Server side start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="POST" action="tambah-kendali-sk.php" name="input" enctype="multipart/form-data">
                                <input type="hidden" name="kd_sk" value="<?php echo $kd_sk;?>" />
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Indeks</label>
                                        <input name="indeks" type="text" class="form-control" id="validationCustom05" placeholder="Indeks" required="">
                                        <div class="invalid-feedback">
                                            Masukan Indeks
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Catatan</label>
                                        <input name="catatan" type="text" class="form-control" id="validationCustom05" placeholder="catatan" required="">
                                        <div class="invalid-feedback">
                                            Masukan Catatan
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label for="validationCustom05">Lampiran</label>
                                        <input name="lampiran" type="text" class="form-control" id="validationCustom05" placeholder="Lampiran" required="">
                                        <div class="invalid-feedback">
                                            Masukan Jumlah Lampiran
                                        </div>
                                    </div>
                                </div>
                                <br>
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
    <div class="modal fade bd-editkk-modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT KARTU KENDALI</h5>
                    <button type="button" class="close" data-d</span></button>
                </div>
                    <!-- Server side start -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="POST" action="edit-kk-sk.php" name="input" enctype="multipart/form-data">
                            <input type="hidden" name="kd_sk" value="<?php echo $kd_sk;?>" />
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Indeks</label>
                                        <input name="indeks" type="text" class="form-control" id="validationCustom05" placeholder="Indeks" required="" value="<?php echo $row['indeks']; ?>">
                                        <div class="invalid-feedback">
                                            Masukan Indeks
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-8">
                                        <label for="validationCustom05">Catatan</label>
                                        <input name="catatan" type="text" class="form-control" id="validationCustom05" placeholder="catatan" required="" value="<?php echo $row['catatan']; ?>">
                                        <div class="invalid-feedback">
                                            Masukan Catatan
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label for="validationCustom05">Lampiran</label>
                                        <input name="lampiran" type="text" class="form-control" id="validationCustom05" placeholder="Lampiran" required="" value="<?php echo $row['lampiran']; ?>">
                                        <div class="invalid-feedback">
                                            Masukan Jumlah Lampiran
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
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>