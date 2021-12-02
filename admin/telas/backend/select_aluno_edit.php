<?php 

    require_once('./connection.php');

    $id = $_POST['id'];

    $query = "SELECT aluno.*, turma.*, doctos.*, restalimentar.*, tipo_sang.*, responsavel.nome, responsavel.email,
    doencaspre.*, endereco.* FROM aluno inner join turma on turma.cod = aluno.turma 
    inner join responsavel on responsavel.cod_aluno = aluno.cod inner join doctos on 
    doctos.cod = aluno.doctos inner join restalimentar on restalimentar.cod = aluno.restalimentar
    inner join doencaspre on doencaspre.cod = aluno.doencaspre inner join tipo_sang on tipo_sang.cod = aluno.tipo_sang
    inner join endereco on aluno.endereco = endereco.cod where aluno.cod = '$id'";

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }