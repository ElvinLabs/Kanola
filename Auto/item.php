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
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../css/jcarousel.css" rel="stylesheet" />
<link href="../css/flexslider.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />
<link rel="../shortcut icon" href="fav.ico" />
<link href="../skins/default.css" rel="stylesheet" />

</head>
<body>
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
			<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Sectors</a><i class="icon-angle-right"></i></li>
					<li class="active">About us</li>
				</ul>
		</div>
	</div>
	</section>
-->
	<section id="content" class="about">
	<div class="container">
        <div class="row">
        	<div class="col-lg-12 pagetop">
    			<img src="../img/pagetop/auto.jpg">
    		</div>
			<div class="col-lg-12">
				<hr><div class="box-gray">
                    <h3>Honda GP5 L Grade 2014</h3>                                
				</div><hr>
                <div class="row">
                    <div class="col-lg-8">
                        <img src="img/1.jpg" width="100%">
                        <div style="padding:2px" class="col-lg-3"><img src="img/1.jpg" width="100%"></div>
                        <div style="padding:2px" class="col-lg-3"><img src="img/1.jpg" width="100%"></div>
                        <div style="padding:2px" class="col-lg-3"><img src="img/1.jpg" width="100%"></div>
                        <div style="padding:2px" class="col-lg-3"><img src="img/1.jpg" width="100%"></div>
                    </div>

                    <?php 

                        if($_POST){

                            $id = $_POST['id'];
                            echo $id;

                             
                                    require "../functions&defined/function.php";
                                    $query_auto = "SELECT * FROM Auto WHERE Id='$id'";
                                    echo $query_auto;
                                    $conn = connection();
                                    $result = $conn->query($query_auto);
                                    if( $result->num_rows > 0){
                                        // while($row = $result->fetch_assoc()){
                                              $row = $result->fetch_assoc();                              
                                            $file_name = $row['file_name'];
                                                                                        
                                        // }    


                                    }else{
                                        echo "error";
                                    }
                                            
                                 

                            
                        }

                    ?>
                    
                    <div class="col-lg-4">
                        <p style="font-size:16px;color:#222;line-height: 1.8em;">
                            <b>Brand: </b> Honda<br>
                            <b>Model year: </b> 2014<br>
                            <b>Condition: </b> New<br>
                            <b>Transmission: </b> Auto<br>
                            <b>Model: </b> GP5 L grade<br>
                            <b>Body type: </b> Hatchback<br>
                            <b>Fuel type: </b> Other fule type<br>
                            <b>Engine capacity: </b> 1500 cc<br>
                            <b>Mileage: </b> 11500 km<br>
                        </p>
                        
                    </div>
                    <div class="col-lg-12">  <hr>
                    <p>
                        1500CC, Full Option, L-Package, 2014 , pearl white , Original Factory Fitted Honda Allow Wheels, Led Head Lights, Ret/ Mirrors, Half Leather Seats, Full Multi-function steering, Cruze Control, Push Start, Auto A/C, Smart key, Rear wiper, HDD, Navi, Reverse camera with Guide Lines, Winker mirrors, Door Wiser, Rear Wiper, Fully Loaded, front and rear drive support sensors<br><br>

02 years Warranty<br>
And many more functions<br><br>

Web:- www.ojtjapan.com<br>
Address:- # 135/8, Digana Road, Kundasale.<br><br>

We make the order as per your request to get this vehicle directly from Japanese auction in for reasonable price.<br>
Please note that we need approximately 3 weeks’ time to complete the delivery.<br>
Join with our 3 years trusted hassle free service. Japanese bureau Certification available .<br><br>

I do not want to be contacted by telemarketers.<br>
                        </p>
                    </div>
                </div>
                
                
                
                
			</div>
		</div>
        
	</div>
	</section>
<!--	footer-->
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
</body>
</html>