<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/textos.css">
    <link rel="stylesheet" href="../estilos/comida.css">
    
    <title>Comida</title>
    <?php
        include ("../scripts/funciones.php");
    ?>

</head>
<body>

    <h1>Mis lugares favoritos para comer son:</h1>
    
    <?php

        $lugaresyPlatillos[0][0] ="
          <div id='casaMa'>
          <h3>En mi casa, donde esta la mejor comida en todo mundo (o eso decimos todos de la comida de nuetras mamás)</h3>
          <p>Mi comida favorita que me prepara mi mamá en casa son:</p>
          </div>";
        $lugaresyPlatillos[0][1] ="
          <div>
                <p>Sopa blanca y carne molida (tipicamente en navidad)</p>
          </div>";
        $lugaresyPlatillos[0][2] ="
          <div>
                <p>Lasaña, la cual le queda muy rica por que la hace
                con los quesos que mas nos gustan a todos en la familia</p>
          </div>";
        $lugaresyPlatillos[0][3] ="
          <div>
                <p>Pollo encacahuatado</p>
          </div>";

        $lugaresyPlatillos[1][0] ="
        <div id= 'tiaRufi'>
        <h3>En la casa de mi tía Rufi</h3>
        <p>La comida favorita de la casa de mi tía son lo tacos dorados, sus esquites y el pozole
        cuando es septiembre en la comida que se arma en esas fechas</p>
        </div>";

        $lugaresyPlatillos[1][1]="
        <div id='tacosGuadalupe'>
        <h3>Los tacos del centro de Texcoco</h3>
        <p>Los tacos estan bien, pero sin una buena salsa no son nada. Así que dire
        que mi taqueria favorita son los del cetro de Texcoco, por que es el unico 
        donde tienen la salsa de chile de arbol que tanto me gusta, y hasta ahora no
        he eencontrado una igual</p>
        </div>
        ";
        $lugaresyPlatillos[1][2]="
        <div id='losJarochos'>
            <h3>Restaurante Los Jarochos</h3>
            <p>En ese lugar voy especialmente por un platillo llamado
            'casuela' y que es una autentica delicia.</p>
        </div>
        ";
        $lugaresyPlatillos[1][3]="
        <div>
            <p>Y las tostadas de pulpo también las encuetro muy ricas</p>
        </div>
        ";


        $resultadoFcn = mostrarContenido($lugaresyPlatillos,1,3);

        ?>
    <h2>La comida</h2>
    <article>
        <h3>Mis lugares favoritos para comer</h3>
        <div>
            La casa de mamá
            <p>La comida en casa es u na experiencia única, no es el sabor, es la reunión, las risas, el tiempo que
                pasamos y todas las actividades que nos involucramos cada que nos reunimos a la hora de preparar
                cualquier platilo</p>
        </div>

    <h3>Los platillos que más me gustan</h3>

        <?php 

            include_once("./datosComida/articulos/hamburguesas.inc");
            include_once("./datosComida/articulos/hotdogs.inc");
            include_once("./datosComida/articulos/maruchan.inc");
            ?>
            <h3>Los platillo que puedo preparar</h3>

            <?php

            $datoReceta=file("./datosComida/datosRecetas/pastelimposible.dat");
            echo "<h4>" . $datoReceta[0]."</h4>";
            echo "<p>" . $datoReceta[1]."</p>";

            echo "<h4>Ingredientes</h4>";
            echo "<ul>";
            $ingredientes=explode(',',$datoReceta[2]);
                foreach ($ingredientes as $key => $ingre) {
                    echo "<li>$ingre</li>";
                }
            echo "</ul>";

            echo "<h4>Procedimiento</h4>";
            echo "<ol>";
            $pasos=explode('|',$datoReceta[3]);
                foreach ($pasos as $key => $pasosProc) {
                    echo "<li>$pasosProc</li>";
                }
            echo "</ol>";
            ?>

</body>
</html>