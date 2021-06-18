<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="index.html">Healthy</a></h1>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto " href="index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="about.php">About</a></li>
              <li><a class="nav-link scrollto" href="chatOnline1.php">Chat</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

          <a href="login.php" class="get-started-btn scrollto">Login</a>
        </div>
      </div>

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="position-relative mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 w-50">
            <form style="color:white;" class="row g-3 m-auto bg-dark rounded-3" action='controlers/c_registrasi.php' method='POST'>
                <div class="col-7">
                    <label class="mt-3 form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="col-md-5">
                    <label for="inputState" class="mt-3 form-label" >Jenis Kelamin</label>
                    <select class="form-select" name="kelamin">
                        <option selected>Choose...</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Umur</label>
                    <input type="text" class="form-control" name="umur" placeholder="Umur">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="inputAddress" placeholder="Alamat">
                </div>    
                <div class="col-md-6"> 
                    <label class="form-label" >Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control"name="password" id="inputPassword4">
                </div>
                <div class="col-12">
                    <button type="submit" class="get-btn scrollto mt-44 mb-3" name="registrasi">Daftar</button>
                </div>
            </form>

            <p class="mt-3 text-center" style="color:white;">Sudah punya akun? <a href="login.php">Login.</a></p>
          </div>
        </div>
      </div>
    </section><!-- End Hero -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Healthy</h3>
      <p>Layanan Kesehatan Terpercaya</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright 2021
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>