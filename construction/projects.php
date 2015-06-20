


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php 


require '../functions&defined/function.php';



	$project_path = array("ROAD"=>ROADS,"BUILDING"=>BUILDINGS,"BRIDGE"=>BRIDGES);
	$file_path = array("ROAD"=>ROAD,"BUILDING"=>BUILDING,"BRIDGE"=>BRIDGE);



	/* Road delete part */ 
	$files = json_decode(file_get_contents(ROADS),true);
	$length = count($files["ongoing"]);
	for ($i=0; $i <$length ; $i++) { 

		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = ROAD."".key($files["ongoing"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='roads'> <input type='submit' value='delete'> </form>");
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["ongoing"][$i])."'> <input type='hidden' name='state' value='ongoing'> <input type='hidden' name='project_path' value='".ROADS."'> <input type='hidden' name='path_to_file' value='".ROAD."'>   <input type='submit' value='delete'> </form>");
		print("</div>");
		printf("<br>");

	}







 ?>
	
</body>
</html>

