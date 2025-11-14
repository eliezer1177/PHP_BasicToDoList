<?php 
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/ViewShowToDoList.php";

function viewAddToDoList(){
    
    echo PHP_EOL . "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if($todo == "x"){
        echo PHP_EOL . "batal menambah TODO". PHP_EOL;

    }else{
        addToList($todo);

    }

}