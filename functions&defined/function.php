<?php



require "define.php";


        


    function create_file_name(){

		$t = microtime(true);
		$micro = sprintf("%06d",($t - floor($t)) * 1000000);
		$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
		$filename = $d->format("YmdHisu");
		return $d->format("YmdHisu")  ;
	}


    function connection(){
        
        $con = mysqli_connect(HOST, UNAME, PW, DBNAME);       
        if(mysqli_connect_error() ){      
            echo( "Failed to connect to MySQL:" .mysqli_connect_error() );
        }else return $con;
    }

    function conn_close($conn){
    
    
        $conn->close();
    }




    function save_img( $files,  $desired_dir){
              
        $errors = array();
        $images ="";
        //$desired_dir ="../../bridges/images/123";
        
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){

            $file_name = $key.$_FILES['files']['name'][$key];
            $file_size =$_FILES['files']['size'][$key];
            $file_tmp =$_FILES['files']['tmp_name'][$key];
            $file_type=$_FILES['files']['type'][$key];
                                        
            $img_path = $desired_dir.'/'.$file_name;                                   
            $images = $images.",".$img_path;
            
            if($file_size > 3145728){
                $errors[]='File size must be less than 3 MB';
            }
          
            
            if(empty($errors)==true){
                if(is_dir($desired_dir)==false){
                    mkdir("$desired_dir", 0700);		// Create directory if it does not exist
                }
                if(is_dir("$desired_dir/".$file_name)==false){
                    move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                }else{									// rename the file if another one exist
                    $new_dir="$desired_dir/".$file_name.time();
                    rename($file_tmp,$new_dir) ;				
                }
                		
            }else{
                print_r($errors);
            }
        }
                                
        if(empty($error)){
            echo "Success";
            return $images;
        }else return "error";            

  
    }

// function for add the project
function add_project( $conn,$title, $client, $type, $state){
    //create a unique id
    $p_id = create_file_name();
    $query ="INSERT INTO $type (P_id,Title,Client,Type,State) VALUES ('$p_id','$title','$client','$type','$state')";
    
    // execute the mysqli query
    if($conn->query($query)==true){
        
        echo "<script>alert('Successfuly Added');</script>";
    }else{
        echo "error<br>". $conn->error;
        echo "<script>alert('Error Not Added');</script>";
        
    }
        
    $conn->close();
        
}



function save_one_image($desired_dir,$file){

        $errors = array();
        $images ="";
        $key =$_FILES['files']['tmp_name'];
       
            $file_name =$_FILES['files']['name'];
            $file_size =$_FILES['files']['size'];
            $file_tmp =$_FILES['files']['tmp_name'];
            $file_type=$_FILES['files']['type'];
                                        
            $img_path = $desired_dir.'/'.$file_name;                                   
            $images = $images.",".$img_path;
            
            if($file_size > 5145728){
                $errors[]='File size must be less than 3 MB';
            }

             if(empty($errors)==true){
                
                if(is_dir("$desired_dir/".$file_name)==false){
                    move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                }else{									// rename the file if another one exist
                    $new_dir="$desired_dir/".$file_name.time();
                    rename($file_tmp,$new_dir) ;				
                }
                		
            }else{
                print_r($errors);
            }
    
    
        if(empty($error)){
            echo "Success";
            return $images;
        }else return $errors;  


}

function add_project_image($type,$path,$alt_text){
        
        $query = "INSERT INTO $type (Path,AltText) VALUES ('$path','$alt_text')";
        $conn = connection();
    
        if( $conn->query($query) ==true ){
            $conn->close();
            return true;
        }else {
            $conn->close();
            return false;
        }
}

        
function add_auto($conn, $name, $category, $brand, $model, $model_yr, $condition, $mileage, $transmition, $capacity, $fuel_type, $location, $description, $files ){
       
    $image_path = "../../Auto/images/".$name;
    $images = save_img( $files , $image_path);
            
    $query = "INSERT INTO Auto ( Id,Category, Brand, Model, Model_yr, Cdtn, Mileage, Transmition, Eng_cap, Fuel_type, Location, Description, Images) VALUES ('$name','$category', '$brand', '$model', '$model_yr', '$condition', '$mileage', '$transmition', '$capacity', '$fuel_type','$location,'$description', '$images')";
    
    
    print($query."<br>");
       
       
    if( !($conn->query( $query))== true ){
           
        echo "error<br>". $conn->error;
        
    }else{
       
        echo "inserted";
    }
       
           
       
    $conn->close();
            
}

  


   


?>