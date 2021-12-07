<?php

$horoscopeList = [
    [
        'name' => 'Väduren', 
        'start' => '03-21', 
        'end' => '04-20'
    ], 
    [
        'name' => 'Oxen', 
        'start' => '04-21', 
        'end' => '05-21'
    ],
    [
        'name' => 'Tvillingarna', 
        'start' => '05-22', 
        'end' => '06-21'
    ],
    [
        'name' => 'Kräftan', 
        'start' => '06-22', 
        'end' => '07-22'
    ],
    [
        'name' => 'Lejonet', 
        'start' => '07-23', 
        'end' => '08-23'
    ],
    [
        'name' => 'Jungfrun', 
        'start' => '08-24', 
        'end' => '09-23'
    ],
    [
        'name' => 'Vågen', 
        'start' => '09-24', 
        'end' => '10-22'
    ],
    [
        'name' => 'Skorpionen', 
        'start' => '10-23', 
        'end' => '11-22'
    ],
    [
        'name' => 'Skytten', 
        'start' => '11-23', 
        'end' => '12-22'
    ],
    [
        'name' => 'Stenbocken', 
        'start' => '12-23', 
        'end' => '01-20'
    ],
    [
        'name' => 'Vattumannen', 
        'start' => '01-21', 
        'end' => '02-18'
    ],
    [
        'name' => 'Fiskarna', 
        'start' => '02-19', 
        'end' => '03-20'
    ],
    
]; 

// print_r($horoscopeList); 



for ($i=0; $i < count($horoscopeList); $i++) { 
    $horoscope = $horoscopeList[$i]; 
    echo "<p>{$horoscope['name']}</p>";

    if($horoscope == ['start' => '03-21'] && ['end' => '04-20']) {
        return $horoscope['Väduren'];
        echo "<p>{$horoscope['Väduren']}</p>";
    } elseif($horoscope == ['start' => '04-21'] && ['end' => '05-21']) {
        return $horoscope['Oxen'];

    } elseif($horoscope == ['start' => '05-22'] && ['end' => '06-21']) {
        return $horoscope['Tvillingarna'];
        
    } elseif($horoscope == ['start' => '06-22'] && ['end' => '07-22']) {
        return $horoscope['Kräftan'];
        
    } elseif($horoscope == ['start' => '07-23'] && ['end' => '08-23']) {
        return $horoscope['Lejonet'];
        
    } elseif($horoscope == ['start' => '08-24'] && ['end' => '09-23']) {
        return $horoscope['Jungfrun'];
        
    } elseif($horoscope == ['start' => '09-24'] && ['end' => '10-22']) {
        return $horoscope['Vågen'];
        
    } elseif($horoscope == ['start' => '10-23'] && ['end' => '11-22']) {
        return $horoscope['Skorpionen'];
        
    } elseif($horoscope == ['start' => '11-23'] && ['end' => '12-22']) {
        return $horoscope['Skytten'];
        
    } elseif($horoscope == ['start' => '12-23'] && ['end' => '01-20']) {
        return $horoscope['Stenbocken'];
        
    } elseif($horoscope == ['start' => '01-21'] && ['end' => '02-18']) {
        return $horoscope['Vattumannen'];
        
    } elseif($horoscope == ['start' => '02-19'] && ['end' => '03-20']) {
        return $horoscope['Fiskarna']; 
        
    }


};

/*
foreach($horoscopeList as $horoscopeLists) {
    echo "<p>{$horoscopeLists['name']}</p>"; 

    if($horoscopeLists == ['start' => '03-21'] && ['end' => '04-20']) {
        return $horoscopeLists['Väduren'];
        echo "<p>{$horoscopeLists['Väduren']}</p>";
    } elseif($horoscopeLists == ['start' => '04-21'] && ['end' => '05-21']) {
        return $horoscopeLists['Oxen'];

    } elseif($horoscopeLists == ['start' => '05-22'] && ['end' => '06-21']) {
        return $horoscopeLists['Tvillingarna'];
        
    } elseif($horoscopeLists == ['start' => '06-22'] && ['end' => '07-22']) {
        return $horoscopeLists['Kräftan'];
        
    } elseif($horoscopeLists == ['start' => '07-23'] && ['end' => '08-23']) {
        return $horoscopeLists['Lejonet'];
        
    } elseif($horoscopeLists == ['start' => '08-24'] && ['end' => '09-23']) {
        return $horoscopeLists['Jungfrun'];
        
    } elseif($horoscopeLists == ['start' => '09-24'] && ['end' => '10-22']) {
        return $horoscopeLists['Vågen'];
        
    } elseif($horoscopeLists == ['start' => '10-23'] && ['end' => '11-22']) {
        return $horoscopeLists['Skorpionen'];
        
    } elseif($horoscopeLists == ['start' => '11-23'] && ['end' => '12-22']) {
        return $horoscopeLists['Skytten'];
        
    } elseif($horoscopeLists == ['start' => '12-23'] && ['end' => '01-20']) {
        return $horoscopeLists['Stenbocken'];
        
    } elseif($horoscopeLists == ['start' => '01-21'] && ['end' => '02-18']) {
        return $horoscopeLists['Vattumannen'];
        
    } elseif($horoscopeLists == ['start' => '02-19'] && ['end' => '03-20']) {
        return $horoscopeLists['Fiskarna']; 
        
    }

}
*/




// print($horoscopeList); 

// echo "$horoscopeList"; 






?>