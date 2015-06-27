<?php 

	require '../functions&defined/function.php';


	$file_name 		= $_POST['filename'];		# name of the file
	$file_path		= $_POST['path_to_file']; 	# path to file without file name
	$state	   		= $_POST['state'];  		# state of the project ongoing or finished  
	$project_path 	= $_POST['project_path'];	# path of the main file



	print($file_name."<br>");
	print($file_path."<br>");
	print($state."<br>");
	print($project_path."<br>");


	function get_content( $file_path){

		

	}









 ?>