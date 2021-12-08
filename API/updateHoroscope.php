<?php


try {
    session_start(); 

    require("../horoscopeList.php"); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {


           
            //$zodiac = json_decode($_POST["body"], true);

            

            //echo json_encode($_SESSION["name"]);

            echo json_encode ("Sparat POST");

            exit; 


        }

    } else {
        
    }


} catch (exeption $err) {

    

}






?>