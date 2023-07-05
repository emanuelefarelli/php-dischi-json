<?php
    
    $rawDataDisks = file_get_contents('./database/data.json');
    
    $disks = json_decode($rawDataDisks);
    header('Content-Type: application/json');
    
    echo json_encode($disks);

?>