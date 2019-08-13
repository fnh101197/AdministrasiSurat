<!doctype html>
<html>
<?php session_start(); ?>
    <?php 
        include 'koneksi.php';
        $kd_sm=$_GET['kd_sm'];
        $query=mysql_query("select * from surat_masuk where kd_sm='$kd_sm'");
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
                            <li>
                                <a href="datauser.php"><i class="fa fa-database"></i><span>Data User</span></a>
                            </li>
                            <li  class="active">
                                <a href=""><i class="fa fa-envelope"></i><span>Surat</span></a>
                                <ul class="collapse">
                                    <li  class="active"><a href="surat-masuk.php">Surat Masuk</a></li>
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
        <div class="col-12 mt-5">
            <div class="card">
                <?php
                    while($row=mysql_fetch_array($query)){
                ?>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" ENCTYPE="multipart/form-data" method="POST" action="edit-surat-masuk.php" name="input">
                    <input type="Hidden" name="kd_sm" value="<?php echo $kd_sm;?>" />
                    <div class="form-row">
                        <?php if ($_SESSION['level']=='umpeg') { ?>
                        <div class="col-3">
                            <label for="validationCustom05">Kelas Surat</label>
                            <select value="<?php echo $row['kd_kelas']; ?>" name="kd_kelas" type="text" class="form-control" id="validationCustom01" required="">
                                <?php 
                                    include "koneksi.php";
                                    $query=mysql_query("SELECT * FROM kelas_surat ORDER BY kd_kelas");
                                                                                
                                    while($var=mysql_fetch_array($query)) { 
                                ?>
                                    <option><?php echo $var['kd_kelas']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Nomor Surat</label>
                            <input value="<?php echo $row['no_surat']; ?>" type="text" class="form-control" id="validationCustom05" placeholder="No. Surat" name="no_surat" required="">
                            <div class="invalid-feedback">
                                Masukan Nomor Surat.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Tanggal Surat</label>
                            <input value="<?php echo $row['tgl_surat']; ?>" type="date" class="form-control" id="validationCustom05" placeholder="Zip" name="tgl_surat" required="">
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Tanggal Terima</label>
                            <input value="<?php echo $row['tgl_terima']; ?>" type="date" class="form-control" id="validationCustom05" placeholder="Zip" name="tgl_terima" required="">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-6">
                            <label for="validationCustom05">Perihal</label>
                            <input value="<?php echo $row['perihal']; ?>" type="text" class="form-control" id="validationCustom05" placeholder="Perihal Surat" name="perihal" required="">
                            <div class="invalid-feedback">
                                Masukan Perihal Surat.
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Asal</label>
                            <input value="<?php echo $row['asal']; ?>" type="text" class="form-control" id="validationCustom05" placeholder="Asal Surat" name="asal" required="">
                            <div class="invalid-feedback">
                                Masukan asal surat
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Tanggal Penyampaian</label>
                            <input value="2018-03-05" type="date" class="form-control" id="validationCustom05" placeholder="Zip" name="tgl_penyampaian" required="">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-6">
                            <label for="validationCustom05">Isi Disposisi</label>
                            <input value="<?php echo $row['isi_disposisi']; ?>" type="text" class="form-control" id="validationCustom05" placeholder="Isi Disposisi" name="isi_disposisi" required="">
                            <div class="invalid-feedback">
                                Masukan Isi Disposisi.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Tanggal Pelaksanaan</label>
                            <input name="tgl_pelaksanaan" type="date" class="form-control" id="validationCustom05" placeholder="Zip" required="" value="<?php echo $row['tgl_pelaksanaan']; ?>">
                            <div class="invalid-feedback">
                                 Masukan Tanggal Pelaksanaan.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Jam Pelaksanaan</label>
                            <input name="jam_pelaksanaan" class="form-control" type="time" value="<?php echo $row['jam_pelaksanaan']; ?>" id="validationCustom05" required="">
                            <div class="invalid-feedback">
                                Masukan Jam Pelaksanaan.
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <br>
                    <div class="form-row">
                        <?php if ($_SESSION['level']=='sekdis') { ?>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Pengelola</label>
                            <select name="pengelola" type="text" class="form-control" id="validationCustom01" required="" value="">
                                <option><?php echo $row['pengelola']; ?></option>
                                <option>--------------PILIH DIBAWAH UNTUK GANTI----------------</option>
                                <?php 
                                    include "koneksi.php";
                                    $query=mysql_query("SELECT * FROM subbidang ORDER BY kd_sb");
                                                                                
                                    while($var=mysql_fetch_array($query)) { 
                                ?>
                                <option><?php echo $var['nm_sb']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['level']=='umpeg') { ?>
                        <div class="col-3">
                            <label for="validationCustom05">Tempat</label>
                            <input value="<?php echo $row['tempat']; ?>" type="text" class="form-control" id="validationCustom05" placeholder="Isi Tempat" name="tempat" required="">
                            <div class="invalid-feedback">
                                Masukan Isi Tempat Pelaksanaan.
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="validationCustom05">Gambar Surat</label>
                            <div class="controls">
                                <input value="assets/images/surat/surat-masuk/<?php echo $row['gambar']; ?>" name="gambar" class="form-control" type="file"  placeholder="" id="validationCustom05">
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="validationCustom05">Terima</label>
                            <select value="<?php echo $row['terima']; ?>" name="terima" type="text" class="form-control" id="validationCustom01" required="">
                                <option><?php echo $row['terima']; ?></option>
                                <option>------------------Ubah------------------</option>
                                <option>Sudah</option>
                                <option>Belum</option>
                            </select>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="edit-surat-masuk">
                    </form>
                <?php } ?>
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
