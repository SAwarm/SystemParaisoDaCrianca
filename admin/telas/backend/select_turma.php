<?php 

    require_once('./connection.php');   

    $querySelect = "SELECT * from turma";

    $result = mysqli_query($connection, $querySelect);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }
    if($result != false){
        $result_sql = mysqli_fetch_array($result);
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }