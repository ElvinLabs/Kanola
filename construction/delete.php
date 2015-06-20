<?php 

	require '../functions&defined/function.php';


	// this function is delete the given file
	function delete_file($path,$type,$state){

		if (unlink($path)) {
			echo "project deleted";
		}else{

			echo "can't delete the project";
		}

	}


	// this function is delete the name of the project in main projects file
	function delete_name($type,$state){


	}

	$file_name = $_POST['q'];
	$roads 	   = $_POST['roads'];
	$state	   = $_POST['state'];

	echo $file_name;










 ?>