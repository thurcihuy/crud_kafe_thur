<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="x-icon" href="images/logo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <section class="vh-150" style="background-color: #54372a;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-12">
              <div data-aos="zoom-in-up" data-aos-duration="3000">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="images/product-6.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                    <?php 
	                    if(isset($_GET['pesan'])){
                        
		                    if($_GET['pesan']=="gagal"){
			                echo"<script>
			                alert('Maaf Login Gagal, Silahkan Ulangi Lagi');
    		                window.location.assign('login.php');
    		                </script>";
		                    }
	                    }
	                    ?>
                      <form action="proses_login.php" method="post">
                      <center><img src="images/logo.png" style="width: 185px; height:185px;"></center>
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">CafeTrz</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Silahkan Login !</h5>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" name="username" class="form-control form-control-lg" placeholder="Username ..." required="required"/>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" name="password" class="form-control form-control-lg" placeholder="Password ..." required="required" />
                        </div>
      
                        <div class="pt-2 mb-3">
                          <input type="submit" class="btn btn-dark btn-lg btn-block w-100" value="Login">
                          <hr>
                          <a href="index.php" class="btn btn-danger btn-lg btn-block w-100">Kembali</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- JS -->
    <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>
</html>