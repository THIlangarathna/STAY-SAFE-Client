<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Citizen Details</title>
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
            <h2>Citizen Dashboard</h2>
            <p>Find Citizen details and their location form this dashboard. Also, you can search a specific user by using the NIC </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>PHI Dashboard</li>
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
              <h3 class="sidebar-title">Add Reports</h3>
              <div class="wrap-input100 " >

                <form action="Report" method="POST" enctype="multipart/form-data">

                  <input type="hidden" value="{{$response['citizen']['id']}}" name="citizen_id">
                  <input type="hidden" value="{{$response['user']['id']}}" name="id">
                <input class="input100" id="upload" type="file" name="file" placeholder="Add Reports">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-upload" aria-hidden="true"></i>
                </span>
              </div>
              <div class="wrap-input100 ">
                <labale class="input100">Health status</lable>	
               
                  <select id="select" name="status" required>
                    <option value="Positive">Positive</option>
                    <option value="Negative">Negative</option>
                    <option value="Recovered">Recovered</option>
                  </select>
             				
                <span class="symbol-input100">
                  <i class="fa fa-thermometer-empty" aria-hidden="true"></i>
                </span>
              </div>
              <button class="subbt" type="submit">Submit</button>
            </form>

            </div>
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
              <h3 class="sidebar-title">Citizen Status</h3>
              <div class="tb table-responsive">          
                <table class="table-condensed table-hover">
      
                  <thead>

                  </thead>
                  <tbody>
                  <tr>
                    
                  @if($response['citizen']['health_status'] =='Positive')         
        <a href="/Recovered{{$response['citizen']['id']}}"><div class="container--form-btn1">
                      <button class="form-btnr">
                      Recovered
                      </button>
                    </div></a>
                  <a href="/Negative{{$response['citizen']['id']}}"><div class="container--form-btn1">
                      <button class="form-btnn">
                        Negative
                      </button>
                    </div></a>
        @elseif($response['citizen']['health_status'] =='Negative')
        <a href="/Positive{{$response['citizen']['id']}}" ><div class="container--form-btn1">
                      <button class="form-btnp">
                        Postive
                      </button>
                    </div></a>
        @elseif($response['citizen']['health_status'] =='Recovered')
        <a href="/Positive{{$response['citizen']['id']}}"><div class="container--form-btn1">
        <button class="form-btnp">
                        Postive
                      </button>
                    </div></a></a>    
        @endif
                    

        <a href="/Destroy{{$response['citizen']['id']}}">
                    <div class="container--form-btn1">
                      <button class="form-btnd">
                      Citizen Deceased
                      </button>
                    </div>
                  </a>
                    <td>
                    
                    </td>
                  </tr>

                  </tbody>
                </table>
                </div>
            </div>
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

              </div>
              <div class="container--form-btn">
                  <a href="/viewcontacts{{$response['citizen']['id']}}"><button class="form-btn">
                    Get Contact Details
                  </button></a>
                </div>
                <div class="container--form-btn">
                <a href="/viewlocations{{$response['citizen']['id']}}"><button class="form-btn">
                    View Past Location
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

</body>

</html>