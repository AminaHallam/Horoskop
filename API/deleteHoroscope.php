<?php


try {
    session_start(); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "DELETE") {
            
            if(isset($_SESSION['zodiac'])) {
                session_destroy();
                
                echo json_encode(TRUE); 
                
            } elseif(!isset($_SESSION['zodiac'])) {
                echo json_encode(FALSE);
            }; 
            
            exit; 


        };

    };


} catch (Exception $err) {




};



?>