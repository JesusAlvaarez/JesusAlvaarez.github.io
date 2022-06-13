<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos/textos.css">
    <link rel="stylesheet" href="../../../estilos/estilos_tabla.css">
    <title>Respuesta del formulario</title>

    <?php
        // $datosXMLPeliculas=simplexml_load_file("/datosXML/lasMejoresPeliculas.xml");
        // $numeroDePeliculas=count($datosXMLPeliculas->Peliculas->Pelicula);
    ?>
</head>
<body>
    <h1>Datos obtenidos del formulario</h1>

    <?php
        //Recibir valores

        $cantPeliculas=         $_POST['cantPeliculas'];
        settype($cantPeliculas,'int');
        // if(isset($_POST['elementosPeliculas'])){
        //     $elementosPeliculas=$_POST['elementosPeliculas'];
            
        // }
        if(!empty($_POST['elementosPeliculas'])){
            // Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
            foreach($_POST['elementosPeliculas'] as $clave => $selected){
            $elementosPeliculas[$clave]=$selected;
            }
            //echo gettype($elementosPeliculas);
        }
        $listaNombresPeliculas= $_POST['listaNombresPeliculas'];
        $listaNombresPeliculas=trim($listaNombresPeliculas);

        //echo gettype($elementosPeliculas);
        //echo $elementosPeliculas[0]."|fin";

        $datosXMLPeliculas=simplexml_load_file("./datosXML/lasMejoresPeliculas.xml");

        $numeroDePeliculas=count($datosXMLPeliculas->Pelicula);

        $isOn_NombrePeli=false;
        $isOn_Fecha=false;
        $isOn_Calificacion=false;

        if (!empty($_POST['elementosPeliculas'])) {
            //Variables para colocar el nombre de las clases con comillas en el HTML
            $nombreDeClaseTablaPeliculas='"tablaPeliculas"';
            $nombreDeClaseCeldaBase='"celdaBase"';
            echo "<table class=".$nombreDeClaseTablaPeliculas.">";
            echo "<thead>";
            echo "
                <tr>
                <th>Posición en la tabla</th>
                ";
                for ($i=0; $i < count($elementosPeliculas) ; $i++) { 
                    $elementosPeliculas[$i]=trim($elementosPeliculas[$i]);
                    if($elementosPeliculas[$i]=="NombrePeli"){
                        echo "<th>Nombre de la pelicula</th>";
                        $isOn_NombrePeli=true;
                    }
                    if($elementosPeliculas[$i]=="Fecha"){
                        echo "<th>Fecha de Estreno</th>";
                        $isOn_Fecha=true;
                    }
                    if($elementosPeliculas[$i]=="Calificación"){
                        echo "<th>Calificación</th>";
                        $isOn_Calificacion=true;
                    }
                }
            echo "
                </tr>";
            echo "</thead>";
            $contadorDePeliculas=0;
            echo "<tbody>";
            for ($i=0; $i < $cantPeliculas;$i++) { 
                //echo "<h2>La calificación de la pelicula es:".$datosXMLPeliculas->Pelicula[$i]->Calificacion."</h2>";
                $contadorDePeliculas++;
                echo "    
                    <tr class=".$nombreDeClaseCeldaBase.">
                    <td>$contadorDePeliculas</td>
                    ";
                if($isOn_NombrePeli){
                    echo "<td>".$datosXMLPeliculas->Pelicula[$i]->NombreDeLaPelicula."</td>";
                }
                if($isOn_Fecha){
                    echo "<td>".$datosXMLPeliculas->Pelicula[$i]->FechaDeEstreno."</td>";
                }
                if($isOn_Calificacion){
                    echo "<td>".$datosXMLPeliculas->Pelicula[$i]->Calificacion."</td>";
                }
                echo "
                    </tr>
                ";                
                }
                echo "</tbody>";
                echo "</table>";     
            }
            

        if ((($cantPeliculas > 0) && ($cantPeliculas < $numeroDePeliculas))
         && ($listaNombresPeliculas!="Todas") && (empty($elementosPeliculas))) {
            
            //Variables para colocar el nombre de las clases con comillas en el HTML
            $nombreDeClaseTablaPeliculas='"tablaPeliculas"';
            $nombreDeClaseCeldaBase='"celdaBase"';
            echo "<table class=".$nombreDeClaseTablaPeliculas.">";
            echo "<thead>";
            echo "
            <tr>
                <th>Posición en la tabla</th>
                <th>Nombre de la película</th>
                <th>Fecha de Estreno</th>
                <th>Calificación</th>
            </tr>";
            echo "</thead>";
            $contadorDePeliculas=0;
            echo "<tbody>";
            for ($i=0; $i < $cantPeliculas;$i++) { 
                //echo "<h2>La calificación de la pelicula es:".$datosXMLPeliculas->Pelicula[$i]->Calificacion."</h2>";
                $contadorDePeliculas++;
                echo "    
                    <tr class=".$nombreDeClaseCeldaBase.">
                    <td>$contadorDePeliculas</td>
                    <td>".$datosXMLPeliculas->Pelicula[$i]->NombreDeLaPelicula."</td>
                    <td>".$datosXMLPeliculas->Pelicula[$i]->FechaDeEstreno."</td>
                    <td>".$datosXMLPeliculas->Pelicula[$i]->Calificacion."</td>
                    </tr>
                    ";
                }    
            echo "</tbody>";
            echo "</table>";
        }
            
        
        if ($cantPeliculas==0 && $listaNombresPeliculas=="Todas") {
        
        echo "<h3>".$cantPeliculas."</h3>";

        //Variables para colocar el nombre de las clases con comillas en el HTML
        $nombreDeClaseTablaPeliculas='"tablaPeliculas"';
        $nombreDeClaseCeldaBase='"celdaBase"';
        echo "<table class=".$nombreDeClaseTablaPeliculas.">";
            echo "<thead>";
            echo "
            <tr>
                <th>Posición en la tabla</th>
                <th>Nombre de la pelicula</th>
                <th>Fecha de Estreno</th>
                <th>Calificación</th>
            </tr>";
            echo "</thead>";
            $contadorDePeliculas=0;
            foreach ($datosXMLPeliculas->Pelicula as $clave => $ValorPeliculas){
                $contadorDePeliculas++;
            echo "<tbody>";
            echo "    
                <tr class=".$nombreDeClaseCeldaBase.">
                <td>$contadorDePeliculas</td>
                <td>$ValorPeliculas->NombreDeLaPelicula</td>
                <td>$ValorPeliculas->FechaDeEstreno</td>
                <td>$ValorPeliculas->Calificacion</td>
                </tr>
                ";
            }    
            echo "</tbody>";
            echo "</table>";
        }

        if ($listaNombresPeliculas!="Seleccionar película") {
            //Variables para colocar el nombre de las clases con comillas en el HTML
            $nombreDeClaseTablaPeliculas='"tablaPeliculas"';
            $nombreDeClaseCeldaBase='"celdaBase"';
            echo "<table class=".$nombreDeClaseTablaPeliculas.">";
            echo "<thead>";
            echo "
            <tr>
                <th>Posición en la tabla</th>
                <th>Nombre de la pelicula</th>
                <th>Fecha de Estreno</th>
                <th>Calificación</th>
            </tr>";
            echo "</thead>";
            $contadorDePeliculas=0;
            for ($i=0; $i < $numeroDePeliculas; $i++) { 
                if ($datosXMLPeliculas->Pelicula[$i]->NombreDeLaPelicula==$listaNombresPeliculas) {
                    $contadorDePeliculas++;
                    echo "<tbody>";
                    echo "    
                    <tr class=".$nombreDeClaseCeldaBase.">
                    <td>$contadorDePeliculas</td>
                    <td>".$datosXMLPeliculas->Pelicula[$i]->NombreDeLaPelicula."</td>
                    <td>".$datosXMLPeliculas->Pelicula[$i]->FechaDeEstreno."</td>
                    <td>".$datosXMLPeliculas->Pelicula[$i]->Calificacion."</td>
                    </tr>
                    ";    
                    echo "</tbody>";
                    echo "</table>";
                }
            }
        }
    


        // $archivosDatosUSR=fopen("../../datosUSR/datosFormulario.txt","a+");
        // $cadenaDeDatos=$nombreUsuario.",".$numeroArticulos.",".$deporteFavorito.",".$estadisticasEquipo;
        // fputs($archivosDatosUSR,$cadenaDeDatos);
        // fclose($archivosDatosUSR);

    ?>

</body>
</html>