<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pemesan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="id_pemesan" class="col-sm-3 control-label">ID Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_pemesan" class="form-control" id="inputEmail3" placeholder="Inputkan ID Pemesan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_pemesan" class="col-sm-3 control-label">Nama Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemesan" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pemesan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="usia" class="col-sm-3 control-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="usia" class="form-control" id="inputEmail3" placeholder="Inputkan Usia" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_masuk"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keluhan" class="col-sm-3 control-label">Keluhan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keluhan" class="form-control" id="inputPassword3" placeholder="Inputkan Keluhan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resep_obat" class="col-sm-3 control-label">Resep Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="resep_obat" class="form-control" id="inputPassword3" placeholder="Inputkan Resep Obat" required>
                            </div>
                        </div>

                        <!--Status-->
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pemesan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pemesanan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemesan
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
    $tanggal_masuk=$_POST['tanggal_masuk'];
  $alamat=$_POST['alamat'];
  $keluhan=$_POST['keluhan'];
  $resep_obat=$_POST['resep_obat'];
    //buat sql
    $sql="INSERT INTO pemesanan VALUES ('','$id_pemesan','$nama_pemesan','$usia','$jenis_kelamin','$tanggal_masuk','$alamat','$keluhan','$resep_obat')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemesanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
