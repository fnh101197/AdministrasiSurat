<?php 
                                                include "koneksi.php";
                                                include "tgl-indo.php";
                                                if (isset($_GET['cari'])) {
                                                    $cari = $_GET['cari'];
                                                    $query = mysql_query("select * from surat_masuk where kd_sm like '%".$cari."%'");
                                                }else{
                                                $query=mysql_query("SELECT * FROM surat_masuk ORDER BY kd_sm");
                                                }
                                                $no = 1;
                                                while($var=mysql_fetch_array($query)) { 
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" width="2%"><?php echo $var['kd_sm']; ?></th>
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
                                            </tbody>
                                            <?php } ?>