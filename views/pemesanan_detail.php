<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pemesanan Obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pemesanan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Pemesan</td> <td><?= $data['id_pemesan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pemesan</td> <td><?= $data['nama_pemesan'] ?></td>
                        </tr>
                        <tr>
                            <td>Usia</td> <td><?= $data['usia'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tanggal_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Keluhan</td> <td><?= $data['keluhan'] ?></td>
                        </tr>
                        <tr>
                            <td>Resep Obat</td> <td><?= $data['resep_obat'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pemesanan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pemesanan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

