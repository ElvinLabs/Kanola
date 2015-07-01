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
                    
                    
<!-- *********************************  Highways  ongoing projects     *********************************************       -->
                    <?php  
                    
                        require '../../functions&defined/function.php';                    
                        $conn = connection();
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Bridge ongoing projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                    <?php

                        
                        $query_ongoing_highways = "SELECT * FROM Bridge WHERE Project_state='Ongoing'";
                        $result = $conn->query($query_ongoing_highways);

                        if($result->num_rows >0){
                        
                            while( $row = $result->fetch_assoc() ){        

                    ?>
                
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Location"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='delete_project.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]);   ?> '>
                                    <input type='hidden' name='type' value='Bridge'>                                     
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                       <?php


                            }
                        }else{
                        
                        
                            echo "Np project yet";
                        }

                    

                       ?>
                    
                                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
<!-- *********************************  Highways  complete projects     *********************************************       -->
                    
       
                         <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Bridge Complete projects</h2>
                     </div>
                    <div class="panel-body">
                         <div class="row">
                                            
                    <?php

                        
                        $query_complete_highways = "SELECT * FROM Bridge WHERE Project_state='Complete'";
                        $result = $conn->query($query_complete_highways);

                        if($result->num_rows >0){
                        
                            while( $row = $result->fetch_assoc() ){
                       

                    ?>
                
                                            
                                            
                             <div class="col-md-4 col-sm-4 proj">
                                  <table class="table">
                                    <tbody>
                                        <tr>                                            
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Location"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='delete_project.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]);   ?> '>
                                    <input type='hidden' name='type' value='Bridge'>                                     
                                    <input type='submit' class="btn btn-default delete" value='delete'> 
                                </form>



                            </div>
                        
                       <?php


                            }
                        }else{
                        
                        
                            echo "No projects added yet";
                        }

                    

                       ?>
                             
                             
                    <?php

                        $conn->close();

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
