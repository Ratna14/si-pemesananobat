<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pemesan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_pemesan" class="col-sm-3 control-label">ID Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_pemesan" value="<?=$data['id_pemesan']?>"class="form-control" id="inputEmail3" placeholder="ID Pemesan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pemesan" class="col-sm-3 control-label">Nama Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemesan" value="<?=$data['nama_pemesan']?>"class="form-control" id="inputEmail3" placeholder="Nama Pemesan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="usia" class="col-sm-3 control-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="usia" value="<?=$data['usia']?>"class="form-control" id="inputEmail3" placeholder="Usia">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2021;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           
                            <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keluhan" class="col-sm-3 control-label">Keluhan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keluhan" value="<?=$data['keluhan']?>" class="form-control" id="inputPassword3" placeholder="Keluhan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resep_obat" class="col-sm-3 control-label">Resep Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="resep_obat" value="<?=$data['resep_obat']?>" class="form-control" id="inputPassword3" placeholder="Resep Obat">
                            </div>
                        </div>
                        <!--Status-->
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pemesan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pemesanan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemesanan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_pemesan=$_POST['id_pemesan'];
    $nama_pemesan=$_POST['nama_pemesan'];
    $usia=$_POST['usia'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tanggal_masuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $alamat=$_POST['alamat'];
    $keluhan=$_POST['keluhan'];
    $resep_obat=$_POST['resep_obat'];
    //buat sql
    $sql="UPDATE pemesanan SET id_pemesan='$id_pemesan',nama_pemesan='$nama_pemesan',usia='$usia',jenis_kelamin='$jenis_kelamin',tanggal_masuk='$tanggal_masuk',alamat='$alamat',keluhan='$keluhan', resep_obat='$resep_obat' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemesanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



