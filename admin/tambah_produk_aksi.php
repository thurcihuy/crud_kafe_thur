<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
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

        $query = "INSERT INTO produk (nama_produk, harga_produk, gambar_produk) VALUES ('$nama_produk', '$harga_produk',
        '$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambahkan!');window:location='produk.php';</script>";
        }

    }else {
        echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah_produk.php';</script>";
    }

}else{
    
    $query = "INSERT INTO produk (nama_produk, harga_produk) VALUES ('$nama_produk', '$harga_produk')";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambahkan!');window:location='produk.php';</script>";
    }

}
 
 
?>