<?php

$horoscopeList = [
    [
        'name' => 'Väduren', 
        'unicode' => '♈',
        'start' => ['month' => 3, 'day' => 21], 
        'end' => ['month' => 4, 'day' => 20]
    ], 
    [
        'name' => 'Oxen', 
        'unicode' => '♉',
        'start' => ['month' => 4, 'day' => 21], 
        'end' => ['month' => 5, 'day' => 21]
    ],
    [
        'name' => 'Tvillingarna', 
        'unicode' => '♊',
        'start' => ['month' => 5, 'day' => 22], 
        'end' => ['month' => 6, 'day' => 21]
    ],
    [
        'name' => 'Kräftan', 
        'unicode' => '♋',
        'start' => ['month' => 6, 'day' => 22], 
        'end' => ['month' => 7, 'day' => 22]
    ],
    [
        'name' => 'Lejonet', 
        'unicode' => '♌',
        'start' => ['month' => 7, 'day' => 23], 
        'end' => ['month' => 8, 'day' => 23]
    ],
    [
        'name' => 'Jungfrun', 
        'unicode' => '♍',
        'start' => ['month' => 8, 'day' => 24], 
        'end' => ['month' => 9, 'day' => 23]
    ],
    [
        'name' => 'Vågen', 
        'unicode' => '♎',
        'start' => ['month' => 9, 'day' => 24], 
        'end' => ['month' => 10, 'day' => 22]
    ],
    [
        'name' => 'Skorpionen', 
        'unicode' => '♏',
        'start' => ['month' => 10, 'day' => 23], 
        'end' => ['month' => 11, 'day' => 22]
    ],
    [
        'name' => 'Skytten', 
        'unicode' => ' ♐',
        'start' => ['month' => 11, 'day' => 23], 
        'end' => ['month' => 12, 'day' => 22]
    ],
    [
        'name' => 'Stenbocken', 
        'unicode' => '♑',
        'start' => ['month' => 12, 'day' => 23], 
        'end' => ['month' => 1, 'day' => 20]
    ],
    [
        'name' => 'Vattumannen', 
        'unicode' => '♒',
        'start' => ['month' => 1, 'day' => 21], 
        'end' => ['month' => 2, 'day' => 18]
    ],
    [
        'name' => 'Fiskarna', 
        'unicode' => '♓',
        'start' => ['month' => 2, 'day' => 19], 
        'end' => ['month' => 3, 'day' => 20]
    ],
    
]; 


function calculateZodiac($date, $horoscopeList) {
    
    for ($i=0; $i < count($horoscopeList); $i++) { 
        $zodiac = $horoscopeList[$i]; 
        
        if(($zodiac['start']['month'] == $date['month'] && $zodiac['start']['day'] <= $date['day']) || ($zodiac['end']['month'] == $date['month'] && $zodiac['end']['day'] >= $date['day'])) {
             
            return $zodiac['name']. " " .$zodiac['unicode'];

        };

    
    }

}; 





?>