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
           <?php 

                include "nav_bar_top.html";

            ?>
            <!-- /.navbar-top-links -->

                <?php 
                    include "navbar_left.html";
                ?>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add new project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
              
                                    <form role="form" action="add_project.php" method="post"  accept-charset="utf-8" >
                                        
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" value="" placeholder="title" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Client</label>
                                            <input class="form-control" type="text" name="client" value="" placeholder="client" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Project type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Highways" placeholder="Road">Highway
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Irrigation">Irrigation
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Buildings">Buildings
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Bridges">Bridge
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Water_Drainage">Water_Drainage
                                                </label>
                                            </div>
                                        </div>
                                        
                                        
<!--
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" type="text" name="location" value="" placeholder="location" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input class="form-control" type="date" name="start_date" value="" placeholder="dd-mm-yy" required>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label>Complete Date</label>
                                            <input class="form-control" type="date" name="cmpt_date" value="" placeholder="dd-mm-yy" required>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" name="description" placeholder="description" required rows="10"></textarea>
                                        </div>
-->
                                        <div class="form-group">
                                            <label>Project State</label>
                                            <select class="form-control" name="state">
                                                <option value="Ongoing" >Ongoing</option>
                                                <option value="Complete" >Finished</option>
                                            </select>
                                        </div>


                                        
<!--
                                        <div class="form-group">
                                            <label>Upload Images</label>
                                            <input type="file" type="file" name="files[]" multiple/ >
                                        </div>
-->
                                        
                                        <div class="form-group">
                                            
                                            <input type="submit" name="" value="Save" placeholder="save">
                                        </div>
                                   
                                        
                                    </form>
                                    
                                    
                                    <?php 

                                        require '../../functions&defined/function.php';



                                            if($_POST){


                                                $title 		 = isset($_POST["title"]) ? $_POST['title'] : print( "plese insert the title");
                                                $client		 = isset($_POST["client"]) ? $_POST['client'] : print("plese insert the client");
                                                $type		 = isset( $_POST["type"]) ? $_POST["type"] : print("plase select the type");
                                                $state 		 = isset($_POST["state"]) ? $_POST["state"] : print("plase select the state");
                                                
                                                // create a mysqli connection
                                                $conn = $conn = connection();
                                                // pass parameters to to save in database
                                                add_project($conn,$title,$client,$type,$state);
                                                //echo "INSERT INTO $type (TITLE,CLIENT,TYPE,STATE) VALUES ('$title','$client','$type','$state')";



                                            }



                                         ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                          
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
