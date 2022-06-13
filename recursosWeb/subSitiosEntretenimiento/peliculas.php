<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/textos.css">
    <title>Peliculas</title>

    <?php
        $datosXMLPeliculas=simplexml_load_file("./respuestasForms/datosXML/lasMejoresPeliculas.xml");
        // $datosXMLPeliculas=simplexml_load_file("../../datosXML/lasMejoresPeliculas.xml");
        $numeroDePeliculas=count($datosXMLPeliculas->Pelicula);
    ?>

</head>
<body>
<h1>Tabla de las mejores peliculas</h1>
    <p>Ingresa los valores de la tabla que desea que se desplieguen.</p>


    <form action="./respuestasForms/respuestaPeliculas.php"
    enctype="multipart/form-data"
    method="post">
    <?php
        echo "<label for='cantPeliculas'>Introduce la cantidad de peliculas a mostrar (max.".$numeroDePeliculas.")</label>";
        echo "<input type='number' name='cantPeliculas' id='cantPeliculas' min='1' max='".$numeroDePeliculas."'>"
    ?>
    <!-- <label for="cantPeliculas">Introduce la cantidad de peliculas a mostrar (max.5)</label> -->
    <!-- <input type="number" name="cantPeliculas" id="cantPeliculas" min="1" max="5"> -->

    <br>

    <label>Datos de la tabla para mostrar</label>

    <br>

    <label for="NombrePeli">¬ Nombre de la pelicula</label>
    <input type="checkbox" name="elementosPeliculas" id="NombrePeli" value="NombrePeli">
    <br>
    <label for="Fecha">¬ Fecha de estreno</label>
    <input type="checkbox" name="elementosPeliculas" id="Fecha" value="Fecha">
    <br>
    <label for="Calificacion">¬ Calificacion</label>
    <input type="checkbox" name="elementosPeliculas" id="Calificacion" value="Calificacion">

    <br>

    <label for="listaNombresPeliculas">O selecciona una pelicula para ver sus datos</label>
    <select name="listaNombresPeliculas" id="listaNombresPeliculas">
        <?php
            $datosPeliculas=file("../subSitiosEntretenimiento/datosPeliculas/listaPeliculas.dat");
            foreach($datosPeliculas as $key => $pelicula){
                echo "<option value='".$pelicula."'>".$pelicula."</option>";
            }
        ?>
    </select>

    <br>
    <br>

    <input type="submit" value="Enviar datos">

    </form>
    
</body>
</html>