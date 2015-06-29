<?php 

	require '../functions&defined/function.php';


        
	// this function is delete the given file
	function delete_file($state,$file_name,$file_path, $project_path, $link ){
        
        
        
         $content = json_decode( file_get_contents($file_path), true );
         $count = count($content['images']);
        
        
          for( $i=0 ; $i<$count; $i++ ){
            
               if(! unlink($content['images'][$i]) ){              
                echo "can't delete images";
               }
            
         }
        
        echo $count;

		if (unlink($file_path)) {
			echo "project deleted";
			// called to function delete the data from projects file
			return delete_name($state , $file_name, $project_path, $link  );
		}else{
			echo "can't delete the project";
			return false;
		}

	}


	// this function is delete the name of the project in main projects file
	function delete_name($state , $file_name, $project_path, $link  ){
			$file_content = json_decode( file_get_contents( $project_path ), true );
			$state_projects = count( $file_content[$state] );
		
			print($state_projects."<br>");

			for ($i=0; $i <$state_projects ; $i++) { 

				print(key( $file_content[$state][$i])."<br>" );	# get the kay from kay,pair 
				if ( key( $file_content[$state][$i] )==$file_name ) {	
					echo "found";				
					unset( $file_content[$state][$i] );	# delete the tha file from list
					$file_content[$state."_num"]--;
					$file_content["count"]--;
                    
                    $dir = "../".$link."/".explode('.json', "images/".$file_name)[0];
                   
                    rmdir( $dir );
                    print($dir." deleted");
                    
				 	return	write_file( $project_path, $file_content );
				}
			}
			return "can't delete the project from project file";
	}


	$file_name 		= $_POST['filename'];		# name of the file
	$file_path		= $_POST['path_to_file']; 	# path to file without file name
	$state	   		= $_POST['state'];  		# state of the project ongoing or finished  
	$project_path 	= $_POST['project_path'];	#  path of the main file
    $link           = $_POST['link'];



//	print($file_name."<br>");
	print($file_path."<br>");
//	print($state."<br>");
//	print($project_path."<br>");

    print($link);


	//print(delete_file($state, $file_name, $file_path.''.$file_name, $project_path ,$link )."<br>");
	


    







 ?>