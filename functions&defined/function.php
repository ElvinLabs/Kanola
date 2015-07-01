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


function add_project( $conn, $name, $title, $client, $type, $location, $srt_date, $cmlt_date, $description, $state, $files ){
    $image_path = "../../".$type."/images/".$name;
    $images = save_img( $files , $image_path);
    //echo $images;
              
    $query = "INSERT INTO ".$type." (Id, Title, Client , Location, Srt_date, Cmpt_date, Description, Project_state, Images) VALUES ('$name', '$title' , '$client', '$location' , '$srt_date', '$cmlt_date', '$description', '$state', '$images' )"; 
 
   // print($query."<br>");

    if($conn->query($query)==true){
        
        echo "inserted";
    }else{
        echo "error<br>". $conn->error;
        
    }
    
    
    $conn->close();
        
}




        
   function add_auto($conn, $name, $category, $brand, $model, $model_yr, $condition, $mileage, $transmition, $capacity, $fuel_type, $location, $description, $files ){
       
          $image_path = "../../Auto/images/".$name;
          $images = save_img( $files , $image_path);
        
        $query = "INSERT INTO Auto (Category, Brand, Model, Model_yr, Cdtn, Mileage, Transmition, Eng_cap, Fuel_type, Location, Description, Images) VALUES ('$category', '$brand', '$model', '$model_yr', '$condition', '$mileage', '$transmition', '$capacity', '$fuel_type','$location,'$description', '$images')";
       
       
       if( !($conn->query( $query))== true ){
       
            echo "error<br>". $conn->error;
        
       }else{
       
        echo "inserted";
       }
       
       
       
       $conn->close();
            
   }

  


   


?>