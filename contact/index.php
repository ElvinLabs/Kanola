<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KANOLA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../skins/default.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />
<link rel="../shortcut icon" href="fav.ico" />

<style type="text/css">
	body{
		background: url("../img/page_bg.jpg") no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;

	}
	header .navbar-default{
		background-color: rgba(255,255,255,0);
	}
	.pagetop img{
		width: 100%;
	}
	#googlemaps{
		padding-left: -20px;
	}
</style>

</head>
<body class="contact_body">
<div id="wrapper">
	<!-- start header -->
	<?php
        include "../nav/nav.html"
    ?>
	<!-- end header -->
<!--
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
-->
	<section id="" class="content_section">
		<div class="container">
        	<div class="row">
        		<div class="col-lg-12 pagetop">
        			<img src="../img/pagetop/contact.jpg">
        		</div>
				<div class="col-lg-6">
						<div class="widget">
							<h5 class="widgetheading">Address</h5>
							<address>
							<strong>Kanola Construction &amp; Engineering</strong><br>
							<strong>Kanola Auto &amp; Heavy Machinery</strong><br>
							 Ihala Kalankuttiya , Kalankuttiya,<br>Sri Lanka.</address>
							<p>
								
							</p>
						</div>
				</div>
				<div class="col-lg-6">
					<div class="widget">
						<h5 class="widgetheading">Digital Media</h5>
						<ul class="list-unstyled">
	                        <li><i class="fa fa-phone fa-fw"></i>Office : +94 25 7200220</li>
	                        <li><i class="fa fa-phone fa-fw"></i>Mobile :+94 71 4270539 ,+94 71 9925125</li>
	                        <li><i class="fa fa-phone fa-fw"></i>Fax  : +94 25 2249616</li>
	                        <li><i class="fa fa-envelope-o fa-fw"></i>
	                            <a href="mailto:name@example.com">kanolathilak@gmail.com</a>
	                        </li>
	                    </ul>
					</div>
				</div>
				<div id="googlemaps" class="col-lg-12" style="height:300px"></div>
			</div>
		</div>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d913.2379577167279!2d80.4121262681349!3d8.063696815933405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2slk!4v1441048018779" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	</section>
	<?php
        include "../footer/footer.html"
    ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/google-code-prettify/prettify.js"></script>
<script src="../js/portfolio/jquery.quicksand.js"></script>
<script src="../js/portfolio/setting.js"></script>
<script src="../js/jquery.flexslider.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>

<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
 
<script type="text/javascript">
 
// The latitude and longitude of your business / place
var position = [8.06395, 80.41137];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };
 
    map = new google.maps.Map(document.getElementById('googlemaps'),
        mapOptions);
 
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>

</body>
</html>