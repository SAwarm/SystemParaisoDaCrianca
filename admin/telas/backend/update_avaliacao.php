<?php
    require_once('./connection.php');

    $id = $_POST['id'];
    $id_aluno = $_POST['id_aluno'];
    $avaliacao = $_POST['avaliacao'];

    $sqlUpdate = "UPDATE notas SET nota='$avaliacao', cod_aluno='$id_aluno' WHERE cod='$id'";

    if (mysqli_query($connection, $sqlUpdate)) {
        echo "true";
    } else {
        echo "Erro de atualização do registro: " . mysqli_error($connection);
    }