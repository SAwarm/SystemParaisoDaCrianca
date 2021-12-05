<?php
   
    require_once('./connection.php');

    $turma = $_POST['turma'];

    function CadastroTurma($turma, $connection){
        $queryInsert = "INSERT INTO turma (descricao) VALUES ('$turma')";

        $result = mysqli_query($connection, $queryInsert);
        
        if(!empty(mysqli_insert_id($connection))){
            return "Turma inserida com sucesso!";
        }else{
            return "Erro ao inserir turma!";
        }
   }

    echo CadastroTurma($turma, $connection);