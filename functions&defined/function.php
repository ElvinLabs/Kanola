<?php



require "define.php";


        
function connection(){  
        $con = mysqli_connect(HOST, UNAME, PW, DBNAME);       
        if(mysqli_connect_error() ){      
            echo( "Failed to connect to MySQL:" .mysqli_connect_error() );
        }else return $con;
    }

function create_file_name(){
		$t = microtime(true);
		$micro = sprintf("%06d",($t - floor($t)) * 1000000);
		$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
		$filename = $d->format("YmdHisu");
		return $d->format("YmdHisu")  ;
	}

function add_project( $conn, $title, $type, $state){
// function for add the project
    //create a unique id
    $p_id = create_file_name();
    $query ="INSERT INTO $type (P_id, Title, Type, State) VALUES ('$p_id','$title','$type','$state')";
    // execute the mysqli query
    if($conn->query($query)==true){    
        echo "<script>alert('Successfuly Added');</script>";
    }else{
//        echo "error<br>". $conn->error;
        echo "<script>alert('Error Not Added');</script>";    
    }    
    $conn->close();   
}

function save_img( $files,  $desired_dir,$dir_name){
        $errors = array();
        $images ="";
        $count = 0;
        
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){

            $file = explode(".",$key.$_FILES['files']['name'][$key]);
            $file_name =$dir_name."-".$count.".".end($file);
            //print($file_name);
            $count++;
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
            return true;
        }else return false;            

  
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
    
            //echo $img_path;
            
            if($file_size > 5145728){
                $errors[]='File size must be less than 5 MB';
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

// add the image for projects slider online or finished
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
// delete the image when give a path
function delete_img( $path ){

    $dir = $path;
    if( unlink($path) ){
        return true;
    }else return true;
}



// delete the image when give a path
function auto_delete_img( $path ,$count,$file_name){
    $folder = $path;
    $dir = $path."/".$file_name; 
    for($i=0; $i<$count; $i++){
        $path = $dir."-".$i.".jpg"; 
        if( unlink($path) ){
//            print("remove ".$path);
        }else return false;
        
    } 
    chmod($folder,0777);
    if( rmdir($folder) ){
        return true;
    }else return false;      
}

        
function add_auto( $category, $brand, $model, $model_yr, $condition, $mileage, $transmition, $capacity, $fuel_type, $location, $description, $files ){
    $conn = connection();
    $name = create_file_name();  
    $image_path = "../../Auto/images/".$name;
    $count = count($_FILES['files']['name']);
//    print($count);
    $result = save_img( $files , $image_path,$name);  
    $query = "INSERT INTO Auto ( file_name,Category, Brand, Model, Model_yr, Cdtn, Mileage, Transmition, Eng_cap, Fuel_type, Location, Description,Img_count) VALUES ('$name','$category', '$brand', '$model', '$model_yr', '$condition', '$mileage', '$transmition', '$capacity', '$fuel_type','$location','$description','$count')";   
//    print($query."<br>");   
    if($result){
        if( !($conn->query( $query))== true ){      
            echo "error<br>". $conn->error; 
          return false;
        }else{   
            return true;
        }           
    }     
    $conn->close();
}

  


   


?>