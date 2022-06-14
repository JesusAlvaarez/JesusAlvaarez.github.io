<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/textos.css">
    <link rel="stylesheet" href="../../estilos/entretenimiento.css">
    <title>Anime</title>
    <?php
        include_once("C:\\xampp\\htdocs\\PracticaNo4\\scripts\\funciones.php");
    ?>
</head>
<body>
    <main>
        <h1>La mejores Animes de los ultimos tiempos son...</h1>

        <?php
            $datosXMLAnimes=simplexml_load_file("../subSitiosEntretenimiento/respuestasForms/datosXML/losMejoresAnimes.xml");
            $contAnimes=0;
            foreach ($datosXMLAnimes->Animes->Anime as $key => $ValoresAnime) {
                $contAnimes++;
                echo "<h2 class='txtNoPuesto'>Puesto Número: ".$contAnimes."</h2>";
                $ValoresAnime->NombreDeSerie=trim($ValoresAnime->NombreDelAnime);
                desplegarAnimeWithImagen(
                    $ValoresAnime->NombreDelAnime,
                    $ValoresAnime->FechaDeInicioDeEmision,
                    $ValoresAnime->FechaDeTerminoDeEmision,
                    $ValoresAnime->Descripcion,
                    $ValoresAnime->NombreDelAnime        
                );
            }

        ?>

    </main>
    
</body>
</html>