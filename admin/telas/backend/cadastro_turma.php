<?php
   
    require_once('./connection.php');

    $turma = $_POST['turma'];

    function CadastroTurma($turma, $connection){
        $queryInsert = "INSERT INTO turma (descricao) VALUES ('$turma')";

        $result = mysqli_query($connection, $queryInsert);
        
        if(!empty(mysqli_insert_id($connection))){
            return "turma inserida com sucesso!";
        }else{
            return "erro ao inserir turma!";
        }
   }

    echo CadastroTurma($turma, $connection);