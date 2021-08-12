<!DOCTYPE html>
<html lang="en">
<head>
	<title>CitizeReg</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/css/util.css">
	<link rel="stylesheet" type="text/css" href="Register/css/main.css">
<!--===============================================================================================-->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA6_zDMjL3hgKMGxzoK0lULwM47LrCvuac"></script>

<style type="text/css">
        #map{
            height: 270px;
            width: 100%;
        }
    </style>

</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<span class="login100-form-title p-b-37">
				Register Citizen
			</span>
			<div class="row">
				<div class="col-md-6">
					<form class="login100-form validate-form" method="post" action="CreateCitizen">
		
						<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
							<input class="input100" type="text" name="name" placeholder="Name" required>
							<span class="focus-input100"></span>
						</div>
		
						  <div class="wrap-input100 validate-input m-b-20">
				
							<select id="select" class="input100" name="sex" required>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							</select>
							<span class="focus-input100"></span>
							
						  </div>

						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="date" name="dob" required/>
							<span class="focus-input100"></span>
						  </div>

						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="text" placeholder="NIC" name="nic" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="text" placeholder="Mobile" name="mobile" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100"type="text" placeholder="Address" name="address" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100"type="text" placeholder="Profession" name="profession" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100"type="text" placeholder="Affliliation" name="affiliation" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
						
							<select class="input100"id="select" name="health_status" required>
							  <option value="Positive">Positive</option>
							  <option value="Negative">Negative</option>
							</select>
							<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
							<input class="input100" type="email" name="email" placeholder="Email" required>
							<span class="focus-input100"></span>
						</div>
		
						<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
							<input class="input100" type="password" name="password" placeholder="Password" minlength="8" required>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
							<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" minlength="8" required>
							<span class="focus-input100"></span>
						</div>
							<p class="input100">Your Current Location</p>
							<input class="input100" type="text" name="cl_latitude" placeholder="Latitude" required id="lat">
							<input class="input100" type="text" name="cl_longitude" placeholder="Longitude" required id ="long">
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
            document.getElementById("lat").value = lat;
            document.getElementById("long").value = lng;
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
							  <input type="hidden" name="category" value="Citizen">
							<br>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</form>
		
				</div>
				<div class="col-md-6"><br><br><br><br><br><br>
                 <img src="Register/images/log.svg" alt="">
				</div>
			</div>
			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/bootstrap/js/popper.js"></script>
	<script src="Register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/daterangepicker/moment.min.js"></script>
	<script src="Register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Register/js/main.js"></script>

</body>
</html>