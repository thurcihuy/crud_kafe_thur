<?php
include('../config.php');

$id_produk = $_GET['id'];
$query = "DELETE FROM produk where id_produk = '$id_produk'";
$result = mysqli_query($koneksi, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus!');window:location='produk.php';</script>";
}

?>