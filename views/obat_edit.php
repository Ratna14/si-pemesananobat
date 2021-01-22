<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM obat WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_obat" class="col-sm-3 control-label">ID Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_obat" value="<?=$data['id_obat']?>"class="form-control" id="inputEmail3" placeholder="ID Obat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" value="<?=$data['nama_obat']?>"class="form-control" id="inputEmail3" placeholder="Nama Obat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jenis_obat" class="col-sm-3 control-label">Jenis Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_obat" value="<?=$data['jenis_obat']?>"class="form-control" id="inputEmail3" placeholder="Jenis Obat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="dosis_obat" class="col-sm-3 control-label">Dosis Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="dosis_obat" value="<?=$data['dosis_obat']?>"class="form-control" id="inputEmail3" placeholder="Dosis Obat">
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
                            <label for="resep_obat" class="col-sm-3 control-label">Resep Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="resep_obat" value="<?=$data['resep_obat']?>" class="form-control" id="inputPassword3" placeholder="Resep Obat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pemesan" class="col-sm-3 control-label">Nama Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemesan" value="<?=$data['nama_pemesan']?>" class="form-control" id="inputPassword3" placeholder="Nama Pemesan">
                            </div>
                        </div>
                        <!--Status-->
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Obat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Obat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_obat=$_POST['id_obat'];
    $nama_obat=$_POST['nama_obat'];
	$jenis_obat=$_POST['jenis_obat'];
    $dosis_obat=$_POST['dosis_obat'];
    $tanggal_masuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $resep_obat=$_POST['resep_obat'];
	$nama_pemesan=$_POST['nama_pemesan'];
    //buat sql
    $sql="UPDATE obat SET id_obat='$id_obat',nama_obat='$nama_obat',jenis_obat='$jenis_obat',dosis_obat='$dosis_obat',tanggal_masuk='$tanggal_masuk',resep_obat='$resep_obat',nama_pemesan='$nama_pemesan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



