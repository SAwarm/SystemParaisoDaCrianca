<?php
    session_start();
    require_once('./connection.php');

    $cargo = $_SESSION['cargo_user'];
    $id = $_SESSION['id'];
    
    if($cargo == "Responsável"){

    }else{
        
        $query = "SELECT * FROM funcionario inner join doctos on doctos.cod = funcionario.doctos
        inner join endereco on endereco.cod = funcionario.endereco
        inner join cargah on cargah.cod = funcionario.cargah
        inner join formacao on formacao.cod = funcionario.formacao
        inner join restalimentar on restalimentar.cod = funcionario.restalimentar
        inner join doencaspre on doencaspre.cod = funcionario.doencaspre where funcionario.cod='$id'";

        $result = mysqli_query($connection, $query);
    
        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }
    
        if(!empty($rows)){
            echo json_encode($rows);
        }else{
            echo "null";
        }
    }
    