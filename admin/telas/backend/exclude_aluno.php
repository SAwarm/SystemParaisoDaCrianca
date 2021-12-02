<?php

    require_once('./connection.php');

    $id = $_POST['id'];

    $query = "DELETE from aluno where cod = '$id'";
    if(mysqli_query($connection, $query)){
        echo "true";
    }else{
        echo "false";
    }