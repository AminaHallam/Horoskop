<?php

try {
    session_start(); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "GET") {

            
            echo json_encode("ViewHoroscope funkar");

            exit; 


        }

    }


} catch (exeption $err) {




}














?>