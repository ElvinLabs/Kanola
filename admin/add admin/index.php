

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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    
    
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../add admin" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="uname" name="uname" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" type="emsil" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               
                                 <div class="form-group">
                                    <input class="form-control" name="login" type="submit" value="Add">
                                </div>
                            </fieldset>
                        </form>
                        
                        
                        
                        <?php 
                        
                             require "../../../../functions&defined/function.php";

                            if($_POST){
                                 $conn = connection();
                                 $email = mysqli_real_escape_string( $conn, $_POST['email']);
                                 $uname = mysqli_real_escape_string( $conn, $_POST['uname']);
                                 $upass = md5(mysqli_real_escape_string( $conn, $_POST['password']));
                                 $query="INSERT INTO Users (username,email,password) VALUES('$uname','$email','$upass')";

                                if( $conn->query($query) ){

                                    print("<script>alert('successfully registered');</script>");    

                                }else  print("<script>alert('error while registering you');</script>");



                                $conn->close();
                            }

                        
                        ?>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

</body>

</html>



