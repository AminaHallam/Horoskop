<?php

try {
    session_start(); 

    require("../horoscopeList.php"); 

    
    if($_SERVER["REQUEST_METHOD"]) {
        
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            
            $horoscopeList = $_GET['name']; 
            
            $_SESSION['name'] = $horoscopeList . " ";
            
            echo json_encode ("Sparat");
            
            exit; 
            
        }
        
    }
    

} catch (exeption $err) {




}









?> 