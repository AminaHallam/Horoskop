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


$horoscopeList = array(
    array(
        'name' => 'Väduren', 'key' => 0, 'unicode' => '♈', 'start' => '03-21', 'end' => '04-20'
    ), 
    array(
        'name' => 'Oxen', 'key' => 1, 'unicode' => '♉', 'start' => '04-21', 'end' => '05-21'
    ),
    array(
        'name' => 'Tvillingarna', 'key' => 2, 'unicode' => '♊', 'start' => '05-22', 'end' => '06-21'
    ),
    array(
        'name' => 'Kräftan', 'key' => 3, 'unicode' => '♋', 'start' => '06-22', 'end' => '07-22'
    ),
    array(
        'name' => 'Lejonet', 'key' => 4, 'unicode' => '♌', 'start' => '07-23', 'end' => '08-23'
    ),
    array(
        'name' => 'Jungfrun', 'key' => 5, 'unicode' => '♍', 'start' => '08-24', 'end' => '09-23'
    ),
    array(
        'name' => 'Vågen', 'key' => 6, 'unicode' => '♎', 'start' => '09-24', 'end' => '10-22'
    ),
    array(
        'name' => 'Skorpionen', 'key' => 7, 'unicode' => '♏', 'start' => '10-23', 'end' => '11-22'
    ),
    array(
        'name' => 'Skytten', 'key' => 8, 'unicode' => '♐', 'start' => '11-23', 'end' => '12-22'
    ),
    array(
        'name' => 'Stenbocken', 'key' => 9, 'unicode' => '♑', 'start' => '12-23', 'end' => '01-20'
    ),
    array(
        'name' => 'Vattumannen', 'key' => 10, 'unicode' => '♒', 'start' => '01-21', 'end' => '02-18'
    ),
    array(
        'name' => 'Fiskarna', 'key' => 11, 'unicode' => '♓', 'start' => '02-19', 'end' => '03-20'
    ),

); 









?> 