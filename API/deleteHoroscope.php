<?php


try {

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "DELETE") {
            echo json_encode('Delete funkar'); 
           

            exit; 


        } 

    }


} catch (exeption $err) {




}



?>