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
                            Add Auto Vehicle
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <form role="form" action="../../auto&hevymachinary/heavy_vehicle_save.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" >
                                        
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input class="form-control" type="text" name="category" value="" placeholder="eg: cab/car" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input class="form-control" type="text" name="brand" value="" placeholder="eg: BMW/Ford" required>
                                        </div>
                                        
                                    
                                        
                                        
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input class="form-control" type="text" name="model" value="" placeholder="eg: Alto" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Model year</label>
                                            <input class="form-control"  type="text" name="modelyear" value="" placeholder="eg: 2010" required>
                                        </div>
                                        
                                        
                                          <div class="form-group">
                                            <label>Condition</label>
                                            <select class="form-control" name="condition">
                                                <option value="New">New</option>
						                          <option value="Used">Used</option>
                                                <option value="Recondition">Recondition</option>
                                            </select>
                                        </div>
                                        
                      
                                        
                                         <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" type="text" name="location" value="" placeholder="location" required>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" placeholder="other options and details" rows="10" required ></textarea>
                                        
                                        </div>
                                        
                                        
                                      
                                        <div class="form-group">
                                            <label>Upload Images</label>
                                            <input type="file" type="file" name="files[]" multiple/ >
                                        </div>
                                        
                                        <div class="form-group">
                                            
                                            <input type="submit" name="" value="Save" placeholder="save">
                                        </div>
                                   
                                        
                                    </form>
                                    
                                    
                                    
                                    
                                    
                                    
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
