<?php

try {
    session_start(); 

    require("../horoscopeList.php"); 

    
    if($_SERVER["REQUEST_METHOD"]) {
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $date = json_decode($_POST['date'], true); 
            
            $zodiac = calculateZodiac($date, $horoscopeList);
            
            $_SESSION['zodiac'] = serialize($zodiac); 

            echo json_encode (TRUE);
            
            exit; 
            
        } if (!isset($_SESSION['zodiac'])) {
        
            echo json_encode(alert("Var vänlig och ange födelsedatum igen!")); 
        
        };
        
    } 
    

} catch (Exception $err) {
    



}






?> 