<?php
    
    function crearSelect($nombresSlct,$nombreArchivoDatos){
        $ruta='./datosDeportes/'.$nombreArchivoDatos;
        $datosEquipos=file("$ruta");
    }

    $datosEquipos=file("./datosDeportes/equiposBasket.dat");

?>