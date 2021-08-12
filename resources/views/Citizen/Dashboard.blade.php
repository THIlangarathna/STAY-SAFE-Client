<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Citizen</title>
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
  <style type="text/css">
        #map{
            height: 270px;
            width: 100%;
        }
        #map1{
            height: 500px;
            width: 100%;
        }

    </style>
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
            <h2>Citizen Dashboard</h2>
            <p>View reports of a PCR test and mark your update your details and current location </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Citizen Dashboard</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= phi Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-7">


            <div class="sidebar">

              <h3 class="sidebar-title">Reports</h3>
              <div class="tb table-responsive">          
                <table class="table-condensed table-hover">
      
                  <thead>
                  <tr>
                    <th>Report Name</th>
                    <th>Date</th>
                    <th>Status</th>
  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($response['reports'] as $row)
                  <tr>

                    <td><a href="http://apicdc.me/api/Report/{{$row['id']}}/">{{$row['report']}}</a></td>
                    <td>{{$row['created_at']}}</td>
                    <td>{{$row['status']}}</td>
                  
                  </tr>
                  @endforeach
                    </tr>
                  </tbody>
                </table>
                </div>
        
            </div><!-- End sidebar -->
            <div class="sidebar">
              <h3 class="sidebar-title">Past Locations</h3>
              <div class="tb table-responsive">          
                <table class="table-condensed table-hover">
      
                  <thead>
                  <tr>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Date/time</th>
                  </tr>

                  </thead>
                
                  <tbody>
                  @foreach ($response['locations'] as $row)
                  <tr>
                    <td>{{$row['latitude']}}</td>
                    <td>{{$row['longitude']}}</td>
                    <td>{{$row['created_at']}}</td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>
                </div>
            </div>

            <div class="sidebar">
              <h3 class="sidebar-title">Past Locations</h3>
              <div class="tb table-responsive">

              <div id="map1" style="border:0;" frameborder="0" allowfullscreen>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;

    function initMap() {
        var SriLanka = {lat: 7.873054, lng: 80.771797};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map1'), {
            center: SriLanka,
            zoom: 7
        });

        <?php foreach ($response['locations'] as $row){ ?>
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row['latitude']; ?>, <?php echo $row['longitude']; ?>),
                map: map,
                icon: red_icon,
            });
            <?php } ?>
    }

</script>
                </div>
            </div></div>
        
           </div><!-- End phi sidebar -->

           <div class="col-5">
            <article class="entry">
              <span class="phi-form-title">
                <h3>Citizen Details</h3>
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
                    <labale class="input100">DOB:{{$response['citizen']['dob']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Sex:{{$response['citizen']['sex']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Mobile:{{$response['citizen']['mobile']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input1000">Address:{{$response['citizen']['address']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-address-card" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Proffesion:{{$response['citizen']['profession']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-bank" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Affiliation:{{$response['citizen']['affiliation']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-info" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Health Status:{{$response['citizen']['health_status']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Latitude:{{$response['citizen']['cl_latitude']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100 ">
                    <labale class="input100">Longitude:{{$response['citizen']['cl_longitude']}}</lable>						
                    <span class="symbol-input100">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                  </div>
                </form>

              </div>
              <div class="container--form-btn">
                  <a href="/EditCitizen{{$response['user']['id']}}"><button class="form-btn">
                    Edit Profile
                  </button></a>
                </div>
                <div class="container--form-btn">
                <a href="/EditLocation{{$response['user']['id']}}"><button class="form-btn">
                    Update Location
                  </button></a>
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

  <script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA6_zDMjL3hgKMGxzoK0lULwM47LrCvuac&callback=initMap">
</script>

</body>

</html>