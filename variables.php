<?php

$number = 9; //siempre un numero se degine sin comillas

$title = "Esto es PHP"; //esto es una cadena de caracteres

$fecha = date(D.'/'.F.'/'.Y); //obtengo la primera funcion de "fecha" en PHP, pidel el dia, mes(M) y año (Y). Googlear PHP Date.

// en arreglos hay hartas diferencias con JavaScript:

$arreglo = array("Niños","Jóvenes","Adultos"); // estoi poniendo 3 cadenas de caracteres, esto es muy diferente de JavaScript (la manera de escribirlo).

$arreglobjeto = array("Apellidos"=>"Marchant Vidal","Nombre"=>"Nikita","Edad"=>"25","Signo"=>"Piscis","Animal"=>"Suricata"); //=> implica. en mi edad puedo no usar comillas porque es un numero. Arreglo que me permite denominar las cosas que voy a meter dentro.

// pueden cometar líneas 18, 19, 20 y 21, y ver la diferencia

$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2018-09/master/data/swapi-planets.csv')); // esto es como en un arreglo puedo meter un csv. mi variable se llama csv, a ella le meto un csv y que informo que mapee un csv (en linea). Siempre que quiero vincular algo el github tiene q ser en RAW
        array_walk($csv, function(&$a) use ($csv) { // raw lo manda a caminar un paso:
      $a = array_combine($csv[0], $a); // agarra la primera fila del CSV (de la tabla) y conviertela en el index
      });
      array_shift($csv); //despues de caminar, cambia con lo que aprendiste.

//voy a buscar un archivo, y lo voy a decodificar como JSON

$data = file_get_contents('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson'); //jason es mas sencillo. En data estoi yendo a buscar los contenidos de archivo JSON. Da lo mismo el nombre que le pongo a la variable mientras no tenga el nombre de una funcion y mientras sea coherente en todos los archivos

$json = json_decode($data,true); //luego tomalo y decodificalo como JSON, entonces la variable q usare sera data y no JSON.

//último truco: voy a tomar un csv y lo voy a transformar en JSON

$arreglin = $csv; //va a buscar la variable csv (defidina arriba) y la convierno en json

$arreglinjson = json_encode($arreglin);

?>

<title><?php print($title);?></title>
</head>
