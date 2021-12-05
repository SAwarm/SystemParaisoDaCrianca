<?php 
    session_start();
    require_once('./connection.php');
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM responsavel inner join aluno on aluno.cod = responsavel.cod_aluno 
    inner join notas on notas.cod_aluno = aluno.cod where responsavel.cod ='$id'";

    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }