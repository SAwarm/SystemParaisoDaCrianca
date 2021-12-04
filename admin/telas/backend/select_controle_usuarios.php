<?php

require_once('./connection.php');

$funcao = $_POST['func'];

if($funcao == "Responsável"){
    // $query = "SELECT * FROM responsavel 
    // inner join doctos on doctos.cod = responsavel.doctos
    // inner join endereco on endereco.cod = responsavel.endereco
    // inner join cargah on cargah.cod = responsavel.cargah
    // inner join formacao on formacao.cod = responsavel.formacao
    // inner join restalimentar on restalimentar.cod = responsavel.restalimentar
    // inner join doencaspre on doencaspre.cod = responsavel.doencaspre
    // where funcao='$funcao'";

    // $result = mysqli_query($connection, $query);

    // while($row = mysqli_fetch_array($result)) {
    //     $rows [] = $row;
    // }

    // if(!empty($rows)){
    //     echo json_encode($rows);
    // }else{
    //     echo "null";
    // }
}else{
    if($funcao == "Coordenador(a)"){
        $funcao = 2;
    }else if($funcao == "Professor(a)"){
        $funcao = 3;
    }else if($funcao == "Auxiliar"){
        $funcao = 1;
    }

    $query = "SELECT * FROM funcionario 
    inner join doctos on doctos.cod = funcionario.doctos
    inner join endereco on endereco.cod = funcionario.endereco
    inner join cargah on cargah.cod = funcionario.cargah
    inner join formacao on formacao.cod = funcionario.formacao
    inner join restalimentar on restalimentar.cod = funcionario.restalimentar
    inner join doencaspre on doencaspre.cod = funcionario.doencaspre
    inner join funcao on funcao.cod = funcionario.funcao
    where funcao='$funcao'";

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
