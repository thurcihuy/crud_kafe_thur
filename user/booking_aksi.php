<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$nama_pemesan = $_POST['nama_pemesan'];
$no_hp = $_POST['no_hp'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into pemesan values('','$nama_pemesan','$no_hp')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Pesanan Anda Berhasil Terkirim!');window:location='user.php';</script>";
 
?>