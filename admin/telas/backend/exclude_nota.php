<?php

    require_once('./connection.php');

    $id = $_POST['id'];

    $sqlUpdate = "DELETE FROM notas where cod='$id'";

    if (mysqli_query($connection, $sqlUpdate)) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro na exclusão do registro: " . mysqli_error($connection);
    }