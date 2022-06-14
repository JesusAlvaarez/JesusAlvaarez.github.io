<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/textos.css">
    <link rel="stylesheet" href="../../estilos/entretenimiento.css">
    <title>Series</title>
    <?php
        include_once("C:\\xampp\\htdocs\\PracticaNo4\\scripts\\funciones.php");
    ?>
</head>
<body>
    <main>
        <h1>La mejores Series de los ultimos tiempos son...</h1>

        <?php
            $datosXMLSeries=simplexml_load_file("../subSitiosEntretenimiento/respuestasForms/datosXML/lasMejoresSeries.xml");
            $contSeries=0;
            foreach ($datosXMLSeries->Series->Serie as $key => $ValoresSerie) {
                $contSeries++;
                echo "<h2 class='txtNoPuesto'>Puesto Número: ".$contSeries."</h2>";
                $ValoresSerie->NombreDeSerie=trim($ValoresSerie->NombreDeSerie);
                desplegarSerieWithImagen(
                    $ValoresSerie->NombreDeSerie,
                    $ValoresSerie->FechaDeInicioDeEmision,
                    $ValoresSerie->FechaDeTerminoDeEmision,
                    $ValoresSerie->Creador,
                    $ValoresSerie->Genero,
                    $ValoresSerie->Temporadas,
                    $ValoresSerie->Descripcion,
                    $ValoresSerie->NombreDeSerie        
                );
            }
        ?>

    </main>
</body>
</html>