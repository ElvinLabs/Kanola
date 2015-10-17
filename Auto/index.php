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
<link rel="../shortcut icon" href="fav.ico" />
<link href="../skins/default.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />

<style type="text/css">
    

    
</style>
</head>
<body>
<div id="wrapper">

	<!-- start header -->
	<?php
        include "../nav/nav.html"
    ?>

	<section id="content" class="about">
	<div class="container">
        <div class="row">
        	<div class="col-lg-12 pagetop">
    			<img src="../img/pagetop/auto.jpg">
    		</div>
			<div class="col-lg-12">
				<div class="box-gray">
                    <h3>Car and Vehicle</h3>                                
				</div>
                
                        

                       
                            
                                <?php
                                    require "../functions&defined/function.php";
                                    $query_auto = "SELECT * FROM Auto";
                                    $conn = connection();
                                    $result = $conn->query($query_auto);
                                    if( $result->num_rows > 0){
                                        while( $row = $result->fetch_assoc() ){
                                            
                                            $file_name = $row['file_name'];
                                            $path = "images/".$file_name."/".$file_name."-0.jpg";
                                ?>  



                                

                                <div class="col-lg-6 col-md-6 col-sm-6"  id="auto">
                                     <div class="col-lg-6 col-md-6 col-sm-6 img"  style="background-image:url('<?php echo ($path); ?>')">
                                         <!-- <img class="img-thumbnail" alt="" src="" width="100%"> -->
                                     </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <form action="item.php" method="post">
                                            

                                            <p class="details"><b>Model : <?php echo ($row['Model']);  ?></b>
                                            <p class="details"><b>Brand : <?php echo ($row['Brand']);  ?></b>
                                            </p>
                                            <input type="hidden" name="id" value="<?php echo ($row['Id']); ?>" >
                                            <input type="submit" value="More" >
                                        </form>

                                    </div>
                                </div>


                                <?php
                                        }                                   
                                    }else  echo $conn->error;
                                ?>
                            
                        
                


























                
                
<!--                 <div class="col-lg-6 col-md-6 col-sm-6" id="auto">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img class="img-thumbnail" src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p class="details"><b>Honda GP5 L Grade 2014</b><br>
                            11,000 km<br>
                            <strong>Rs 3,000,000</strong></p>
                        </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6" id="auto">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img class="img-thumbnail" src="img/1.jpg" width="100%">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p class="details"><b>Honda GP5 L Grade 2014</b><br>
                            11,000 km<br>
                            <strong>Rs 3,000,000</strong></p>
                        </div>
                </div>
                 -->
                
                
                
                
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