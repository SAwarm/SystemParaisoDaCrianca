<?php
    require_once('./connection.php');

    $id = $_POST['id'];
    $turma = $_POST['turma'];

    $sqlUpdate = "UPDATE turma SET descricao='$turma' WHERE cod='$id'";

    if (mysqli_query($connection, $sqlUpdate)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro de atualização do registro: " . mysqli_error($connection);
    }