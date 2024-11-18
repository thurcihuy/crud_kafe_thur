<?php 
// koneksi database
include '../config.php';
 
// menangkap data id yang di kirim dari url
$id_pemesan = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pemesan where id_pemesan='$id_pemesan'");
 
// mengalihkan halaman kembali ke user.php
header("location:pemesan.php");