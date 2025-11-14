<?php 

function showToDoList(){
    global $todoList;
    echo PHP_EOL . " APLIKASI TODOLIST" . PHP_EOL;

    foreach($todoList as $number => $value){
        echo "{$number}. $value" . PHP_EOL;
    }

}