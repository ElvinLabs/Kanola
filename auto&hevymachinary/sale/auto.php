<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="../../img/logo.png" height="150%"></a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    
    
    

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Kanola Auto & Heavy Machinery</h1>
            <p>Kanola Auto & Heavy Machinery satisfying its customers offering their dream motor vehicles, even if it’s not displayed in our show room. To ensure about the quality of vehicles Mr. Wijekoon personally engage with the process when select the vehicles to import. Our great expectation is to serve the customer in our best to satiate their expectations.</p>
            <p><a class="btn btn-primary btn-large k-btn">Call to action!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

        	<?php


                require '../../functions&defined/function.php';




                # Auto vehicles
                $files = json_decode(file_get_contents("../".AUTO."auto.json"),true);
                $length = $files["count"];

                for ($i=0; $i <$length ; $i++) { 

                           
                    $filename = key($files["vehicles"][$i]);
                    $image_path = "../".$files["vehicles"][$i][$filename]["img_url"];
                    $category = $files["vehicles"][$i][$filename]["category"];
                    $brand = $files["vehicles"][$i][$filename]["brand"];
                    $model = $files["vehicles"][$i][$filename]["model"];
                    $modelyr = $files["vehicles"][$i][$filename]["model_year"];
                    
                   // print($image_path."<br>");
                    
                    
                    ?>
                    <div class="col-md-3 col-sm-6 hero-feature"> 
                        <div class="thumbnail">
            
                        <img src='<?php echo($image_path); ?>' alt='' >

                         
                        <h3><b>Category</b> : <?php echo($category); ?>"</h3>
                        <p><b>Model</b> : <?php echo($model); ?></p>
                        <p><b>Brand</b> :   <?php echo($brand); ?></p>
                        <a href="<?php echo("show auto.php?path=auto&name=".$filename); ?>" class="btn btn-default k-btn">More</a>

                    
                        </div>
                    </div>
                    <?php
                  

                }



            ?>
        		
        	
<!--

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                         
                             <a href="#" class="btn btn-default k-btn">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
-->




        </div>
        

        <!-- /.row -->

        <hr>
        
        </div>

        <!-- Footer -->
    <!-- Call to Action -->
    <aside class="call-to-action " id="contact" >
        <div class="container">
            <div class="row">                
                <div class="col-md-6">
                    <h4><strong>Kanola Construction &amp; Engineering</strong></h4>
                    <h4><strong>Kanola Auto &amp; Heavy Machinery</strong></h4>
                    <p>Ihala Kalankuttiya , Kalankuttiya,<br>Sri Lanka.</p> 
                </div>                
                <div class="col-md-6">
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
        </div>
    </aside>
        <div class="footer2" style="background-color:#222222;color:#ffffff">
			<div class="container">
				<div class="row">
					<div class=" widget">
						<div class="widget-body" style="padding:15px">
							<p class="text-center">
								Copyright &copy; 2015, Designed by - <a href="http://www.elvinlabs.com" rel="designer">ElvinLabs</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
