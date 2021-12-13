<?php


try {
    session_start(); 

    // require("../horoscopeList.php"); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {


           
            $zodiac = json_decode($_POST["body"], true);

            

            //echo json_encode($_SESSION['zodiac]);

            echo json_encode ("UpdateHoroscope funkar");

            exit; 


        } else {



        }

    } else {
        

        
    }


} catch (exeption $err) {

    

}






?>