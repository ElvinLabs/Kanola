<?php

require '../../functions&defined/function.php'; 


    
    
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $type = isset( $_POST['type'] ) ? $_POST['type'] : "";
    $dir = isset( $_POST['dir'] ) ? $_POST['dir'] : "";
    

    $conn = connection();
    $query_1 = "SELECT Images FROM ".$type." WHERE Id='$id'";
    
    
    $images = $conn->query( $query_1);
    
    if($images->num_rows>0 ){   
        $row =explode(',', $images->fetch_assoc()["Images"]);    
        for($i=1; $i<count($row); $i++){          
            if(!unlink( $row[$i] )){           
                //return "can't delete";              
            }         
              print($row[$i]);
        }
       //$dir = "../../".$type."/images/20150701204931822345";
//       if( !rmdir( $dir) ){       
//            echo "can't delete directory";
//       }      
//    
    }
    
   
    $query = "DELETE FROM ".$type." WHERE Id='$id'";
    $state = $conn->query($query);
    if( $conn->query( $query) ){
    
        echo "sucsessfully deleted";
    
    }


    $conn->close();


    
    







?>