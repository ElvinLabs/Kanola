
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
                    <h2 class="page-header"><b>Add Auto Vehicle</b></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6"> 
                                    <form role="form" action="index.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" >  
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
                                            <label>Mileage</label>
                                            <input class="form-control" type="text" name="mileage" value="" placeholder="eg: 10000Km">
                                        </div>  
                                        <div class="form-group">
                                            <label>Transmition</label>
                                            <select class="form-control" name="transmition">
                                                <option value="Manual">Manual</option>
						                      <option value="Automatic">Automatic</option>
                                                <option value="Other">Other Transmition</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Engine Capacity(cc)</label>
                                            <input class="form-control" type="text" name="capacity" value="" placeholder="eg: 1000cc" required>
                                        </div>
                                        
                                        </div><div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Fuel type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="ftype" value="Diesel" placeholder="">Diesel
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="ftype" value="Petrol" placeholder="">Petrol
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="ftype" value="Other" placeholder="">Other
                                                </label>
                                            </div>
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
                                            <input type="file"  name="files" id="imgid" multiple/ >
                                            <img src="#" alt="your image" id="image" style="width:100px;height:100px;">   
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="" value="Save" placeholder="save">
                                        </div>
                                    </form> 
                                    <?php 
                                        if($_POST){  
                                            $category    = isset($_POST['category']) ? $_POST['category'] : "";
                                            $brand       = isset($_POST['brand']) ? $_POST['brand'] : "" ;
                                            $model       = isset($_POST['model']) ? $_POST['model'] : "";
                                            $model_yr    = isset($_POST['modelyear']) ? $_POST['modelyear'] : "";
                                            $condition   = isset($_POST['condition']) ? $_POST['condition'] : "";
                                            $mileage     = isset($_POST['mileage']) ? $_POST['mileage'] : "" ;
                                            $transmition = isset($_POST['transmition']) ? $_POST['transmition'] : "";
                                            $capacity    = isset($_POST['capacity']) ? $_POST['capacity'] : "";
                                            $fuel_type   = isset($_POST['ftype']) ? $_POST['ftype'] : "";
                                            $location    = isset($_POST['location']) ? $_POST['location'] : "";
                                            $description = isset($_POST['description']) ? $_POST['description'] : "";
                                            $files       = isset($_FILES['files'] ) ? $_FILES['files'] : "";

                                            echo "came";
                                            print_r($files);
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
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../../dist/js/sb-admin-2.js"></script>
</body>
</html>