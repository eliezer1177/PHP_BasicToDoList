<?php 

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToList("makan");
addToList("tidur");
addToList("belajar");

var_dump($todoList);
