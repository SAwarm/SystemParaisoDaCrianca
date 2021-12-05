<?php

    require_once('./connection.php');
    $query = "SELECT * FROM aluno inner join turma on turma.cod = aluno.turma inner join responsavel on responsavel.cod_aluno = aluno.cod";

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }