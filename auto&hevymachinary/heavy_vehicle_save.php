<?php




    echo "working";


    require "../functions&defined/function.php";



    $category    = $_POST['category'];
    $brand       =$_POST['brand'];
    $model       = $_POST['model'];
    $model_year  = $_POST['modelyear'];
    $condition   = $_POST['condition'];
    $location    = $_POST['location'];
    $description = $_POST['description'];







    
    if(isset($_POST)){
    
    
        $one = array( "category"=>$category, "brand"=>$brand, "model"=>$model, "model_year"=>$model_year, "condition"=>$condition, "location"=>$location, "description"=>$description);
        
        
        $images = array();
        $name = create_file_name();
        
        
        
            
            if(isset($_FILES['files'])){
                
                
                //print_r($_FILES['files']);
                $errors= array();
                
                $desired_dir=explode('.json',MACHINERY_IMG."/".$name)[0];
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
        $path =MACHINERY."/".$name;
        $data = array( $name=>array( "category"=>$category, "brand"=>$brand, "model"=>$model, "model_year"=>$model_year, "img_url"=>$images[0] ) );
       
        //write_file($path,$one);
        
        if(write_file($path,$one)){
            if(!add_heavy_machinery($path , $data )){
                echo "ADDING ERROR";
            }else{
            
                echo "ADDED";
            }
        
        }else{
            echo "WRITING ERROR";
        }
        
        
        //print_r($one);
        
        
        
        
    
    
    
    }












?>