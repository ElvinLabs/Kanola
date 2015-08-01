<?php 

    session_start();

    if( !isset($_SESSION['user']) ){
    
        header('Location:../login/');
    }
    else if( isset($_SESSION['user'])!=""){
    
        header( 'Location:../main/');
    }

    if( isset($_GET['logout']) ){
    
        session_destroy();
        uset($_SESSION['user']);
        header('Location:../main/');
    }






?>