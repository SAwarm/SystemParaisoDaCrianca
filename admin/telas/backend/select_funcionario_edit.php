<?php 

    require_once('./connection.php');

    $id = $_POST['id'];
    $funcao = $_POST['funcao'];
    if($funcao == "Responsável"){
        $query = "SELECT * FROM responsavel 
        inner join doctos on doctos.cod = responsavel.doctos
        inner join endereco on endereco.cod = responsavel.endereco where responsavel.cod='$id'";
    
        $result = mysqli_query($connection, $query);
    
        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }
    
        if(!empty($rows)){
            echo json_encode($rows);
        }else{
            echo "null";
        }
    }else{
        $id = $_POST['id'];

        if($funcao == "Coordenador(a)"){
            $funcao = 2;
        }else if($funcao == "Professor(a)"){
            $funcao = 3;
        }else if($funcao == "Auxiliar"){
            $funcao = 1;
        }

        $sql = "SELECT * FROM funcionario 
        inner join doctos on doctos.cod = funcionario.doctos
        inner join endereco on endereco.cod = funcionario.endereco
        inner join cargah on cargah.cod = funcionario.cargah
        inner join formacao on formacao.cod = funcionario.formacao
        inner join restalimentar on restalimentar.cod = funcionario.restalimentar
        inner join doencaspre on doencaspre.cod = funcionario.doencaspre
        inner join funcao on funcao.cod = funcionario.funcao
        where funcao='$funcao' and funcionario.cod ='$id'";

        $result = mysqli_query($connection, $sql);

        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }

        if(!empty($rows)){
            echo json_encode($rows);
        }else{
            echo "null";
        }
    }