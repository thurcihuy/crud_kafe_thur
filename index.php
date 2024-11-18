<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kafe Thur</title>
    <link rel="shortcut icon" type="x-icon" href="images/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body>
    <!--Navbar-->
    <header>
        <div class="nav container">
            <a href="" class="logo">CafeTrz</a>
            <div class="navbar">
                <a href="#home" class="nav-link">Beranda</a>
                <a href="#services" class="nav-link">Pelayanan</a>
                <a href="#products" class="nav-link">Produk</a>
                <a href="login.php" class="nav-link">Login</a>
            </div>
            <div class="nav-icons">
                <a href="login.php"><i class="bx bx-user"></i></a>
                <a href="#book"><i class="bx bx-shopping-bag"></i></a>
                <!--icon menu responsiv-->
                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </div>
    </header>
    <!--navbar akhir-->
    <!--Beranda-->
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Rasakan Sensasi<br>
                Dari Biji Kopi Aseli CUYY
            </h1>
            <p>
                Tunggu apa lagi, ayo pesan sekarang!! <br>
                Klik Tombol dibawah ini 
            </p>
            <a href="#book" class="btn">
                <span>Pesan</span>
            </a>
        </div>
        <!--Foto beranda-->
        <img src="images/hero.png" alt="" class="home-img">
    </section>
    <!--Beranda Akhir-->
    <!--Pelayanan-->
    <section class="services container" id="services">
        <div class="heading">
            <h2>Kami menyediakan Pelayanan yang bagus, dan membuat anda nyaman
            </h2>
        </div>
        <div class="service-content">
            <div class="ser-box">
                <img src="images/ser-1.png" alt="">
                <p>Peralatan yang canggih</p>
            </div>
            <div class="ser-box">
                <img src="images/ser-2.png" alt="">
                <p>Tipe Kopi </p>
            </div>
            <div class="ser-box">
                <img src="images/ser-3.png" alt="">
                <p>Layanan Antar Jemput</p>
            </div>
            <div class="ser-box">
                <img src="images/ser-4.png" alt="">
                <p>Biji Kopi</p>
            </div>
            <div class="ser-box">
                <img src="images/ser-5.png" alt="">
                <p>Cemilan yang enak</p>
            </div>
        </div>
    </section>
    <!--Pelayanan Akhir-->
    <!--Produk-->
    <section class="products container" id="products">
        <div class="heading">
            <h2>Produk Terbaik Kami</h2>
            <p>Berikut adalah beberapa produk-produk terbaik kami. </p>
        </div>
        <div class="product-content">
        <?php 
		include 'config.php';
		$data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
		    ?>
            <div class="product-box">
                <i class="bx bx-heart heart-icon"></i>
                <img style="width: 200px; height: 200px;" src="admin/images/<?php echo $d['gambar_produk']; ?>">
                <p>Tersedia Beberapa Tipe yang Berbeda</p>
                <h2><?php echo $d['nama_produk']; ?></h2>
                <div class="product-info">
                    <span>Rp <?php echo number_format($d['harga_produk'], 0,',','.'); ?></span>
                    <i href="#book"; class="bx bx-shopping-bag"></i>
                </div>
            </div>
            <?php 
		    }
		    ?>   
        </div>
    </section>
    <!--Prodok akhir-->

    <!--Buku-->
    <section class="book container" id="book">
        <img src="images/book.jpg" alt="" class="book-img">
        <div class="book-overlay"></div>
        <div class="book-data">
            <h2>Ayo Booking Meja<br>
                Untuk Mu
            </h2>
            <form action="book">
                <div class="input-box">
                    <i class="bx bx-user"></i>
                    <input type="nama_pemesan" name="" placeholder="Nama Anda" id="">
                </div>
                <div class="input-box">
                    <i class="bx bx-phone-call"></i>
                    <input type="no_hp" name="" placeholder="Nomor Anda" id="">
                </div>
                <a onclick="return alert('Anda Harus Login Terlebih Dahulu Sebelum Memesan!')" href="login.php" class="book-btn">Boking Meja</a>
            </form>
            <p>Kami akan menghubunghi Anda untuk Menerima Pesanan</p>
        </div>
    </section>
    <!--Buku Akhir-->
    <!--Footer-->
    <section class="footer container">
        <div class="footer-box">
            <a href="#" class="logo">CafeTrz</a>
            <div class="social">
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                <a href="#"><i class="bx bxl-youtube"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Tentang</h3>
            <a href="#">FAQ</a>
            <a href="#">Kontak</a>
        </div>
        <div class="footer-box">
            <h3>Kritik & Saran</h3>
            <a href="#">Hubungi Kami</a>
            <a href="#">Ulas Kami</a>
        </div>
        <div class="footer-box">
            <h3>Pelayanan</h3>
            <a href="#">Opsi Pembayaran</a>
            <a href="#">Pengembalian</a>
        </div>
    </section>
    <p class="copyright">&#169; CAFETRZ</p>
    <!--ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- JS -->
    <script src="js/main.js"></script>
    
</body>

</html>