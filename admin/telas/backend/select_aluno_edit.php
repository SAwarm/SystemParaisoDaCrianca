<?php 

    require_once('./connection.php');

    $id = $_POST['id'];

    $query = "SELECT * FROM aluno where cod = '$id'";

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }