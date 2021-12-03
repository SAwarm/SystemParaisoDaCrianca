<?php 

    require_once('./connection.php');

    $id = $_POST['id'];
    $sql = "SELECT * FROM notas inner join aluno on aluno.cod = notas.cod_aluno WHERE notas.cod ='$id'";

    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }