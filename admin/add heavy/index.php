
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin -  KANOLA</title>
  
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
     <!-- /.navbar-top-links -->
            <?php 
                require "../navbars/index.php";
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
                                    <form role="form" action="index.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" >
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input class="form-control" type="text" name="model" value="" placeholder="eg: Alto" required>
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
                                
                                
                                <?php 
                                        if($_POST){  
                                            $model       = isset($_POST['model']) ? $_POST['model'] : "";
                                            $location    = isset($_POST['location']) ? $_POST['location'] : "";
                                            $description = isset($_POST['description']) ? $_POST['description'] : "";
                                            $files       = isset($_FILES['files'] ) ? $_FILES['files'] : "";
                                            echo "came";
                                            print_r($files);
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
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../../dist/js/sb-admin-2.js"></script>
</body>
</html>
