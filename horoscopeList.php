<?php

$horoscopeList = [
    [
        'name' => 'Väduren', 
        'start' => ['month' => 3, 'day' => 21], 
        'end' => ['month' => 4, 'day' => 20]
    ], 
    [
        'name' => 'Oxen', 
        'start' => ['month' => 4, 'day' => 21], 
        'end' => ['month' => 5, 'day' => 21]
    ],
    [
        'name' => 'Tvillingarna', 
        'start' => ['month' => 5, 'day' => 22], 
        'end' => ['month' => 6, 'day' => 21]
    ],
    [
        'name' => 'Kräftan', 
        'start' => ['month' => 6, 'day' => 22], 
        'end' => ['month' => 7, 'day' => 22]
    ],
    [
        'name' => 'Lejonet', 
        'start' => ['month' => 7, 'day' => 23], 
        'end' => ['month' => 8, 'day' => 23]
    ],
    [
        'name' => 'Jungfrun', 
        'start' => ['month' => 8, 'day' => 24], 
        'end' => ['month' => 9, 'day' => 23]
    ],
    [
        'name' => 'Vågen', 
        'start' => ['month' => 9, 'day' => 24], 
        'end' => ['month' => 10, 'day' => 22]
    ],
    [
        'name' => 'Skorpionen', 
        'start' => ['month' => 10, 'day' => 23], 
        'end' => ['month' => 11, 'day' => 22]
    ],
    [
        'name' => 'Skytten', 
        'start' => ['month' => 11, 'day' => 23], 
        'end' => ['month' => 12, 'day' => 22]
    ],
    [
        'name' => 'Stenbocken', 
        'start' => ['month' => 12, 'day' => 23], 
        'end' => ['month' => 1, 'day' => 20]
    ],
    [
        'name' => 'Vattumannen', 
        'start' => ['month' => 1, 'day' => 21], 
        'end' => ['month' => 2, 'day' => 18]
    ],
    [
        'name' => 'Fiskarna', 
        'start' => ['month' => 2, 'day' => 19], 
        'end' => ['month' => 3, 'day' => 20]
    ],
    
]; 


function calculateZodiac($date, $horoscopeList) {

    $date = ["month" => 4, "day" => 5]

    for ($i=0; $i < count($horoscopeList); $i++) { 
        $zodiac = $horoscopeList[$i]; 

        //$zodiac["start"]["month"] 
        //$zodiac["start"]["day"]
        //$zodiac["end"]["month"] 
        //$zodiac["end"]["day"]

        //$date["month"]
        //$date["day"]

        

        if($zodiac["start"]["month"] == $date["month"] && $zodiac["start"]["day"] > $date["day"]) {
            return $zodiac
            
        } elseif($zodiac["end"]["month"] == $date["month"] && $zodiac["end"]["day"] < $date["day"]) {
            return $zodiac
        }
        
    



        


        if(('month' == 3 && 'day' > 21) || ('month' == 4 && 'day' < 20)) {
            return $zodiac['Väduren'];
            
        } elseif(('month' == 4 && 'day' > 21) || ('month' == 5 && 'day' < 21)) {
            return $zodiac['Oxen'];

        } elseif(('month' == 5 && 'day' > 22) || ('month' == 6 && 'day' < 21)) {
            return $zodiac['Tvillingarna'];
        
        } elseif(('month' == 6 && 'day' > 22) || ('month' == 7 && 'day' < 22)) {
            return $zodiac['Kräftan'];
        
        } elseif(('month' == 7 && 'day' > 23) || ('month' == 8 && 'day' < 23)) {
            return $zodiac['Lejonet'];
        
        } elseif(('month' == 8 && 'day' > 24) || ('month' == 9 && 'day' < 23)) {
            return $zodiac['Jungfrun'];
        
        } elseif(('month' == 9 && 'day' > 24) || ('month' == 10 && 'day' < 22)) {
            return $zodiac['Vågen'];
        
        } elseif(('month' == 10 && 'day' > 23) || ('month' == 11 && 'day' < 22)) {
            return $zodiac['Skorpionen'];
        
        } elseif(('month' == 11 && 'day' > 23) || ('month' == 12 && 'day' < 22)) {
            return $zodiac['Skytten'];
        
        } elseif(('month' == 12 && 'day' > 23) || ('month' == 1 && 'day' < 20)) {
            return $zodiac['Stenbocken'];
        
        } elseif(('month' == 1 && 'day' > 21) || ('month' == 2 && 'day' < 18)) {
            return $zodiac['Vattumannen'];
        
        } elseif(('month' == 2 && 'day' > 19) || ('month' == 3 && 'day' < 20)) {
            return $zodiac['Fiskarna']; 
        
        }


    }
}; 



/*
foreach($horoscopeList as $horoscopeLists) {
    echo "<p>{$horoscopeLists['name']}</p>"; 

}
*/


// print($horoscopeList); 

// echo "$horoscopeList"; 






?>