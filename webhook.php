<?php 
    $file = 'data.json';
    $current = file_get_contents('php://input');
    file_put_contents($file, $current);

    header('Content-Type: application/json');
    echo json_encode($current);exit;
?>