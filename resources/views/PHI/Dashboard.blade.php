<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PHI</title>
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
          <li class="dropdown"><a href="#"><span>{{$response['user']['name']}}</span> <i class="bi bi-chevron-down"></i></a>
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
            <h2>PHI Dashboard</h2>
            <p>Update reports of a specific user and mark their health status according to reports </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>PHI Dashboard</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= phi Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-7">
            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">

                <form action="Search" method="POST">
                  <input type="text" name="nic" required minlength="2">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
                
              </div><!-- End sidebar search formn-->
              <div class="tb table-responsive">          
                <table class="table-condensed table-hover">
      
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Sex</th>
                    <th>NIC</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($response['citizens'] as $row)
                  <tr>
                    <td><a href="/Citi{{$row['id']}}">{{$row['name']}}</a></td>
                    <td>{{$row['dob']}}</td>
                    <td>{{$row['sex']}}</td>
                    <td>{{$row['nic']}}</td>
                    <td>{{$row['health_status']}}</td>
                    <td></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
        
            </div><!-- End sidebar -->
        
           </div><!-- End phi sidebar -->

           <div class="col-5">
            <article class="entry">
              <span class="phi-form-title">
                <h3>PHI Details</h3>
              </span>
              <div class="cvr">
                <img src="{{url($response['user']['img'])}}" class="img-fluid">
              </div>
              <div class="phifrm">
                <form action="">
                  <div class="wrap-input100 ">
                    <labale class="input100">Name:{{$response['user']['name']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-id-badge" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Email:{{$response['user']['email']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">NIC:{{$response['user']['nic']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-id-card" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">PHI ID:{{$response['phi']['phi_id']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-id-card" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Contact:{{$response['phi']['contact']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Region:{{$response['phi']['region']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                  </div>
                </form>
                <div class="container--form-btn">
                  <a href="/EditPHI{{$response['user']['id']}}"><button class="form-btn">
                    Edit Profile
                  </button></a>
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