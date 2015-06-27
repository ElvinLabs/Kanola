<!DOCTYPE html>
<html>
<head>
	<title>kanola</title>
</head>
<body>
		<h1>kanola.com</h1>
		

		<?php 



		require 'functions&defined/function.php';


			if(isset($_FILES['files'])){
                
                
                print_r($_FILES['files']);
                $errors= array();
                
                $desired_dir=explode('.',"roads/images/".create_file_name())[0];
                foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                    
                    
                    $file_name = $key.$_FILES['files']['name'][$key];
                    $file_size =$_FILES['files']['size'][$key];
                    $file_tmp =$_FILES['files']['tmp_name'][$key];
                    $file_type=$_FILES['files']['type'][$key];	
                    
                    
                    if($file_size > 3145728){
                        $errors[]='File size must be less than 2 MB';
                    }
                    
                    
                    //$query="INSERT into upload_data (`USER_ID`,`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`) VALUES('$user_id','$file_name','$file_size','$file_type'); ";
                    
                    
                    
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
            }



		 ?>

</body>
</html>