
    
    
        <?php 
    
    
//    
//            
//            
//                require "functions&defined/function.php";                
//                $conn  = connection();              
//                $query = "select password from users where username='admin'";

//                $result = $conn->query($query);

//
                $upass = md5("kanola@321");
                $query1  = "insert into users (username,email,password) values('Admin','admin@kanola.lk','$upass')";
                  $result = $conn->query($query1);


                    if($result){
                    
                        echo 'ok';
                    }else{
                    
                        echo $result->mysqli_error();
                    }

                    


                     require "functions&defined/function.php";
                    $conn = connection();
                    
                    $query="SELECT * FROM Users WHERE username='Admin'";
                    $upass = 'kanola@321';
                    $result = $conn->query($query);
                    $row = $result->fetch_assoc();                             
                    if($row['Password']==md5($upass) ){
                       echo "matched";
                    }else print("<script>alert('wrong details');</script>"); 


           
         
    
    
        ?>