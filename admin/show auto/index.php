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
                    <h2 class="page-header"><b>Construction Project</b></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ongoing project image edit
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
                                    require '../../functions&defined/function.php';
                                    $query_ongo = "SELECT * FROM Ongoing_img";
                                    $conn = connection();
                                    $result_ongo = $conn->query($query_ongo);
                                    if( $result_ongo->num_rows > 0){
                                        while( $row = $result_ongo->fetch_assoc() ){
                                ?>        
                                <div class="col-md-4 col-sm-4">   
                                    <img  class="img-responsive"  src="<?php echo($row['Path']); ?>">                              
                                    <form role="form" action="index.php" method="post"  accept-charset="utf-8">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="id" value="<?php echo ($row['Id']); ?>"  >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="type" value="Ongoing_img">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="path" value="<?php echo($row['Path']); ?>">
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
                 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            finished project image edit
                        </div>
                        <div class="panel-body">
                            <div class="row">     
                                  <?php
                                    $query_fini = "SELECT * FROM Finished_img";
                                    $result_fini = $conn->query($query_fini);
                                    if( $result_fini->num_rows > 0){
                                        while( $row = $result_fini->fetch_assoc() ){
                                ?>      
                                <div class="col-md-4 col-sm-4">   
                                    <img  class="img-responsive"  src="<?php echo($row['Path']); ?>">                              
                                    <form role="form" action="index.php" method="post"  accept-charset="utf-8">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="id" value="<?php echo ($row['Id']); ?>"  >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="type" value="Finished_img">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="path" value="<?php echo($row['Path']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" class="btn btn-default" type="submit" value="remove" >
                                        </div>
                                    </form>                                   
                                </div>                    
                                        
                                <?php
                                        }                                   
                                    }else  echo $conn->error;                                                                      
                                    $conn->close();
                                ?>            
                                <?php   
                                    if($_POST){
                                        $type  = isset($_POST['type']) ? $_POST['type'] : '';
                                        $id    = isset($_POST['id']) ? $_POST['id'] : '';
                                        $path  = isset($_POST['path']) ? $_POST['path'] : '';
                                        $conn  = connection();
                                        $query = "DELETE FROM $type WHERE Id='$id'";
                                        if( $conn->query($query) == true){
                                             delete_img( $path );
                                            echo "<script> alert('image removed');</script>";
                                            echo "image removed";
                                        }else echo $conn->error;
                                        $conn->close();
                                    }
                                ?>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
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
