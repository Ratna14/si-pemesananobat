<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM obat WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Obat</td> <td><?= $data['id_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Obat</td> <td><?= $data['jenis_obat'] ?></td>
                        </tr>
						<tr>
                            <td>Dosis Obat</td> <td><?= $data['dosis_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tanggal_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Resep Obat</td> <td><?= $data['resep_obat'] ?></td>
                        </tr>
						<tr>
                            <td>Nama Pemesan</td> <td><?= $data['nama_pemesan'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Obat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

