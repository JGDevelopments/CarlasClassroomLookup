<?php

    $a[] = "Mission Impossible"; 
    $a[] = "Jarhead";
    $a[] = "Alice in Wornderland";
    $a[] = "Avatar";
    $a[] = "Gone With The Wind";
    $a[] = "The Equalizer";
    $a[] = "Hacksaw Ridge";
    $a[] = "Forest Gump";
    $a[] = "Scary Movie";
    $a[] = "Dawn of the Planet of the Apes";
    $a[] = "Whitehouse Down";
    $a[] = "Freddy vs Jason";
    $a[] = "Peter Pan";
    $a[] = "Bambi";
    $a[] = "Creed";
    $a[] = "Fight Club";
    $a[] = "World of Warcraft";
    $a[] = "Insidious";
    $a[] = "Interstellar";
    $a[] = "The Ride Along";

    $q = $_GET["q"];

    if (strlen($q) > 0) {
        $hint = "";
        for($i = 0; $i < count($a); $i++){
            if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))){
        
                if ($hint==""){
                    $hint = $a[$i]; 
                }
                else {
                    $hint = $hint." ; ".$a[$i]; 
                }
            }
        }
    }

    if ($hint == "") {
        $response ="no matches were found";
    }
    else{
        $response = $hint; 
    }

    echo $response;

?>