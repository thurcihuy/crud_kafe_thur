<?php 
// koneksi database
include '../config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user where id='$id'");
 
// mengalihkan halaman kembali ke user.php
header("location:user.php");