<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pemesanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail obat-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                     <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pemesanan Obat Apotek Sehat Tanjungbalai </h2>
                        <h4>Jalan Jendral Sudirman No. 27<br> Tanjungbalai, Sumatera Utara, 21231</h4>
                        <hr>
                        <h3>DATA SELURUH PEMESAN OBAT</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th width="18%">ID Pemesan</th>
                                    <th>Nama Pemesan</th><th width="14%">
                                    <center> Usia</center></th>
                                    <th width="15%"><center>Jenis Kelamin</center>
                                    </th><th width="10%">Tanggal Masuk</th><th>
                                    <center>Alamat</center>
                                    </th><th>
                                    <center>Keluhan</center></th>
                                   <th><center>Resep Obat</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pemesanan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id_pemesan'] ?></td>
									<td><?= $data['nama_pemesan'] ?></td>
                                    <td><?= $data['usia'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['tanggal_masuk'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['keluhan'] ?></td>
                                    <td><?= $data['resep_obat'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staff Apotek Sehat<strong></u><br>
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
