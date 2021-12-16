<?php

try {
    session_start(); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "GET") {

            if (isset($_SESSION['zodiac'])) {

                echo json_encode (unserialize ($_SESSION['zodiac'])); 

            
                exit; 
            
            } else {

                echo json_encode(FALSE);
            }

        } else {
            echo json_encode(""); 
        }

    }


} catch (Exception $err) {




}



?>