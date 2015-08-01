<html>


<body>
    
        <form action="tester.php" method="post">
    
            <input type="text" name="test" >
            <input type="submit" name="send">
    
        </form>
    
    
    
    
    
        <?php 
    
    
    
            if($_POST){
            
            
                echo htmlentities($_POST['test']."<br>");
               // $test = htmlentities($_POST['test']);
                $test = $_POST['test'];
                require "functions&defined/function.php";
                
                $conn  = connection();
                
                $query = "insert into test(test) values('$test')";
                
                if($conn->query($query)){
                
                    echo "inserted";
                
                }
            
            }
    
    
        ?>
    
    </body>

</html>



