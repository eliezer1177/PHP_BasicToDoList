<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";
require_once __DIR__ . "/ViewShowToDoList.php";

function viewRemoveToDoList(){
    echo"MENGHAPUS TODO" . PHP_EOL;

    $pilihan = (int) input("Nomor (x untuk batal)");

    if($pilihan <= 0){
        echo "Gagal menghapus pilihan". PHP_EOL;
    } else{
        $success = removeToDoList($pilihan);
        if($success){
            echo "Sukses menghapus TODO nomor $pilihan". PHP_EOL;

        }else{
            echo "Gagal menghapus pilihan". PHP_EOL;
        }
    }
}