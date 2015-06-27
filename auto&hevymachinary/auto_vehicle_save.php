<?php






    require "../functions&defined/function.php";



    $category    = isset($_POST['category']) ? $_POST['category'] : "";
    $brand       = isset($_POST['brand']) ? $_POST['brand'] : "" ;
    $model       = isset($_POST['model']) ? $_POST['model'] : "";
    $model_year  = isset($_POST['modelyear']) ? $_POST['modelyear'] : "";
    $condition   = isset($_POST['condition']) ? $_POST['condition'] : "";
    $mileage     = isset($_POST['mileage']) ? $_POST['mileage'] : "" ;
    $transmition = isset($_POST['transmition']) ? $_POST['transmition'] : "";
    $capacity    = isset($_POST['capacity']) ? $_POST['capacity'] : "";
    $fuel_type   = isset($_POST['ftype']) ? $_POST['ftype'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";



    if(isset($_POST)){
    
    
        $one = array( "category"=>$category, "brand"=>$brand, "model"=>$model, "model_year"=>$model_year, "condition"=>$condition, "mileage"=>$mileage, "transmition"=>$transmition, "capacity"=>$capacity, "fuel_type"=>$fuel_type, "description"=>$description);
        
        
        $images = array();
        $name = create_file_name();
        
        
        
            
            if(isset($_FILES['files'])){
                
                
                //print_r($_FILES['files']);
                $errors= array();
                
                $desired_dir=explode('.json',AUTO_IMG."/".$name)[0];
                foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                    
                    
                    $file_name = $key.$_FILES['files']['name'][$key];
                    $file_size =$_FILES['files']['size'][$key];
                    $file_tmp =$_FILES['files']['tmp_name'][$key];
                    $file_type=$_FILES['files']['type'][$key];
                                    
                    $img_path = $desired_dir.'/'.$file_name;
                                    
                    array_push( $images, $img_path);
                    
                    
                    if($file_size > 3145728){
                        $errors[]='File size must be less than 2 MB';
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
                        // mysql_query($query);			
                    }else{
                        print_r($errors);
                    }
                }
                if(empty($error)){
                    echo "image added";
                }
                    
                
                //print_r($images);
            }
            
            
        //print_r($one);
        $two = array("images_url"=>$images);
        $one  = array_merge($one, $two);
        $path =AUTO."/".$name;
        $data = array( $name=>array( "category"=>$category, "brand"=>$brand, "model"=>$model, "model_year"=>$model_year, "img_url"=>$images[0] ) );
       // write_file($path,$one);
        
        
        if(write_file($path,$one)){
            if(!add_auto_vehicle($path , $data )){
                echo "ADDING ERROR";
            }else{
            
                echo "fw;nfg";
            }
        
        }else{
            echo "WRITING ERROR";
        }
        
        
        print_r($one);
        
        
        
        
    
    
    
    }




    











?>