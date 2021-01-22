<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="id_obat" class="col-sm-3 control-label">ID Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_obat" class="form-control" id="inputEmail3" placeholder="Inputkan ID Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenis_obat" class="col-sm-3 control-label">Jenis Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="dosis_obat" class="col-sm-3 control-label">Dosis Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="dosis_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Dosis Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_masuk"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="resep_obat" class="col-sm-3 control-label">Resep Obat</label>
                            <div class="col-sm-3">
                                <input type="text" name="resep_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Resep Obat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_pemesan" class="col-sm-3 control-label">Nama Pemesan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemesan" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Pemesan" required>
                            </div>
                        </div>

                        <!--Status-->
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Obat</button>
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
	$idobat=$_POST['id_obat'];
	$namaobat=$_POST['nama_obat'];
	$jenisobat=$_POST['jenis_obat'];
    $dosisobat=$_POST['dosis_obat'];
	$tanggalmasuk=$_POST['tanggal_masuk'];
    $resepobat=$_POST['resep_obat'];
    $namapemesan=$_POST['nama_pemesan'];
    //buat sql
    $sql="INSERT INTO obat VALUES ('','$idobat','$namaobat','$jenisobat','$dosisobat','$tanggalmasuk','$resepobat','$namapemesan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
