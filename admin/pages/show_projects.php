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
                        <h2> Highways ongoing projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
            <!--**********************************************Highways Complete projects********************************************* -->
                    
                    
                    <?php  
                    
                        $query = "SELECT * FROM Highways WHERE State='Complete'";
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Highways Complete projects</h2>   
                     </div>
                        
                    <div class="panel-body">
                         <div class="row">
                             <?php 
                             
                                $result = $conn->query($query);
                                echo $result->num_rows;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){
                                    
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
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
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
                        <h2> Irrigation Ongoing projects</h2>   
                     </div>
                        
                    <div class="panel-body">
                         <div class="row">
                             <?php 
                             
                                $result = $conn->query($query) ;
                                echo $result->num_rows;
                                if( $result->num_rows > 0 ){
                                    while($row= $result->fetch_assoc() ){
                                    
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
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  
                    
                    
                    
                    
            <!--***********************************Irrigation Complete projects***************************************** -->
                    
                    <?php  
                    
                        $query = "SELECT * FROM Irrigation WHERE State='Complete'";
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Irrigation Complete projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
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
                        <h2> Bridges Ongoing projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --> 
             <!--*****************************************Bridges Complete projects********************************************* -->  
                    
                     <?php  
                    
                        $query = "SELECT * FROM Bridges WHERE State='Complete'";
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Bridges Complete projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
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
                        <h2>Buildings Ongoing projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --> 
                    
             <!--*****************************************Buildings Complete projects********************************************* -->
                    
                    <?php  
                    
                        $query = "SELECT * FROM Buildings WHERE State='Complete'";
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2> Buildings Complete projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
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
                        <h2>Water Drainage Ongoing projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --> 
           <!--***************************************** Water_drainage Complete projects********************************************* --> 
                      <?php  
                    
                        $query = "SELECT * FROM Water_drainage WHERE State='Complete'";
                    
                    ?>
                    
                    <div class="panel panel-default">                   
                     <div class="panel-heading">
                        <h2>Water Drainage Complete projects</h2>   
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
                                           <td><b>Title</b> </td>
                                            <td><b><?php echo($row["Title"]);  ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Location</b></td>
                                            <td><b> <?php echo($row["Client"]);  ?> </b></td>
                                        </tr>
                                    </tbody>
                                    
                                 </table>
                                <form action='show_projects.php' method='POST'> 
                                    <input type='hidden' name='id' value='<?php echo($row["Id"]); ?> '>
                                    <input type='hidden' name='type' value='<?php echo($row["Type"]); ?>'>                                     
                                    <input type='submit' class="btn btn-default delete" value='remove'> 
                                </form>



                            </div>
                    
                                                 
                        </div>
                            <!-- /.row (nested) -->
                                  <?php
                                        
                                    }
                                
                                }
                             
                             ?>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --> 
                    
                    <!--***************************************** End projects********************************************* -->   
                    
                    
                    
                    
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
