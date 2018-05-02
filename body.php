<body>
  <div class="container">
    <div class="row py-5">
      <div class="col">
        <h1><?php print($title);?></h1>
        <h3>Hoy es la clase <?php print($number);?></h3>
        <h5 class="my-3"><?php print($fecha);?></h5>
        <p>A continuación usaré el <a href="http://php.net/manual/es/function.print-r.php">print_r</a> para mostrarles la información de algunas variables:</p>
        <hr>
        <pre class="my-3"><code><?php print_r($arreglo);?></code></pre>

        <p> Puedo consultar el arreglo con un <a href="http;//php.net/manual/es/control-structures.for.php">ciclo for <a>./</p>
                <ul>
                  <?php for ($a= 0; $a <count ($arreglo); $a++){
                    print ('<li>'. $arreglo [$a]. '</li>');
                  }?>
                </ul>

        <hr>
        <pre class="my-3"><code><?php print_r($arreglobjeto);?></code></pre>

        <p>Mi nombre es
          <?php print ($arreglobjeto[Nombre].' '.$arreglobjeto[Apellidos]);?>,
        tengo <?php print($arreglobjeto[Edad]);?> años,
        mi signo es <?php print($arreglobjeto[Signo]);?>
        y mi animal favorito es la <?php print($arreglobjeto[Animal]);?>.
        </p>


        <hr>
        <p>Lo que sigue es un <a href="https://github.com/profesorfaco/dno037-2018-09/blob/master/data/swapi-planets.csv">CSV</a> que armé tomando lo que necesitaba de <a href="https://swapi.co/">SWAPI</a>:</p>
        <pre class="my-3"><code><?php print_r($csv);?></code></pre>
        <hr>

        <p> Tengo la información de los siguientes planetas de Starwars:<strong>
        <?php
          for($i=0; $i < count($csv); $i++){ // CICLO FOR. cero incrementa en uno al cumplirse el ser menor que el conteo del CSV

          if ($i < count($csv)-2){ //count cuenta cuantos elementos tiene ese arreglo. Count es = 8, cuenta hasta que sea menor a 8, osea 7 (que son la cantidad de elementos que hay)
            print($csv[$i][name].' </strong>,<strong> '); //en los primeros 6 casos o elementos con una coma

          } else if ($i ==count($csv)-2){
            print($csv[$i][name].' </strong>y<strong> ');

          }else { //otra condicion, si no es asi que sea de otra manera. Esto lo hice para que la horacion dtenga un punto al final
            print($csv[$i][name].'. '); // para el ultimo caso o elemento pon un punto
          }
        }?>
      </strong>
      </p>

        <pre class="my-3"><code><?php print_r($json);?></code></pre>
        <p>En las últimas 24 horas, han sido registrados <?php print(count($json[features]));?> temblores de magnitud igual o superior a 4.5 . El más reciente: <?php print($json[features][0][properties][title])?></p>
        <p>Si le dan un vistazo al párrafo anterior con "ver código fuente", no encontrarán nada más que HTML. Pero, si lo revisan en sus editores de código podrán ver PHP.</p>
      </div>
    </div>
  </div>
  <script> //esto es un espacio de JavaScript donde voy a meter un PHP
    //¿Puedo mezclar PHP y JavaScript?
    var starwars = JSON.parse('<?php print($arreglinjson);?>');
    //si, acá tienes un ejemplo.
    console.log(starwars);
    //si mezclan: háganlo con cuidado, para no confundir sintaxis
    console.log("El planeta más grande es " + starwars[5].name);
  </script>
</body>
