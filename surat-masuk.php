<!doctype html><?php error_reporting(0) // tambahkan untuk menghilangkan notice... hehe ?>
<html>
<?php session_start(); ?>
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
                            <li>
                                <a href=""><i class="fa fa-info-circle"></i><span>Informasi</span></a>
                                <ul class="collapse">
                                    <li><a href="info-bidang.php">Info Bidang</a></li>
                                    <li><a href="info-kelas-surat.php">Info Kelas Surat</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href=""><i class="fa fa-envelope"></i><span>Surat</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="surat-masuk.php">Surat Masuk</a></li>
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
                            <h4 class="page-title pull-left">SURAT MASUK</h4>
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
                                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Surat</button>
                                <?php } ?>
                                <!-- Large modal start -->
                                <!-- Large modal -->
                                <div class="modal fade bd-example-modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Surat</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <!-- Server side start -->
                                                <div class="card-body">
                                                    <form class="needs-validation" novalidate="" method="POST" action="tambah-surat-masuk.php" name="input" enctype="multipart/form-data">
                                                            <div class="form-row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Kelas Surat</label>
                                                                    <select name="kd_kelas" type="text" class="form-control" id="validationCustom01" required="">
                                                                        <?php 
                                                                            include "koneksi.php";
                                                                            $query=mysql_query("SELECT * FROM kelas_surat ORDER BY kd_kelas");
                                                                                
                                                                            while($var=mysql_fetch_array($query)) { 
                                                                        ?>
                                                                        <option><?php echo $var['kd_kelas']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Nomor Surat</label>
                                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="No. Surat" name="no_surat" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Nomor Surat.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tanggal Surat</label>
                                                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Zip" name="tgl_surat" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tanggal Surat.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tanggal Terima</label>
                                                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Zip" name="tgl_terima" required="" value="<?php echo date("Y-m-d");?>">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tanggal Terima.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Asal</label>
                                                                    <input name="asal" type="text" class="form-control" id="validationCustom05" placeholder="Asal" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Asal.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="validationCustom05">Perihal</label>
                                                                    <input name="perihal" type="text" class="form-control" id="validationCustom05" placeholder="Perihal" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Perihal.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tanggal Penyampaian</label>
                                                                    <input name="tgl_penyampaian" type="date" class="form-control" id="validationCustom05" placeholder="Zip" required="" value="<?php echo date("Y-m-d");?>">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tanggal Penyampaian.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tanggal Pelaksanaan</label>
                                                                    <input name="tgl_pelaksanaan" type="date" class="form-control" id="validationCustom05" placeholder="Zip" required="" value="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tanggal Pelaksanaan.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Jam Pelaksanaan</label>
                                                                    <input name="jam_pelaksanaan" class="form-control" type="time" value="" id="validationCustom05" required="" value="13:45:00">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Jam Pelaksanaan.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tempat Pelaksanaan</label>
                                                                    <input name="tempat" type="text" class="form-control" id="validationCustom05" placeholder="Tempat Pelaksanaan" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tempat Pelaksanaan.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label class="validationCustom05">Gambar Surat</label>
                                                                    <div class="controls">
                                                                      <input name="gambar" class="form-control" type="file"  placeholder="" id="validationCustom05" required="">
                                                                        <div class="invalid-feedback">
                                                                            Pilih File Gambar Surat (Max. 1MB)
                                                                        </div>
                                                                        <div class="valid-feedback">
                                                                            Max. 1MB
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="validationCustom05">Isi Disposisi</label>
                                                                    <input name="isi_disposisi" type="text" class="form-control" id="validationCustom05" placeholder="Isi Disposisi" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Isi Disposisi.
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <label for="validationCustom05">Terima</label>
                                                                    <select name="terima" type="text" class="form-control" id="validationCustom05" required="">
                                                                        <option>belum</option>
                                                                        <option>sudah</option>
                                                                    </select>
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
                                <!-- Large modal modal end -->
                                <!-- <div class="col-auto my-1">
                                <button type="button" class="btn btn-success mb-3">Export Surat</button>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <input type="text" class="form-control" placeholder="cari" name="cari">
                                </div>
                                <div class="col-auto my-1">
                                    <input type="submit" value="Cari Surat" class="btn btn-success mb-3"> 
                                </div> -->
                                <div class="col-auto my-1">
                                    <a href="export-sm.php" type="button" class="btn btn-success mb-3">Export Data Surat</a>
                                </div>
                                <form>
                                    <div class="form-group input-group">
                                        <input type="text" name="keyword" class="form-control" placeholder="Search..." value="<?php echo $_REQUEST['keyword']; ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Cari
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <form>
                                    <div class="form-group input-group col-auto">
                                        <!-- <input type="text" name="keyword" class="form-control" placeholder="Search..." value=""> -->
                                        <input type="date" name="keyword" class="form-control" value="<?php echo $_REQUEST['keyword']; ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Filter
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">NO</th>
                                                    <th scope="col" width="15%">No. & Kelas Surat</th>
                                                    <th scope="col">Asal</th>
                                                    <th scope="col" width="30%">Uraian</th>
                                                    <th scope="col">Waktu</th>
                                                    <th scope="col">Tempat</th>
                                                    <th scope="col">Terima</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                        //        includekan fungsi paginasi
                                                include 'paging-sm.php';
                                                include "tgl-indo.php";
                                                include "koneksi.php";
                                        //        mengatur variabel reload dan sql
                                                if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
                                        //        jika ada kata kunci pencarian (artinya form pencarian disubmit dan tidak kosong)
                                        //        pakai ini
                                                    $keyword=$_REQUEST['keyword'];
                                                    $reload = "surat-masuk.php?page=true&keyword=$keyword";
                                                    $sql =  "SELECT * FROM surat_masuk WHERE concat (kd_sm,no_surat,asal,perihal,tgl_pelaksanaan,jam_pelaksanaan,tempat) LIKE '%$keyword%' ORDER BY kd_sm DESC";
                                                    $result = mysql_query($sql);
                                                }else{
                                        //            jika tidak ada pencarian pakai ini
                                                    $reload = "surat-masuk.php?page=true";
                                                    $sql =  "SELECT * FROM surat_masuk ORDER BY kd_sm DESC";
                                                    $result = mysql_query($sql);
                                                }
                                                
                                                //pagination config start
                                                $rpp = 10; // jumlah record per halaman
                                                $page = intval($_GET["page"]);
                                                if($page<=0) $page = 1;  
                                                $tcount = mysql_num_rows($result);
                                                $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
                                                $count = 0;
                                                $i = ($page-1)*$rpp;
                                                $no_urut = ($page-1)*$rpp;
                                                //pagination config end
                                            ?>
                                            <?php
                                            while(($count<$rpp) && ($i<$tcount)) {
                                                mysql_data_seek($result,$i);
                                                $var = mysql_fetch_array($result);
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" width="2%"><?php echo ++$no_urut?></th>
                                                    <td><?php echo $var['no_surat']; ?><hr><?php echo $var['kd_kelas']; ?></td>
                                                    <td><?php echo $var['asal']; ?></td>
                                                    <td><?php echo $var['perihal']; ?></td>
                                                    <td width="15%"><?php echo TanggalIndo($var['tgl_pelaksanaan']);?><br><?php echo $var['jam_pelaksanaan'];?></td>
                                                    <td><?php echo $var['tempat']; ?></td>
                                                    <td><?php echo $var['terima']; ?></td>
                                                    <td><a href="assets/images/surat/surat-masuk/<?php echo $var['gambar']; ?>" target="_blank" >Lihat</a></td>
                                                    <td>
                                                        <?php if ($_SESSION['level']=='umpeg') { ?>
                                                        <a href="form-kendali-sm.php?kd_sm=<?php echo $var['kd_sm']; ?>"><i class="fa fa-credit-card" title="kartu kendali"></i></a>
                                                        <!-- Disposisi Start -->
                                                        <a href="form-disposisi-umpeg.php?kd_sm=<?php echo $var['kd_sm']; ?>"><i class="fa fa-file" title="Disposisi" data-toggle="modal" data-target=".bd-example-modal-lg"></i></a>
                                                        <!-- Disposisi End -->
                                                        <a href="hapus-surat-masuk.php?kd_sm=<?php echo $var['kd_sm']; ?>"><i class="ti-trash" title="hapus"  onclick="javascript: return confirm('Anda Yakin Hapus?');" ></i></a>
                                                        <a href="form-edit-surat-masuk.php?kd_sm=<?php echo $var['kd_sm']; ?>" ><i class="fa fa-edit" title="edit"></i>  
                                                        </a>
                                                        <?php } ?>
                                                        <?php if ($_SESSION['level']=='sekdis') { ?>
                                                        <!-- Disposisi Start -->
                                                        <a href="form-disposisi-sekdis.php?kd_sm=<?php echo $var['kd_sm']; ?>"><i class="fa fa-file" title="Disposisi" data-toggle="modal" data-target=".bd-example-modal-lg"></i></a>
                                                        <!-- Disposisi End -->
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++; 
                                                $count++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        </div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <div class="main-content-inner">

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
