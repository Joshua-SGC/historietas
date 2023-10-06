<?php

    $conexion = new mysqli("localhost", "id20331472_joshua_sgc_1", "sisequeponeR1-", "id20331472_historietas");

    if($conexion){

        echo "conexion exitosa";

    } else{

        echo "fallo la conexion";

    }

?>
