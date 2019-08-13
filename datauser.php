<!doctype html>
<html><?php session_start(); ?>
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
                            <h4 class="page-title pull-left">DATA USER</h4>
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
                    <div class="card">
                        <div class="card">
                            <div class="card-body">
                            <div>
                                <button type="button" class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah User</button>
                                <!-- Large modal start -->
                                <div class="modal fade bd-example-modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah User</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <!-- Server side start -->
                                                    <div class="card-body">
                                                        <form class="needs-validation" novalidate="" method="POST" action="tambah_user.php" name="input">
                                                            <div class="form-row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Nama</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Nama" name="nama" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Nomor Nama
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Username</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Username" name="username" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Username.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Password</label>
                                                                    <input type="password" class="form-control" id="validationCustom05" placeholder="Password" name="password" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Password.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Level</label>
                                                                    <select name="level" type="text" class="form-control" id="validationCustom01" required="">
                                                                        <option>umpeg</option>
                                                                        <option>sekdis</option>
                                                                        <option>kadis</option>
                                                                        <option>subbidang</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- Server side end -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <input class="btn btn-primary" type="submit" value="Tambah" name="input">
                                                        </form>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Large modal modal end -->
                            </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Level</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <?php include "koneksi.php";
                                                $query=mysql_query("SELECT * FROM user ORDER BY kd_user");
                                                $no=0;
                                                while($var=mysql_fetch_array($query)) {
                                                $no++; 
                                             ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><?php echo $no; ?></th>
                                                    <td><?php echo $var['nama'];?></td>
                                                    <td><?php echo $var['username'];?></td>
                                                    <td><?php echo $var['level'];?></td>
                                                    <td>
                                                        <a href="hapus_user.php?kd_user=<?php echo $var['kd_user']; ?>"><i class="ti-trash" title="hapus"  onclick="javascript: return confirm('Anda Yakin Hapus?');" ></i></a>
                                                        <a href="form-edit-user.php?kd_user=<?php echo $var['kd_user']; ?>" ><i class="fa fa-edit" title="edit"></i>  
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <div class="main-content-inner">
        <!-- table primary start -->
                    <!-- table primary end -->
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
