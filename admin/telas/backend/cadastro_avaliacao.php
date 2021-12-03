<?php
    require_once('./connection.php');

    $id_aluno = $_POST['id_aluno'];
    $avaliacao = $_POST['avaliacao'];

    function CadastroAvaliacao($id_aluno, $avaliacao, $connection){
        $queryInsert = "INSERT INTO notas (nota, cod_aluno) VALUES ('$avaliacao', '$id_aluno')";

        $result = mysqli_query($connection, $queryInsert);
        
        if(!empty(mysqli_insert_id($connection))){
            return "true";
        }else{
            return "erro ao inserir avaliação";
        }
   }

    echo CadastroAvaliacao($id_aluno, $avaliacao, $connection);