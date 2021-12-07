<?php


try {

    require("../horoscopeList.php"); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $horoscopeList = json_decode($_POST["body"], true);

            error_log(json_encode($horoscopeList));

            echo json_encode($_SESSION["name"]);

            exit; 


        }

    } else {
        $_SESSION[]
    }


} catch (exeption $err) {

    

}






?>