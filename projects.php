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
					<li class="active">Finished Projects</li>
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
<!--
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
-->
				<div class="row">
                    <div class="col-lg-8">
					<section id="projects">
					
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Highways WHERE State='Complete'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){                                   
                        ?>
                        <h4 style="margin-top:10px"><br><br><br>Highways</h4>
                        <ul id="thumbs" class="portfolio">
                            <?php
                                }
                            ?>
                            <?php
                                $query = "SELECT * FROM Highways WHERE State='Complete'";
                                $result = $conn->query($query);
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                    
                            ?> 

                            <li class="col-lg-12" data-id="id-0" data-type="Highways">
                                <i class="fa fa-dot-circle-o">  </i>  <?php echo($row["Title"]);  ?>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Irrigation WHERE State='Complete'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){                                   
                        ?>
                        <h4 style="margin-top:10px"><br><br>Irrigation</h4>
                        <ul id="thumbs" class="portfolio">
                            <?php
                                }
                            ?>
                            <?php
                                $query = "SELECT * FROM Irrigation WHERE State='Complete'";
                                $result = $conn->query($query);
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                    
                            ?> 

                            <li class="col-lg-12" data-id="id-0" data-type="Irrigation">
                                <i class="fa fa-dot-circle-o">  </i>  <?php echo($row["Title"]);  ?>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Bridges WHERE State='Complete'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){                                   
                        ?>
                        <h4 style="margin-top:10px"><br><br>Bridges</h4>
                        <ul id="thumbs" class="portfolio">
                            <?php
                                }
                            ?>
                            <?php
                                $query = "SELECT * FROM Bridges WHERE State='Complete'";
                                $result = $conn->query($query);
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                    
                            ?> 

                            <li class="col-lg-12" data-id="id-0" data-type="Bridges">
                                <i class="fa fa-dot-circle-o">  </i>  <?php echo($row["Title"]);  ?>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Buildings WHERE State='Complete'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){                                   
                        ?>
                        <h4 style="margin-top:10px"><br><br>Buildings</h4>
                        <ul id="thumbs" class="portfolio">
                            <?php
                                }
                            ?>
                            <?php
                                $query = "SELECT * FROM Buildings WHERE State='Complete'";
                                $result = $conn->query($query);
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                    
                            ?> 

                            <li class="col-lg-12" data-id="id-0" data-type="Buildings">
                                <i class="fa fa-dot-circle-o">  </i>  <?php echo($row["Title"]);  ?>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Water_drainage WHERE State='Complete'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){                                   
                        ?>
                        <h4 style="margin-top:10px"><br><br>Water Drainage</h4>
                        <ul id="thumbs" class="portfolio">
                            <?php
                                }
                            ?>
                            <?php
                                $query = "SELECT * FROM Water_drainage WHERE State='Complete'";
                                $result = $conn->query($query);
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                    
                            ?> 

                            <li class="col-lg-12" data-id="id-0" data-type="Water_drainage">
                                <i class="fa fa-dot-circle-o">  </i>  <?php echo($row["Title"]);  ?>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <!--******************************************************-->
                        <?php
                            $query = "SELECT * FROM Interlock WHERE State='Complete'";
                            $result = $conn->query($query);
                            if( $result->num_rows > 0 ){                                   
                        ?>
                        <h4 style="margin-top:10px"><br><br>Interlock</h4>
                        <ul id="thumbs" class="portfolio">
                            <?php
                                }
                            ?>
                            <?php
                                $query = "SELECT * FROM Interlock WHERE State='Complete'";
                                $result = $conn->query($query);
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                    
                            ?> 

                            <li class="col-lg-12" data-id="id-0" data-type="Interlock">
                                <i class="fa fa-dot-circle-o">  </i>  <?php echo($row["Title"]);  ?>
                            </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        
					</section></div>
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