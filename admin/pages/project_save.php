<?php 

require '../../functions&defined/function.php';
	
	
    $title 		 = $_POST["title"];
	$client		 = $_POST["client"];
	$type		 = isset( $_POST["type"]) ? $_POST["type"] : '';
	$location	 = $_POST["location"];
	$srt_date  = isset($_POST["start_date"]) ? $_POST["start_date"] : '';
	$cmlt_date  = isset($_POST["cmpt_date"]) ? $_POST["cmpt_date"] : '';
	$description = $_POST["description"];
	$state 		 = isset($_POST["state"]) ? $_POST["state"] : "";
    $files       = $_FILES['files'];




    if($_POST){
        
        

    
      $name = create_file_name();
      $conn = connection();
      add_project( $conn, $name, $title,  $client, $type, $location, $srt_date, $cmlt_date, $description, $state, $files );
      
        
    }
        

    
 ?>