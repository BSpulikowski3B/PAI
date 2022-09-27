<?php


    $papere[0] = "klawiatura";
    $papere[1] = "Krowa";
    $papere[2] = "Klej";

    for($j=2; $j >= 0; --$j){
        echo "$papere[$j] <br><br>"; 
    }


    
    $nazwy['Mam'] = "Naprawde mam"; 
    $nazwy['Fajnego'] = "Bardzo fajnego nauczyciela";   
    $nazwy['Nauczyciela'] = "Od PAI";      


    foreach($nazwy as $item => $description){
        echo "$item: $description <br>";
    }

    echo $nazwy['Mam'] . " " . $nazwy['Fajnego'] . " " . $nazwy['Nauczyciela'];

?>