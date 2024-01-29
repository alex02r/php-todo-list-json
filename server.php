<?php 
    $list = file_get_contents('./todo.json');

    header('Content-Type: application/json');

    $data = json_decode($list, true);

    if (isset($_POST['new_item'])) {

        $obj=[
            "name" => $_POST['new_item'],
            "do" => false
        ];

        $data[]= $obj;

        $newList = json_encode($data);
        file_put_contents('./todo.json', $newList);
    } 

    if (isset($_POST['index_item'])) {
        $data[$_POST['index_item']]['do'] = !$data[$_POST['index_item']]['do'];

        $newList = json_encode($data, true);
        file_put_contents('./todo.json', $newList);
    }

    if (isset($_POST['delete_item'])) {

        unset($data[$_POST['delete_item']]);

        $newList = json_encode($data, true);
        file_put_contents('./todo.json', $newList);
    }

    echo $list;
?>
