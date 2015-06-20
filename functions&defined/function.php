<?php 


require 'define.php';



	function create_file_name(){

		$t = microtime(true);
		$micro = sprintf("%06d",($t - floor($t)) * 1000000);
		$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
		$filename = $d->format("YmdHisu");

		return $d->format("YmdHisu").".json";
	}


	function json_string_one( $title ,$client ,$location,$start_date , $complete_date){

			$part_one = array("title"=>$title ,"client"=>$client, "location"=>$location, "start_date"=>$start_date, "comple_date"=>$complete_date);
			//print_r($part_one);
			return $part_one;
	}


	function image_urls($url_1,$url_2,$url_3){

		$urls = array("urrl_1"=>$url_1 ,"url_2"=>$url_2, "url_3"=>$url_3);
		return $urls;
	}

	function json_string_two($part_one, $description, $urls){

		$part_two = array( "description"=>$description, "images"=>$urls);
		return array_merge($part_one, $part_two);

	}


	// write the string value to new file in file path
	function write_file($path,$string){
		$con = file_put_contents($path, json_encode($string ,JSON_UNESCAPED_UNICODE));

		if ($con) return true;
		else return false;
	}






	function create_json_file($file_name, $string, $type){

		// please use try catch block
			$path = $type.''.$file_name;		
			$file = fopen($path, "w") or die("can't create file");
			fwrite($file,json_encode($string,JSON_UNESCAPED_UNICODE));
			fclose($file);


			//return $file;
	}


	/*  state is the value for check whether the project is a ongoing project or finished project*/
	/*  filename is the  name of the file we are gonna write  */
	/*  type is the project type whether it is road,building or bridge */

	
	function add_project( $state ,$filename, $title ,$location,$type){

		$current_projects = json_decode(file_get_contents($type),true);
		$new_project = array("title"=>$title, "location"=>$location);
		$new_project = array($filename=>$new_project);
		
		if ($state ==="ongoing") {			
			array_push($current_projects["ongoing"],$new_project);
			$current_projects["ongoing_num"]++;
			$current_projects["count"]++;
			file_put_contents($type,json_encode($current_projects,JSON_UNESCAPED_UNICODE));
			
		}
		
		if($state ==="finished"){

			array_push($current_projects["finished"],$new_project);
			$current_projects["finished_num"]++;
			$current_projects["count"]++;
			file_put_contents($type,json_encode($current_projects,JSON_UNESCAPED_UNICODE));
			
		}		

	}





?>