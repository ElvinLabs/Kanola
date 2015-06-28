


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




    # Auto vehicles
	$files = json_decode(file_get_contents(AUTO."auto.json"),true);
	$length = $files["count"];

	for ($i=0; $i <$length ; $i++) { 

		print("<div style='border:1px solid #222;margin-top:20px;'>");        
		$path = AUTO."".key($files["vehicles"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='#' method='POST'> <input type='hidden' name='q' value=''> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["vehicles"][$i])."'> <input type='hidden' name='state' value='vehicles'> <input type='hidden' name='project_path' value='".AUTO."auto.json'> <input type='hidden' name='path_to_file' value='".AUTO."'> <input type='hidden' name='link' value='auto'>   <input type='submit' value='delete'> </form>");
		print("</div>");
		printf("<br>");

	}







 ?>
	
</body>
</html>

