<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$gambar_produk = $_FILES['gambar_produk']['name'];

if($gambar_produk != ""){
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $gambar_produk);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru);

        $query = "UPDATE produk SET nama_produk = '$nama_produk',harga_produk = '$harga_produk', gambar_produk = '$nama_gambar_baru'";
        $query .= "WHERE id_produk = '$id'";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah!');window:location='produk.php';</script>";
        }

    }else {
        echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='edit_produk.php';</script>";
    }

}else{
    
    $query = "UPDATE produk SET nama_produk = '$nama_produk',harga_produk = '$harga_produk'";
        $query .= "WHERE id_produk = '$id'";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah!');window:location='produk.php';</script>";
        }

}
 
 
?>