<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM obat WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pemesanan Obat Apotek Sehat Tanjungbalai </h2>
                        <h4>Jalan Jendral Sudirman No. 27br> Tanjungbalai, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA OBAT</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>ID Obat</td> <td><?= $data['id_obat'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staff Apotek Sehat<strong></u      
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>