<?php 
    $list = file_get_contents('./todo.json');

    header('Content-Type: application/json');

    if (isset($_POST['index_item'])) {
        $data = json_decode($list, true);
        $data[$_POST['index_item']]['do'] = !$data[$_POST['index_item']]['do'];

        $newList = json_encode($data, true);
        file_put_contents('./todo.json', $newList);
    }

    if (isset($_POST['delete_item'])) {
        $data = json_decode($list, true);

        unset($data[$_POST['delete_item']]);
        
        $newList = json_encode($data, true);
        file_put_contents('./todo.json', $newList);
    }

    echo $list;
?>
