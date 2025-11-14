<?php 

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";


addToList("makan");
addToList("tidur");
addToList("belajar");
addToList("mandi");

showToDoList();

removeToDoList("0");
showToDoList();

var_dump($todoList);
