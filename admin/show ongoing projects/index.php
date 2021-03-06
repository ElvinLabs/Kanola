
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
                    <h2 class="page-header"><b>Construction Ongoing Project</b></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                    
<!-- *********************************  Highways  Ongoing projects     *********************************************       -->
                    <?php                     
                        require '../../functions&defined/function.php';                    
                        $conn = connection();
                        $query = "SELECT * FROM Highways WHERE State='Ongoing'";                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                         <p> Highways ongoing projects</p>   
                     </div>                        
                    <div class="panel-body">
                         <div class="row">
                             <?php 
                             
                                $result = $conn->query($query) ;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                   
                             ?>                             
                             <div class="col-md-4 col-sm-4 proj">
                              <form action='index.php' method='POST'>                                
                                  <table class="table ">
                                    <tbody>
                                        <tr>                                                                                       
                                           <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>                                      
                                    </tbody>
                                    
                                 </table>
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>                    
                            <!-- /.row (nested) -->
                                  <?php                                    
                                    }                          
                                }                        
                             ?>
                        </div>
                        </div>
                   <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->          
 <!--**************************************Irrigation Ongoing projects***************************************** -->
                    <?php                     
                        $query = "SELECT * FROM Irrigation WHERE State='Ongoing'";                  
                    ?>                   
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <p> Irrigation Ongoing projects</p>   
                     </div>                      
                    <div class="panel-body">
                         <div class="row">
                             <?php                              
                             $result = $conn->query($query) ;
                               // echo $result->num_rows;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){
                                    
                             ?>                                                      
                             <div class="col-md-4 col-sm-4 proj">
                                 <table class="table">
                                    <tbody>
                                        <tr>                                                                                       
                                            <td><b><?php 
                                                echo( ($row["Title"]));
                                                ?></b>
                                            </td>
                                        </tr>
                                    </tbody>
                                 </table>
                                <form action='index.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>          
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                }
                             
                             ?>
                        </div>
                        </div>
                      <!-- /.panel-body -->
                    </div>
                   <!-- /.panel -->                    
 <!--*****************************************Bridges Ongoing projects********************************************* -->                    
                    <?php 
                        $query = "SELECT * FROM Bridges WHERE State='Ongoing'";
                    ?>
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <p> Bridges Ongoing projects</p>   
                     </div>                     
                    <div class="panel-body">
                         <div class="row">
                             <?php                            
                                $result = $conn->query($query) ;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){                                  
                             ?>                              
                             <div class="col-md-4 col-sm-4 proj">
                                 <table class="table">
                                    <tbody>
                                        <tr>                                                                                      
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                    </tbody>
                                 </table>
                                <form action='index.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>
                        <!-- /.row (nested) -->
                                  <?php    
                                    }
                                }
                             ?>
                        </div>
                        </div>
                      <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->         
<!--*****************************************Buildings Ongoing projects********************************************* -->                     
                    <?php  
                        $query = "SELECT * FROM Buildings WHERE State='Ongoing'";
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <p>Buildings Ongoing projects</p>   
                     </div>                      
                    <div class="panel-body">
                         <div class="row">
                             <?php                             
                                $result = $conn->query($query) ;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){
                                    
                             ?>                             
                             <div class="col-md-4 col-sm-4 proj">
                                 <table class="table">
                                    <tbody>
                                        <tr>                                             
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                    </tbody>
                                 </table>
                                <form action='index.php' method='POST'>
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>                     
                            <!-- /.row (nested) -->
                                  <?php      
                                    }
                                }
                             ?>
                        </div>
                        </div>    
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->       
<!--***************************************** Water_drainage Ongoing projects********************************************* -->                    
                    <?php  
                        $query = "SELECT * FROM Water_drainage WHERE State='Ongoing'";
                    ?>
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <p>Water Drainage Ongoing projects</p>   
                     </div>
                        
                    <div class="panel-body">
                         <div class="row">
                             <?php 
                                $result = $conn->query($query) ;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){     
                             ?>                          
                             <div class="col-md-4 col-sm-4 proj">
                                 <table class="table">
                                    <tbody>
                                        <tr>                                            
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                    </tbody>
                                 </table>
                                <form action='index.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>
                            <!-- /.row (nested) -->
                                  <?php      
                                    }
                                }
                             ?>
                        </div>
                        </div>   
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->      
 <!--***************************************** Interlock Ongoing projects********************************************* -->
                     <?php   
                        $query = "SELECT * FROM Interlock WHERE State='Ongoing'";
                    ?>
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <p>Interlock Ongoing projects</p>   
                     </div>    
                    <div class="panel-body">
                         <div class="row">
                             <?php  
                                $result = $conn->query($query) ;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){       
                             ?> 
                             <div class="col-md-4 col-sm-4 proj">
                                 <table class="table">
                                    <tbody>
                                        <tr>                                             
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr> 
                                    </tbody>  
                                 </table>
                                <form action='index.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>                       
                            <!-- /.row (nested) -->
                                  <?php      
                                    }
                                }
                             ?>
                        </div>
                        </div>   
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->            
<!--***************************************** Asphalt Ongoing projects********************************************* -->    
                     <?php  
                        $query = "SELECT * FROM Asphalt WHERE State='Ongoing'";
                    
                    ?>               
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <p> Asphalt Ongoing projects</p>   
                     </div>
                        <div class="panel-body">
                         <div class="row">
                             <?php 
                                $result = $conn->query($query) ;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){      
                             ?> 
                             <div class="col-md-4 col-sm-4 proj">
                                 <table class="table">
                                    <tbody>
                                        <tr>                                             
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr> 
                                    </tbody>
                                 </table>
                                <form action='index.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>
                            </div>                                              
                            <!-- /.row (nested) -->
                                  <?php    
                                    }
                                }
                             ?>
                        </div>
                        </div>   
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --> 
                    
<!--***************************************** End projects********************************************* -->
                        <?php
                            $conn->close();
                        ?>                                
<!--***************************************** delete projects********************************************* -->                
                        <?php 
                            if( $_POST ){    
                                $id = isset( $_POST['id']) ? $_POST['id'] : "";
                                $type = isset( $_POST['type']) ? $_POST['type'] : "";                          
                                $query_img = "DELETE FROM $type WHERE Id='$id'";
                                $conn = $conn = connection();
                                if( $conn->query($query_img)){
                                    print("<script>alert('Project removed');</script>");
                                }else{
                                    print("<script>alert('Error');</script>");
                                }
                            }
                        ?>
                </div>
                <!-- /.col-lg-12 -->
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
