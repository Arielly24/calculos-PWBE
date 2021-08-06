<?php

    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $distancia = $_POST["distancia"];
    $pedagios = $_POST["pedagios"];



    $frete = ($distancia * 6 + $pedagios * 9.40);

    echo "A viagem de $origem à $destino irá custar o valor total de R$ $frete"; 


