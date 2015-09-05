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
                            Add new project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php" method="post"  accept-charset="utf-8" >
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" value="" placeholder="title" required>
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
                                            
                                             <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Interlock">Interlock
                                                </label>
                                            </div>
                                            
                                             <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="Asphalt">Asphalt
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Project State</label>
                                            <select class="form-control" name="state">
                                                <option value="Ongoing" >Ongoing</option>
                                                <option value="Complete" >Completed</option>
                                            </select>
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="submit" name="" value="Save" placeholder="save">
                                        </div>
                                    </form>
                                    <?php 
                                        require '../../functions&defined/function.php';
                                            if($_POST){
                                                $title 		 = isset($_POST["title"]) ? $_POST['title'] : print( "plese insert the title");
                                                $type		 = isset( $_POST["type"]) ? $_POST["type"] : print("plase select the type");
                                                $state 		 = isset($_POST["state"]) ? $_POST["state"] : print("plase select the state");
                                                $conn        = connection();
                                                add_project($conn,$title,$type,$state);
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