<?php

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

include'../config.php';

$sql = "INSERT INTO user(nama,username,password,level) VALUES('$nama','$username','$password','$level')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:user.php");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window,location.assign('user.php');<script>";
}