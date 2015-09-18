<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:../login");
       // echo $_SESSION['user'];
    }
?>
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
                    <h2 class="page-header"><b>Kanola Auto and Heavy Mechinary</b></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Availble Vehicles
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
                                    require '../../functions&defined/function.php';
                                    $query_auto = "SELECT * FROM Auto";
                                    $conn = connection();
                                    $result = $conn->query($query_auto);
                                    if( $result->num_rows > 0){
                                        while( $row = $result->fetch_assoc() ){
                                            
                                            $file_name = $row['file_name'];
                                ?>        
                                <div class="col-md-4 col-sm-4">   
                                    <img  class="img-responsive"  src="<?php echo('../../Auto/images/'.$file_name.'/'.$file_name.'-0.jpg'); ?>">                              
                                    <form role="form" action="index.php" method="post"  accept-charset="utf-8">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="file_name" value="<?php echo ($file_name); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="count" value="<?php echo($row['Img_count']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" class="btn btn-default" type="submit" value="remove" >
                                        </div>
                                    </form>                                   
                                </div>                    
                                <?php
                                        }                                   
                                    }else  echo $conn->error;
                                ?>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                                  
                                      
                                           
                                <?php   
                                    if($_POST){
                                        $file_name  = isset($_POST['file_name']) ? $_POST['file_name'] : '';
                                        $image_count    = isset($_POST['count']) ? $_POST['count'] : '';
                                        $conn  = connection();
                                        $dir = "../../Auto/images/".$file_name;
                                        $result = auto_delete_img( $dir ,$image_count,$file_name);
                                        
                 
                                        if($result){
                                            $query = "DELETE FROM Auto WHERE file_name='$file_name'";
                                            if( $conn->query($query) == true){
                                                echo "<script> alert('image removed');</script>";
                                                echo "image removed";
                                            }else echo $conn->error;
                                            $conn->close();
                                        
                                        }
                                        
                                       
                                    }
                                ?>
                  
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
