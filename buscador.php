<?php
/*Tener una lista de ciudades coon un clima     a y una ubbbbubicacion esfica */

function recomendacion (){
    $clima = array("Bogotá" => "Frio", "Monteria" => "Calido", "Medellin" => "Templado");

    $ubicacion = array("Guajira" => "norte", "Leticia" => "sur", "Santander" => "este","Antioquia" => "oeste",);

    $turismmo = array("Santa Marta" => "playas", "Villavicencio" => "llanos", "Rioacha" => "Desierto", "Quindio" => "Valles");

    switch("turismo") {
        case "clima":
            echo array_search("frio", $clima);
        break;
        case "ubicacion":
            echo array_search("norte", $ubicacion);
        break;
        case "turismo":
            echo array_search("playas", $turismmo)
    }



}
recomendacion();

?>

