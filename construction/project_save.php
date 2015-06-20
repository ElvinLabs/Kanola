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
			$images =image_urls("123.jpg","124.jpg","125.jpg");
			$two  = json_string_two($one ,$description, $images);
			$name = create_file_name();
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