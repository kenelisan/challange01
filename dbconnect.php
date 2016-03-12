<?php

    $server = 'localhost';
    $userName = 'root';
    $password = '';
    $db = 'usersystem';

    $connect = mysqli_connect($server,$userName,$password,$db);

    if($connect){
        echo "yeah";
    }else{
        echo "fuckkkk";
    }

?>