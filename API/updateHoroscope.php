<?php

try {
    session_start(); 

    require("./horoscopeList.php"); 

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if(isset($_SESSION["zodiac"])) {
                
                $date = json_decode($_POST["date"], true); 
                
                $zodiac = calculateZodiac($date, $horoscopeList);
                
                $_SESSION["zodiac"] = serialize($zodiac); 
                
                echo json_encode(TRUE); 

                exit; 
            } else {
                echo json_encode(FALSE);
                
            } 
        } else {
        echo json_encode(FALSE);
    }
        
    };


} catch (Exception $err) {


};


?>