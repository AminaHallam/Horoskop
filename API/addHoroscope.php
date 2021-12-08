<?php

try {
    session_start(); 

    require("../horoscopeList.php"); 

    
    if($_SERVER["REQUEST_METHOD"]) {
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            //$zodiac = $_GET['name']; 
            
            //$_SESSION['name'] = $zodiac . " ";
            
            echo json_encode ("Sparat POST");
            
            exit; 
            
        }
        
    }
    

} catch (exeption $err) {




}









?> 