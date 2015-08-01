<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KANOLA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link rel="shortcut icon" href="fav.ico" />

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<?php
        include "nav.html"
    ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Sectors</li>
					<li class="active">Constructions &amp; Engineering</li>
                    <li class="active">Ongoing Projects</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
                    <?php  
                        require 'functions&defined/function.php';                    
                        $conn = connection();
                                            
                    ?>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="Highways"><a href="#" title="">Highways</a></li>
					<li class="Interlock"><a href="#" title="">Interlock</a></li>
					<li class="Irrigation"><a href="#" title="">Irrigation</a></li>
					<li class="Bridges"><a href="#" title="">Bridges</a></li>
					<li class="Buildings"><a href="#" title="">Buildings</a></li>
					<li class="Water_drainage"><a href="#" title="">Water Drainage</a></li>
				</ul>
				<div class="clearfix">
				</div><hr>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Highways WHERE State='Ongoing'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){
                                while($row= $result->fetch_assoc() ){                                    
                        ?> 
                        
						<li class="item-thumbs col-lg-4 design" data-id="id-0" data-type="Highways">
                            <div style="height:100px;overflow:auto"  class="alert alert-info">
				                <strong><?php echo($row["Title"]);  ?></strong>
                            </div>
                        </li>
                        <?php
                                }
                            }
                        ?>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Irrigation WHERE State='Ongoing'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){
                                while($row= $result->fetch_assoc() ){                                    
                        ?> 
                        
						<li class="item-thumbs col-lg-4 design" data-id="id-0" data-type="Irrigation">
                            <div style="height:100px;overflow:auto"  class="alert alert-info">
				                <strong><?php echo($row["Title"]);  ?></strong>
                            </div>
                        </li>
                        <?php
                                }
                            }
                        ?>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Bridges WHERE State='Ongoing'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){
                                while($row= $result->fetch_assoc() ){                                    
                        ?> 
                        
						<li class="item-thumbs col-lg-4 design" data-id="id-0" data-type="Bridges">
                            <div style="height:100px;overflow:auto"  class="alert alert-info">
				                <strong><?php echo($row["Title"]);  ?></strong>
                            </div>
                        </li>
                        <?php
                                }
                            }
                        ?>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Buildings WHERE State='Ongoing'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){
                                while($row= $result->fetch_assoc() ){                                    
                        ?> 
                        
						<li class="item-thumbs col-lg-4 design" data-id="id-0" data-type="Buildings">
                            <div style="height:100px;overflow:auto"  class="alert alert-info">
				                <strong><?php echo($row["Title"]);  ?></strong>
                            </div>
                        </li>
                        <?php
                                }
                            }
                        ?>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Water_drainage WHERE State='Ongoing'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){
                                while($row= $result->fetch_assoc() ){                                    
                        ?> 
                        
						<li class="item-thumbs col-lg-4 design" data-id="id-0" data-type="Water_drainage">
                            <div style="height:100px;overflow:auto"  class="alert alert-info">
				                <strong><?php echo($row["Title"]);  ?></strong>
                            </div>
                        </li>
                        <?php
                                }
                            }
                        ?>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Interlock WHERE State='Ongoing'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){
                                while($row= $result->fetch_assoc() ){                                    
                        ?> 
                        
						<li class="item-thumbs col-lg-4 design" data-id="id-0" data-type="Interlock">
                            <div style="height:100px;overflow:auto"  class="alert alert-info">
				                <strong><?php echo($row["Title"]);  ?></strong>
                            </div>
                        </li>
                        <?php
                                }
                            }
                        ?>
                        
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
        include "footer.html"
    ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>