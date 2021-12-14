<?php


try {

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "DELETE") {
            
            if(isset($_SESSION['zodiac'])) {
                $session_destroy;

                
            }; 
            
            
            echo json_encode('Delete funkar'); 

            exit; 


        };

    };


} catch (exeption $err) {




};



?>