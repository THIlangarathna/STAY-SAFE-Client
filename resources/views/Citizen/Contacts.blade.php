<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">Stay Safe</a></h1>
       
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">About</a></li>
          <li><a href="index.html">Services</a></li>
          <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
          
            <li class="dropdown"><a href="/logoutuser"><span>Log Out</span> </i></a>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Citizen Details</h2>
            <p>Find Citizen details and their location form this dashboard. Also, you can search a specific user by using the NIC </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>PHI Dashboard</li>
          <li>Citizen Dashboard</li>
          <li>Contact Details</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= phi Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
           <div class="col-md-6 offset-md-3">
            <article class="entry">
              <span class="phi-form-title">
                <h3>Contact Details</h3>
              </span>

              <div class="phifrm">

                  <div class="wrap-input100 ">
                    <input class="input100" type="email" placeholder="Email" name="email" value="{{$response['Contact']}}" readonly required>					
                    <span class="symbol-input100">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                  </div>
                  <br>
                  <div class="wrap-input100 ">
                    <input class="input100" type="text" name="mobile" placeholder="Mobile" value="{{$response['Email']}}" required>				
                    <span class="symbol-input100">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                  </div>

              </div>
        
            </article>
          </div>


          </div>
 

      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Stay Safe</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>