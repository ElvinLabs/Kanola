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

	<section id="content" class="about">
	<div class="container">
        <div class="row">
        	<div class="col-lg-12 pagetop">
    			<img src="../img/pagetop/auto.jpg">
    		</div>
			<div class="col-lg-12">
				<hr><div class="box-gray">
                    <h3>Kanola Auto Vehicles</h3>                                
				</div><hr>
                <div class="row">

                    <?php 

                        if($_POST){

                            $id = $_POST['id'];
                            // echo $id;

                             
                                    require "../functions&defined/function.php";
                                    $query_auto = "SELECT * FROM Auto WHERE Id='$id'";
                                    // echo $query_auto;
                                    $conn = connection();



                                    
                                    $result = $conn->query($query_auto);
                                    if( $result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                              // $row = $result->fetch_assoc();                              
                                            $file_name = $row['file_name'];
                                            $path = "images/".$file_name."/".$file_name;

                                    ?>


                                    <div class="col-lg-8">
                                        <img src="<?php echo ($path.'-0.jpg'); ?>" width="100%" id="begin">

                                        <?php
                                            for ($i=0; $i <$row['Img_count'] ; $i++) { 
                                                $path = "images/".$file_name."/".$file_name.'-'.$i.'.jpg';

                                            
                                        ?>
                                            <div style="padding:2px" class="col-lg-3">
                                                <img src="<?php echo ($path); ?>" width="100%" onclick="imgChange(this);">
                                            </div>
                                        <?php
                                            }
                                        ?>                                        
                                    </div>






                                    <div class="col-lg-4">
                                        <p style="font-size:16px;color:#222;line-height: 1.8em;">
                                                <b>Brand: </b> <?php echo ($row['Brand']); ?><br>
                                                <b>Model: </b> <?php echo ($row['Model']); ?><br>
                                                <b>Model year: </b><?php echo ($row['Model_yr']); ?><br>
                                                <b>Condition: </b> <?php echo ($row['Cdtn']); ?><br>
                                                <b>Transmission: </b> <?php echo ($row['Transmition']); ?><br>
                                                <b>Fuel type: </b> <?php echo ($row['Fuel_type']); ?><br>
                                                <b>Engine capacity: </b> <?php echo ($row['Eng_cap']); ?><br>
                                                <b>Mileage: </b><?php echo ($row['Mileage']); ?><br>
                                        </p>
                        
                                    </div>

                                    <div class="col-lg-12" style="font-size:16px;color:#222;line-height: 1.8em;">  <hr>
                                     <p>
                                     <b>Other details:</b>  <?php echo ($row['Description']); ?><br>
                                     <b>Location</b> : <? echo ($row['Location']); ?>
                                    </p>
                                </div>

                                    <?php 

                                        }

                                    }                                    
                                                                                
                                 

                            
                        }

                    ?>
                    
                    
                    
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
<script type="text/javascript">
    
    var currentImg;
//    currentImg = $('#begin').attr("src");
    function imgChange(Img){
        currentImg =$(Img).attr('src');
        $('#begin').attr("src",currentImg);
        
    }

</script>
</body>
</html>