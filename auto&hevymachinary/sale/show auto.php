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
    

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Auto Vehicles</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

        	<?php

                require '../../functions&defined/function.php';
                $path = $_GET['path'];
                $name = $_GET['name'];


                # Auto vehicles
                $files = json_decode(file_get_contents("../".AUTO."".$name),true);
                $length = "../".$files["images_url"][0];
                //print($length);



            ?>
        		
        	

                <div class="col-md-8 col-sm-8 hero-feature">
                    <div class="thumbnail">
                        <img src="<?php echo($length); ?>" style="width:100%;height:100%;" alt="">
                        <div class="caption">
                        </div>
                    </div>    
                    <div class="row text-center extra-img">
                        
            
                    
                <?php
                    
                    for($i = 0 ; $i< count($files['images_url']); $i++){
                       print( '<div class="col-md-3 col-sm-3 extra">');
                            print('<div class="thumbnail" >');
                            print('<img class="thumbnail" src="../'.$files['images_url'][$i].'">');
                        print("</div></div>"); 
                    }
                     
                ?>
             
                    
                    </div>
               
                
                
                
                
                </div>
                <div class="col-md-3 col-sm-3"> 
                    
                    <table class="table">
                    
                        <tbody>
                        
                            <tr>                           
                                <td>  <label>Brand : </label></td>
                                <td><?php echo $files['brand']; ?></td>
                            </tr>
                            
                            <tr>
                                <td><label>Model :</label></td>
                                <td><?php echo $files['model']; ?></td>
                            </tr>
                            
                            <tr>
                                <td> <label>Model year :  </label></td>
                                <td><?php echo $files['model_year']; ?></td>
                            </tr>
                            
                            <tr>
                                <td> <label>Condtion : </label></td>
                                <td> <?php echo $files['condition']; ?></td>
                            </tr>
                            <tr>
                                <td> <label>Mileage :  </label> </td>
                                <td> <?php echo $files['mileage']; ?></td>
                            </tr>
                            
                            <tr>
                                <td> <label>Transmition : </label></td>
                                <td>  <?php echo $files['transmition']; ?> </td>
                            </tr>
                            
                            <tr>
                                <td>  <label>Capacity :  </label> </td>
                                <td> <?php echo $files['capacity']; ?> </td>
                            </tr>
                            
                            <tr>
                                <td>  <label>Fuel type : </label> </td>
                                <td> <?php echo $files['fuel_type']; ?></td>
                            </tr>
                            
                              <tr>
                                <td>  <label>Location : </label> </td>
                                <td> <?php echo $files['location']; ?></td>
                            </tr>
                            
                              <tr>
                                <td>  <label>description : </label> </td>
                                <td> <?php echo $files['description']; ?></td>
                            </tr>
                        
                        </tbody>
                    </table>
            
                </div>




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
