
<?php

/*
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:../login");
       // echo $_SESSION['user'];
    }
*/
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
                    <h2 class="page-header"><b>Heavy Machinary</b></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            heavy machinary edit
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
                                    <label>Model: JADE</label><br>
                                    <label>Brand: HONDA</label>
                                    <form role="form" action="show_auto.php" method="post"  accept-charset="utf-8">
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
                                
                                <?php 
                                
                                    if($_POST){
                                    
                                        print("came");
                                    
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
