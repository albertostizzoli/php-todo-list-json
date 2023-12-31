<?php
$filecontent = file_get_contents("todo-list.json");

$list = json_decode($filecontent, true);

if(isset($_POST['task'])){
    $task = $_POST['task'];
    $done = false;

    $todoList = [
        'task' => $task,
        'done' => $done,
    ];

    $list[] = $todoList;

    file_put_contents('todo-list.json', json_encode($list));
} 

if(isset($_POST['delete'])){
    unset($list[$_POST['delete']]);
    file_put_contents('todo-list.json', json_encode($list));
}

header('Content-Type: application/json');
echo json_encode($list);
?>