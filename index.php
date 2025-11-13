<?php

//echo "consumiremos los datos de una api usando codigo php nayivo y vamos a usar reglas de lectura de datata";


// url de la data a consumir
$url = "https://api.escuelajs.co/api/v1/users";

// lectura de la api
$Json = file_get_contents($url);

// decode es el meto que de codifica el json de la api 
$data = json_decode($Json,true);
 
print_r($data[0]) ;


?>
