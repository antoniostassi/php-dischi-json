<?php

    $albumsData = file_get_contents(__DIR__."\database.json");
    $toFilter = json_decode($albumsData, true);
    $filteredData = [];


    foreach($toFilter as $singleData) {

        $addToArray = true;
        // Questo controllo verifica se il SINGOLO dato del grande array NON soddisfa i requisiti richiesti dai filtri.
        // Qualora non li soddisfasse, la variabile $addToArray verrà settata su false e l'iterazione andrà avanti senza fare nulla.

        // Qualora tutti i requisiti fossero soddisfatti ( Ovvero che viene trovato un author contenente la stringa in $_GET)
        // Allora la variabile $addToArray rimarrà su true e verrà aggiunta ai filteredData
        if ( 
            isset($_GET['author']) 
            && 
            strpos(strtolower($singleData['author']), strtolower($_GET['author'])) === false
        ) {
            $addToArray = false;
        }

        if ($addToArray) {
            $filteredData[] = $singleData;
        }
    }

    header('Content-Type: application/json');

    echo json_encode($filteredData);

