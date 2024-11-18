<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update user set nama='$nama', username='$username', password='$password' where id='$id'");
 
// mengalihkan halaman kembali ke user.php
header("location:user.php");
 
?>