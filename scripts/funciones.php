<?php
    // $new_include_path="";[]
    // set_include_path($new_include_path);
    
    function desplegarSerieWithImagen(
        $NombreDeSerie,
        $FechaDeInicioDeEmision,
        $FechaDeTerminoDeEmision,
        $Creador,
        $Genero,
        $Temporadas,
        $Descripcion,
        $RutaDeImagen
    ){
        $RutaRaiz="../../images/site/imagesSeries/";
        echo '<article class="ArticuloSerie">

            <h2>'.$NombreDeSerie.' ('.$FechaDeInicioDeEmision.' - '.$FechaDeTerminoDeEmision.')</h2>
            <h3>Creador: '.$Creador.'</h3>
            <h3>Genero: '.$Genero.'</h3>
            <h3>Temporadas: '.$Temporadas.'</h3>
            <h3 class="DescripcionSerie">'.$Descripcion.'</h3>
        ';

        echo '<img src="'.$RutaRaiz.$RutaDeImagen.'.jpg" alt="'.$RutaRaiz.$RutaDeImagen.'" class="imagenesSeccSeries">';
        
        echo "
            </article>";
        
            return "Función Completa";
    }

    function desplegarAnimeWithImagen(
        $NombreDelAnime,
        $FechaDeInicioDeEmision,
        $FechaDeTerminoDeEmision,
        $Descripcion,
        $RutaDeImagen
    ){
        
        $RutaRaiz="../../images/site/imagesAnimes/";
        echo '<article class="ArticuloAnimes">

            <h2>'.$NombreDelAnime.' ('.$FechaDeInicioDeEmision.' - '.$FechaDeTerminoDeEmision.')</h2>
            <h3 class="DescripcionAnimes">'.$Descripcion.'</h3>
        ';

        echo '<img src="'.$RutaRaiz.$RutaDeImagen.'.jpg" alt="'.$RutaRaiz.$RutaDeImagen.'" class="imagenesSeccAnimes">';
        
        echo "
            </article>";
        
            return "Función Completa";
    }

?>