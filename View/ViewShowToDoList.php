<?php 


require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/ViewAddToDoList.php";
require_once __DIR__ . "/ViewRemoveToDoList.php";
function viewShowToDoList(){
    while (true) {
        showToDoList();

        echo PHP_EOL;
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Keluar Program" . PHP_EOL;

        $pilihan = input("pilih"); 

        if($pilihan == "1"){
            viewAddToDoList();
        }else if($pilihan == "2"){
            viewRemoveToDoList();
        } else if($pilihan == "3"){ 
            break;
        } else {
            echo "Pilihan tidak ada" . PHP_EOL;
        }
    }
    echo"Sampai jumpa..". PHP_EOL;
}