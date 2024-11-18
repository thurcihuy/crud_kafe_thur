<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'config.php';
$sql = "SELECT*FROM user WHERE username= '$username' AND password= '$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['level'] = $data['level'];
    if($data['level']=='admin'){
        header('location:admin/admin.php');
    }elseif($data['level']=='user'){
        header('location:user/user.php');
    }
}else{
    echo"<script>
    alert('Maaf Login Gagal, Silahkan Ulangi Lagi');
    window.location.assign('login.php');
    </script>";
}

