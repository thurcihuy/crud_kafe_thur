<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id_pemesan = $_POST['id_pemesan'];
$nama_pemesan = $_POST['nama_pemesan'];
$no_hp = $_POST['no_hp'];
 
// update data ke database
mysqli_query($koneksi,"update pemesan set nama_pemesan='$nama_pemesan', no_hp='$no_hp' where id_pemesan='$id_pemesan'");
 
// mengalihkan halaman kembali ke user.php
header("location:pemesan.php");
 
?>