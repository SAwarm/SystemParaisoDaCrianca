<?php 

    require_once('./connection.php');

    $acao = $_POST['acao'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    if($acao == "responsavel"){
        $sqlSelect = "SELECT * FROM responsavel inner join doctos
        on doctos.cod = responsavel.doctos where responsavel.email='$email' and doctos.CPF='$cpf'";

        $result = mysqli_query($connection, $sqlSelect);

        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }

        if(!empty($rows)){
            $sql = "UPDATE responsavel SET responsavel.senha='$senha'
            where responsavel.email='$email'";
            
            if(mysqli_query($connection, $sql)){
                echo "true";
            }else{
                echo "erro".mysqli_error($connection);
            }

        }else{
            echo "null";
        }
    }else{
        $sqlSelect = "SELECT * FROM funcionario inner join doctos
        on doctos.cod = funcionario.doctos where funcionario.email='$email' and doctos.CPF='$cpf'";

        $result = mysqli_query($connection, $sqlSelect);

        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }

        if(!empty($rows)){
            $sql = "UPDATE funcionario SET funcionario.senha='$senha'
            where funcionario.email='$email'";
            
            if(mysqli_query($connection, $sql)){
                echo "true";
            }else{
                echo "erro".mysqli_error($connection);
            }

        }else{
            echo "null";
        }
    }