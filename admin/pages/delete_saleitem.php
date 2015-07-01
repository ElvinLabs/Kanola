<?php 

	require '../../functions&defined/function.php';


        
	// this function is delete the given file
	function delete_auto_file( $file_name, $file_path, $state ,$link){
        
            $real_path = "127.0.0.1/kanola/auto&hevymachinary/".$link."/".$file_name;
            print($real_path."<br>");
        
            $content = json_decode( file_get_contents( $real_path ), true );
            $count = count($content['images_url']);
            echo $count;
        print_r($content);
     /*   
            for( $i=0 ; $i<$count; $i++ ){
            
                $real_img_path =$file_path."".$content['images_url'][$i]; 
               if(! unlink( $real_img_path ) ){
                    echo "can't delete images";
                    return true;
               }
            
            }
        
             $dir =$file_path."".$link.explode('.json', "/images/".$file_name)[0];              
             rmdir( $dir );
             print($dir." deleted");
        
        
        
         # delete the project file
		if (unlink($real_path)) {
			echo "project deleted";
			// called to function delete the data from projects file
			return delete_name($file_name, $state, $file_path, $link );
		}else{
			echo "can't delete the project";
			return false;
		}
*/
	}




    	// this function is delete the name of the project in main projects file
	function delete_name( $file_name ,$state, $file_path, $link){
            $projects_path = $file_path."".$link.".json";
            
			$file_content = json_decode( file_get_contents( $projects_path ), true );
			$count =$file_content['count'];
		
			print($count."<br>");

			for ($i=0; $i <$count ; $i++) { 

				print(key( $file_content[$state][$i])."<br>" );	# get the key from key,pair 
                
				if ( key( $file_content[$state][$i] )==$file_name ) {	
					echo "found";				
					unset( $file_content[$state][$i] );	# delete the tha file from list
					$file_content["count"]--;
				 	return	write_file( $projects_path, $file_content );
				}
			}
        
			return "can't delete the project from project file";
        
             
               
	}



    






	$file_name 		= $_POST['filename'];		# name of the file
	$file_path		= $_POST['path_to_file']; 	# path to file without file name
	$state	   		= $_POST['state'];  		# state of the project ongoing or finished  
    $link           = $_POST['link'];
//	$project_path 	= $_POST['project_path'];	#  path of the main file



//	print($file_name."<br>");
//	print($file_path."<br>");
//	print($state."<br>");
//    print($link);


	print(delete_auto_file( $file_name, $file_path, $state ,$link)."<br>");
	//print( delete_name($state , $file_name,$project_path ));










 ?>