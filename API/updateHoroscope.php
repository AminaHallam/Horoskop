<?php


try {
    session_start(); 

    require("../horoscopeList.php"); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if(isset($_SESSION['zodiac'])) {

                echo json_encode(TRUE);
                exit; 
                
            } elseif(!isset($_SESSION['zodiac'])) {
                
                
                echo json_encode(FALSE);
            }


        } else {
            echo json_encode(FALSE);

        }; 
        
    };


} catch (Exception $err) {

    

};






?>