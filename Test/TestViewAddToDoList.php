<?php 


require_once "../View/ViewAddToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToList("minum");
addToList("makan");
addToList("turu");
viewAddToDoList();


showToDoList();