<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QR</title>
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
            height: 250px;
            width: 100%;
        }

    </style>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA6_zDMjL3hgKMGxzoK0lULwM47LrCvuac"></script>
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
          <li><a class="getstarted" href="Log In/index.html">Log In</a></li>
          <li><a class="getstarted" href="reg/LogReg.html">Register</a></li>
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
            <h2>QR Form</h2>
            <p>To save user’s valuable time you can add a QR code to the location of your place/business. By providing following details you can make a QR code for a specific location in a minute. </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Qr Form</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= phi Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around">
           <div class="col-6">
    
              <article class="entry">
              <span class="phi-form-title">
                <h3>Create a QR for your place</h3>
              </span>
                <div class="phifrm">
                  <form action="QR" method="POST">
                    <div class="wrap-input100 ">
                      <input class="input100"  type="text" placeholder="Name" name="name" required>			
                      <span class="symbol-input100">
                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                      </span>
                    </div>

                    <div class="wrap-input100 ">
                      <input class="input100" type="tel" id="phone" name="contact"  placeholder="Conatct" required>				
                      <span class="symbol-input100">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="wrap-input100 ">
                      <input class="input100"  type="text" name="address" placeholder="Address" required>						
                      <span class="symbol-input100">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="wrap-input100 ">
                      <input class="input100" id="latitude" type="text" name="latitude" placeholder="Latitude" required>						
                      <span class="symbol-input100">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="wrap-input100 ">
                      <input class="input100" id="longitude" type="text" name="longitude" placeholder="Longitude" required>						
                      <span class="symbol-input100">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div>
                    <div id="map" style="border:0;" frameborder="0" allowfullscreen>
                    <script>
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
        var myOptions = {
            zoom: 7,
            center: new google.maps.LatLng(7.873054,80.771797),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        var markers = {};

        var getMarkerUniqueId= function(lat, lng) {
            document.getElementById("latitude").value = lat;
            document.getElementById("longitude").value = lng;
            return lat + '_' + lng;
        };

        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };

        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: 
                "    <div id='info_"+markerId+"' style='color:black;'>\n" +
                "            <input type='text' name='lat' value="+lat+">\n" +
                "            <input type='text' name='lng' value="+lng+">\n" +
                "    </div>"
            });
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });

        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
            });
        };

        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };


    </script>
                    </div>
                    <div class="container--form-btn">
                    <button class="form-btn">
                      Create QR
                    </button>
                  </div>
                  </form>
  
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