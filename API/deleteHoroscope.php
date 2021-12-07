<?php


try {

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "GET") {

            echo json_encode("SVAR GET");

            exit; 


        }

    }


} catch (exeption $err) {




}















?>