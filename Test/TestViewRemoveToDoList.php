<?php 


require_once "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";


addToList("makan");
addToList("tidur");
addToList("belajar");
addToList("mandi");

showToDoList();

viewRemoveToDoList();




