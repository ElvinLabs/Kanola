<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin -  KANOLA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Kanola Group - Admin Pannel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Welcome to Admin pannel</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Kanola Constructions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"> View Projects</a>
                                </li>
                                <li>
                                    <a href="#"> Add Projets</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Kanola Auto<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"> Vehicals<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#"> View</a>
                                        </li>
                                        <li>
                                            <a href="#"> Add</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Hevy Mechinary<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#"> View</a>
                                        </li>
                                        <li>
                                            <a href="#"> Add</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><b>Construction Project</b></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    
<!-- *********************************  Roads ongoing projects     *********************************************       -->
                    <?php  
                    
                        require '../../functions&defined/function.php';                    
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Roads ongoing projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                                            
                    <?php

                        $files = json_decode(file_get_contents("../".ROADS),true);
                        # ongoing projects
                        $length = $files["ongoing_num"];                      
                        for ($i=0; $i <$length ; $i++) { 
                            $path = "../".ROAD."".key($files["ongoing"][$i]);
                            $project = json_decode(file_get_contents($path),true);
                            //print_r($project);
                    ?>
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($project['title']); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($project['location']); ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='../../construction/delete.php' method='POST'> 
                                    <input type='hidden' name='filename' value='<?php key($files["ongoing"][$i]); ?> '>
                                    <input type='hidden' name='state' value='ongoing'>  
                                    <input type='hidden' name='link' value='roads'> 
                                    <input type='hidden' name='project_path' value='<?php echo(ROADS); ?> '> 
                                    <input type='hidden' name='path_to_file' value=' <?php echo(ROAD); ?>'>  
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                            
                    <?php

                        }
                    ?>
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
    <!-- *********************************  Roads finished projects     *********************************************       -->  
                    
                     <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Roads Finished projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                                            
                    <?php

                        //$files = json_decode(file_get_contents("../".ROADS),true);
                       
                       # Roads finished  projects
                        $length = $files["finished_num"];                      
                        for ($i=0; $i <$length ; $i++) { 
                            $path = "../".ROAD."".key($files["finished"][$i]);
		                    $project = json_decode(file_get_contents($path),true);
                            //print_r($project);
                    ?>
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($project['title']); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($project['location']); ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='../../construction/delete.php' method='POST'> 
                                    <input type='hidden' name='filename' value='<?php echo(key($files["finished"][$i])); ?> '>
                                    <input type='hidden' name='state' value='finished'>  
                                    <input type='hidden' name='link' value='roads'> 
                                    <input type='hidden' name='project_path' value='<?php echo(ROADS); ?> '> 
                                    <input type='hidden' name='path_to_file' value=' <?php echo(ROAD); ?>'>  
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                            
                    <?php

                        }
                    ?>
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    
     <!-- *********************************  Bridges ongoing projects     *********************************************       -->                 
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Bridges ongoing projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                                            
                    <?php

                        $files = json_decode(file_get_contents("../".BRIDGES),true);
                       
                       # Roads finished  projects
                        $length = $files["ongoing_num"];                      
                        for ($i=0; $i <$length ; $i++) { 
                            $path = "../".BRIDGE."".key($files["ongoing"][$i]);
		                  $project = json_decode(file_get_contents($path),true);
                            //print_r($project);
                    ?>
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($project['title']); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($project['location']); ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='../../construction/delete.php' method='POST'> 
                                    <input type='hidden' name='filename' value='<?php echo(key($files["ongoing"][$i])); ?> '>
                                    <input type='hidden' name='state' value='ongoing'>  
                                    <input type='hidden' name='link' value='bridges'> 
                                    <input type='hidden' name='project_path' value='<?php echo(BRIDGES); ?> '> 
                                    <input type='hidden' name='path_to_file' value=' <?php echo(BRIDGE); ?>'>  
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                            
                    <?php

                        }
                    ?>
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
    <!-- *********************************  Bridges finished projects     *********************************************       -->     
                    
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Bridges Finished projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                                            
                    <?php

                        //$files = json_decode(file_get_contents("../".ROADS),true);
                       
                       # Roads finished  projects
                        $length = $files["finished_num"];                      
                        for ($i=0; $i <$length ; $i++) { 
                            $path = "../".BRIDGE."".key($files["finished"][$i]);
		                    $project = json_decode(file_get_contents($path),true);
                            //print_r($project);
                    ?>
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($project['title']); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($project['location']); ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='../../construction/delete.php' method='POST'> 
                                    <input type='hidden' name='filename' value='<?php echo(key($files["finished"][$i])); ?> '>
                                    <input type='hidden' name='state' value='finished'>  
                                    <input type='hidden' name='link' value='bridges'> 
                                    <input type='hidden' name='project_path' value='<?php echo(BRIDGES); ?> '> 
                                    <input type='hidden' name='path_to_file' value=' <?php echo(BRIDGE); ?>'>  
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                            
                    <?php

                        }
                    ?>
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
   <!-- *********************************  Buildings ongoing projects     *********************************************       -->                 
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Buildings ongoing projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                                            
                    <?php

                        $files = json_decode(file_get_contents("../".BUILDINGS),true);
                       
                       # Roads finished  projects
                        $length = $files["ongoing_num"];                      
                        for ($i=0; $i <$length ; $i++) { 
                          $path = "../".BUILDING."".key($files["ongoing"][$i]);
		                  $project = json_decode(file_get_contents($path),true);
                            //print_r($project);
                    ?>
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($project['title']); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($project['location']); ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='../../construction/delete.php' method='POST'> 
                                    <input type='hidden' name='filename' value='<?php echo(key($files["ongoing"][$i])); ?> '>
                                    <input type='hidden' name='state' value='ongoing'>  
                                    <input type='hidden' name='link' value='buildings'> 
                                    <input type='hidden' name='project_path' value='<?php echo(BUILDINGS); ?> '> 
                                    <input type='hidden' name='path_to_file' value=' <?php echo(BUILDING); ?>'>  
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                            
                    <?php

                        }
                    ?>
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->             
                    
    <!-- *********************************  Buildings finished projects     *********************************************       -->             
             
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Buildings Finished projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                                            
                    <?php

                        //$files = json_decode(file_get_contents("../".ROADS),true);
                       
                       # Roads finished  projects
                        $length = $files["finished_num"];                      
                        for ($i=0; $i <$length ; $i++) { 
                            $path = "../".BUILDING."".key($files["finished"][$i]);
		                    $project = json_decode(file_get_contents($path),true);
                            //print_r($project);
                    ?>
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($project['title']); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($project['location']); ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='../../construction/delete.php' method='POST'> 
                                    <input type='hidden' name='filename' value='<?php echo(key($files["finished"][$i])); ?> '>
                                    <input type='hidden' name='state' value='finished'>  
                                    <input type='hidden' name='link' value='buildings'> 
                                    <input type='hidden' name='project_path' value='<?php echo(BUILDINGS); ?> '> 
                                    <input type='hidden' name='path_to_file' value=' <?php echo(BUILDING); ?>'>  
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                            
                    <?php

                        }
                    ?>
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    
                    
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
