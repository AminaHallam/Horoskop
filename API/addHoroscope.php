<?php

try {
    session_start(); 

    //require("../horoscopeList.php"); 

    
    if($_SERVER["REQUEST_METHOD"]) {
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            //$zodiac = $_GET['name']; 

            //$zodiac = calculateZodiac($_POST["date"], $horoscopeList)
            
            //$_SESSION['name'] = $zodiac . " ";
            
            echo json_encode ("addHoroscope funkar");
            
            exit; 
            
        } 
        
    } 
    

} catch (exeption $err) {




}






?> 