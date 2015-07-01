<?php






    require "../../functions&defined/function.php";



    $category    = isset($_POST['category']) ? $_POST['category'] : "";
    $brand       = isset($_POST['brand']) ? $_POST['brand'] : "" ;
    $model       = isset($_POST['model']) ? $_POST['model'] : "";
    $model_yr  = isset($_POST['modelyear']) ? $_POST['modelyear'] : "";
    $condition   = isset($_POST['condition']) ? $_POST['condition'] : "";
    $mileage     = isset($_POST['mileage']) ? $_POST['mileage'] : "" ;
    $transmition = isset($_POST['transmition']) ? $_POST['transmition'] : "";
    $capacity    = isset($_POST['capacity']) ? $_POST['capacity'] : "";
    $fuel_type   = isset($_POST['ftype']) ? $_POST['ftype'] : "";
    $location    = isset($_POST['location']) ? $_POST['location'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $files       = isset($_FILES['files'] ) ? $_FILES['files'] : "";



    if(isset($_POST)){
    

        
        $name = create_file_name();
        $conn = connection(); 
        add_auto($conn, $name, $category, $brand, $model, $model_yr, $condition, $mileage, $transmition, $capacity, $fuel_type, $location, $description, $files );
        
 
        
        
    
    
    
    }




    











?>