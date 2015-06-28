


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

	$files = json_decode(file_get_contents(ROADS),true);
 



/************************************************************************/

    # ongoing projects
	$length = $files["ongoing_num"];
    printf("<h2> Roads ongoing projects</h2>");
	for ($i=0; $i <$length ; $i++) { 
       
		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = ROAD."".key($files["ongoing"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='roads'> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["ongoing"][$i])."'> <input type='hidden' name='state' value='ongoing'>  <input type='hidden' name='link' value='roads'> <input type='hidden' name='project_path' value='".ROADS."'> <input type='hidden' name='path_to_file' value='".ROAD."'>   <input type='submit' value='delete'> </form>");
        
        
        
		print("</div>");
		printf("<br>");

	}


    	

    # Roads finished  projects
    $length = $files["finished_num"];
    printf("<h2> Roads finished projects</h2>");
	for ($i=0; $i <$length ; $i++) { 
       
		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = ROAD."".key($files["finished"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='roads'> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["finished"][$i])."'> <input type='hidden' name='state' value='finished'>  <input type='hidden' name='link' value='roads'> <input type='hidden' name='project_path' value='".ROADS."'> <input type='hidden' name='path_to_file' value='".ROAD."'>   <input type='submit' value='delete'> </form>");
        
        
        
		print("</div>");
		printf("<br>");

	}


/**************************************************************************************************/


    $files = json_decode(file_get_contents(BUILDINGS),true);

    # Buildings ongoing  projects
    $length = $files["ongoing_num"];
    printf("<h2> Buildings ongoing projects</h2>");
	for ($i=0; $i <$length ; $i++) { 
       
		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = BUILDING."".key($files["ongoing"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='buildings'> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["ongoing"][$i])."'> <input type='hidden' name='state' value='ongoing'>  <input type='hidden' name='link' value='buildings'> <input type='hidden' name='project_path' value='".BUILDING."'> <input type='hidden' name='path_to_file' value='".BUILDING."'>   <input type='submit' value='delete'> </form>");
        
        
        
		print("</div>");
		printf("<br>");

	}



       # Buildings finished  projects
    $length = $files["finished_num"];
    printf("<h2> Buildings finished projects</h2>");
	for ($i=0; $i <$length ; $i++) { 
       
		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = BUILDING."".key($files["finished"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='buildings'> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["finished"][$i])."'> <input type='hidden' name='state' value='finished'>  <input type='hidden' name='link' value='buildings'> <input type='hidden' name='project_path' value='".BUILDING."'> <input type='hidden' name='path_to_file' value='".BUILDING."'>   <input type='submit' value='delete'> </form>");
        
        
        
		print("</div>");
		printf("<br>");

	}


/******************************************************************************************************************/
 
        
    $files = json_decode(file_get_contents(BRIDGES),true);

    # Buildings ongoing  projects
    $length = $files["ongoing_num"];
    printf("<h2> Bridges ongoing projects</h2>");
	for ($i=0; $i <$length ; $i++) { 
       
		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = BRIDGE."".key($files["ongoing"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='bridge'> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["ongoing"][$i])."'> <input type='hidden' name='state' value='ongoing'>  <input type='hidden' name='link' value='bridges'> <input type='hidden' name='project_path' value='".BRIDGE."'> <input type='hidden' name='path_to_file' value='".BRIDGE."'>   <input type='submit' value='delete'> </form>");
        
        
        
		print("</div>");
		printf("<br>");

	}





        # Buildings finished  projects
    $length = $files["finished_num"];
    printf("<h2> Bridges finished projects</h2>");
    echo $length;
	for ($i=0; $i <$length ; $i++) { 
       
		print("<div style='border:1px solid #222;margin-top:20px;'>");
		$path = BRIDGE."".key($files["finished"][$i]);
		$project = json_decode(file_get_contents($path),true);
		print_r($project);

		print("<form action='edit.php' method='POST'> <input type='hidden' name='q' value='bridge'> <input type='submit' value='edit'> </form>");
        
		print("<form action='delete.php' method='POST'> <input type='hidden' name='filename' value='".key($files["finished"][$i])."'> <input type='hidden' name='state' value='finished'>  <input type='hidden' name='link' value='bridges'> <input type='hidden' name='project_path' value='".BRIDGE."'> <input type='hidden' name='path_to_file' value='".BRIDGE."'>   <input type='submit' value='delete'> </form>");
        
        
        
		print("</div>");
		printf("<br>");

	}

 ?>
	
</body>
</html>

