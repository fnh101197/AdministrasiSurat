<!doctype html><?php error_reporting(0) // tambahkan untuk menghilangkan notice... hehe ?>
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
                                    <li><a href="surat-masuk.php">Surat Masuk</a></li>
                                    <li class="active"><a href="surat-keluar.php">Surat Keluar</a></li>
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
                            <h4 class="page-title pull-left">SURAT KELUAR</h4>
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
                                <div class="modal fade bd-example-modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Surat</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <!-- Server side start -->
                                                    <div class="card-body">
                                                        <form class="needs-validation" novalidate="" method="POST" action="tambah-surat-keluar.php" enctype="multipart/form-data">
                                                            <div class="form-row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Kelas Surat</label>
                                                                    
                                                                    <select name="kd_kelas" type="text" class="form-control" id="validationCustom01" placeholder="Kelas Surat" required="">
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
                                                                    <input name="no_surat" type="text" class="form-control" id="validationCustom05" placeholder="No. Surat" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Nomor Surat.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tanggal Surat</label>
                                                                    <input name="tgl_surat" type="date" class="form-control" id="validationCustom05" placeholder="Zip" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="validationCustom05">Perihal</label>
                                                                    <input name="perihal" type="text" class="form-control" id="validationCustom05" placeholder="Perihal" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Perihal.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tanggal Penyampaian</label>
                                                                    <input name="tgl_penyampaian" type="date" class="form-control" id="validationCustom05" placeholder="Zip" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Pengelola</label>
                                                                    <select name="pengelola" type="text" class="form-control" id="validationCustom01" placeholder="pengelola" required="">
                                                                    <?php 
                                                                            include "koneksi.php";
                                                                            $query2=mysql_query("SELECT * FROM subbidang ORDER BY kd_sb");
                                                                                
                                                                            while($var2=mysql_fetch_array($query2)) { 
                                                                        ?>
                                                                        <option><?php echo $var2['nm_sb']; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tujuan</label>
                                                                    <input name="tujuan" type="text" class="form-control" id="validationCustom05" placeholder="Tujuan" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tujuan.
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label class="validationCustom05">Gambar Surat</label>
                                                                    <div class="controls">
                                                                      <input name="gambar" class="form-control" type="file" placeholder="" id="validationCustom05" required="">
                                                                        <div class="invalid-feedback">
                                                                            Pilih File Gambar Surat
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label for="validationCustom05">Tempat Simpan</label>
                                                                    <input name="tempat_simpan" type="text" class="form-control" id="validationCustom05" placeholder="Tempat Simpan" required="">
                                                                    <div class="invalid-feedback">
                                                                        Masukan Tempat Simpan.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Server side end -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <input name="input" class="btn btn-primary" type="submit" value="Tambah"></input>
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
                                <div class="col-md-3 mb-3">
                                    <input type="text" class="form-control" placeholder="cari">
                                </div>
                                <div class="col-auto my-1">
                                <button type="button" class="btn btn-success mb-3">Cari Surat</button>
                                </div> --> 
                                <div class="col-auto my-1">
                                    <a href="export-sk.php" type="button" class="btn btn-success mb-3">Export Data Surat</a>
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
                                        <input type="date" name="keyword" class="form-control" placeholder="Search..." value="<?php echo $_REQUEST['keyword']; ?>">
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
                                            <thead class="text-uppercase bg-success">
                                                <tr class="text-white">
                                                    <th width="2%" scope="col">No</th>
                                                    <th width="10%" scope="col">No & Tgl Surat</th>
                                                    <th width="20%" scope="col">Uraian</th>
                                                    <th width="5%" scope="col">Simpan & Kelas</th>
                                                    <th width="5%" scope="col">Tanggal Penyampaian</th>
                                                    <th width="5%" scope="col">Pengelola</th>
                                                    <th width="5%" scope="col">Tujuan</th>
                                                    <th width="5%" scope="col">Gambar</th>
                                                    <?php if ($_SESSION['level']=='umpeg') { ?>
                                                    <th width="7%" scope="col">Aksi</th>
                                                    <?php }?>
                                                </tr>
                                            </thead>
                                            <?php 
                                        //        includekan fungsi paginasi
                                                include 'paging-sk.php';
                                                include "tgl-indo.php";
                                                include "koneksi.php";
                                        //        mengatur variabel reload dan sql
                                                if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
                                        //        jika ada kata kunci pencarian (artinya form pencarian disubmit dan tidak kosong)
                                        //        pakai ini
                                                    $keyword=$_REQUEST['keyword'];
                                                    $reload = "surat-keluar.php?page=true&keyword=$keyword";
                                                    $sql =  "select * from surat_keluar where concat (kd_sk,no_surat,perihal,tempat_simpan,tgl_penyampaian,pengelola,tujuan) LIKE '%$keyword%' ORDER BY kd_sk DESC";
                                                    $result = mysql_query($sql);
                                                }else{
                                        //            jika tidak ada pencarian pakai ini
                                                    $reload = "surat-keluar.php?page=true";
                                                    $sql =  "SELECT * FROM surat_keluar ORDER BY kd_sk DESC";
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
                                                    <td><?php echo $var['no_surat'];?><hr><?php echo TanggalIndo($var['tgl_surat']);?></td>
                                                    <td><?php echo $var['perihal'];?></td>
                                                    <td><?php echo $var['tempat_simpan'];?><br><hr><?php echo $var['kd_kelas'];?></td>
                                                    <td><?php echo TanggalIndo($var['tgl_penyampaian']);?></td>
                                                    <td><?php echo $var['pengelola'];?></td>
                                                    <td><?php echo $var['tujuan'];?></td>
                                                    <td><a href="assets/images/surat/surat-keluar/<?php echo $var['gambar']; ?>" target="_blank" >Lihat</a></td>
                                                    <?php if ($_SESSION['level']=='umpeg') { ?>
                                                    <td>
                                                        <a href="form-kendali-sk.php?kd_sk=<?php echo $var['kd_sk']; ?>"><i class="fa fa-credit-card" title="kartu kendali"></i></a>
                                                        <a href="hapus-surat-keluar.php?kd_sk=<?php echo $var['kd_sk']; ?>"><i class="ti-trash" title="hapus"  onclick="javascript: return confirm('Anda Yakin Hapus?');" ></i></a>
                                                        <a href="form-edit-surat-keluar.php?kd_sk=<?php echo $var['kd_sk']; ?>"><i class="fa fa-edit" title="edit"></i></a>
                                                    </td>
                                                <?php }?>
                                                </tr>
                                            </tbody>
                                            <?php
                                                $i++; 
                                                $count++;
                                                }
                                                ?>
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
