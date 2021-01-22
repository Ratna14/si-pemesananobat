<?php
//membuat query untuk hapus data
$sql="DELETE FROM pemesanan WHERE id ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=pemesanan&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=pemesanan&actions=tampil');</scripr>";
}

