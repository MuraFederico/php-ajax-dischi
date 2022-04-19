<?php 
    include __DIR__ . './db/data.php';

    $genre = $_GET['genre'] ?? '';
    

    if ($genre) {
        $arr_results = [];
        foreach($arr_disc as $disc) {
            if ($disc['genre'] === $genre) {
                $arr_results[] = $disc;
            }
        };
    }else {
        $arr_results = $arr_disc;
    }

    header('Content-Type: application/json');
    echo json_encode($arr_results);
