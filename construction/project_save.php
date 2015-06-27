<?php 

require '../functions&defined/function.php';
	
	$title 		 = $_POST["title"];
	$client		 = $_POST["client"];
	$location	 = $_POST["location"];
	$start_date  = $_POST["start_date"];
	$description = $_POST["description"];
	$state 		 = isset($_POST["state"]) ? $_POST["state"] : "ongoing";
	$start_date  = isset($_POST["start_date"]) ? $_POST["start_date"] : '';
	$cmplt_date  = isset($_POST["cmpt_date"]) ? $_POST["cmpt_date"] : '';
	$type		 =isset( $_POST["type"]) ? $_POST["type"] : '';
	// take imagess urls


	$project_path = array("ROAD"=>ROADS,"BUILDING"=>BUILDINGS,"BRIDGE"=>BRIDGES);
	$file_path = array("ROAD"=>ROAD,"BUILDING"=>BUILDING,"BRIDGE"=>BRIDGE);
	//echo $types[$type];


	if ($_POST) {

		if ($title != NULL && $client != null && $location != null && $cmplt_date !=null && $start_date !=null && $description != null) {
			
			$one =json_string_one( $title, $client , $location, $start_date, $cmplt_date);
            $images = array();
            $name = create_file_name();
			//$images =image_urls("123.jpg","124.jpg","125.jpg");
            

            
            
            
            if(isset($_FILES['files'])){
                
                
                            print_r($_FILES['files']);
                            $errors= array();

                            $desired_dir=explode('.json',$file_path[$type]."images/".$name)[0];
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
                                echo "Success";
                            }
                
                
                            print_r($images);
                        }
            
            

                    $two  = json_string_two($one ,$description, $images);
                    $path = $file_path[$type]."/".$name;

            

            

				if( write_file($path,$two) ){
						add_project( $state ,$name, $title ,$location, $project_path[$type]);
    						
				}else{
					print(WRITIING_ERROR);
				} 
		}

	}

	else{

		echo NOTFILL;
	}


		



 ?>