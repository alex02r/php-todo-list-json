<?php 
    $list = file_get_contents('./todo.json');

    header('Content-Type: application/json');

    echo $list;
?>
