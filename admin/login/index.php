  <?php

    session_start();
    if(isset($_SESSION['user'])!="")
    {
        header("Location:../main/");
    }                   
?>


<?php 

    if($_POST){  
        require "../../functions&defined/function.php";
        $conn = connection();
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $upass = mysqli_real_escape_string($conn,$_POST['password']);
        $query="SELECT * FROM Users WHERE username='$uname'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();                             
        if($row['Password']==md5($upass) ){
            $_SESSION['user'] = $row['user_id'];
            header("Location: ../main/"); 
        }else print("<script>alert('wrong details');</script>"); 
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
                        <form role="form" action="index.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="uname" name="uname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <div class="form-group">
                                    <input class="form-control" name="login" type="submit" value="Login">
                                </div>
                            </fieldset>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>



