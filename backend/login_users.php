<?php 

    require_once('./connection.php');
    session_start();
    $senha = $_POST['senha'];

    if(!empty($_POST['cargo'])){
            $cargo = $_POST['cargo'];

            if($cargo == "Coordenador(a)"){
                $cargo = "Coordenador";
            }else if($cargo == "Professor(a)"){
                $cargo = "Professor";
            }
            $email = $_POST['email'];

            $querySelect = "SELECT * from funcionario inner join funcao on funcionario.funcao = funcao.cod
            where funcionario.email='$email' and funcionario.senha='$senha' and funcao.descricao ='$cargo'";

            $result = mysqli_query($connection, $querySelect);
            $result = mysqli_fetch_array($result);

            if(!empty($result)){
                $_SESSION['cargo_user'] = $cargo;
                $_SESSION['id'] = $result[0];
                echo "Logado com sucesso";
            }else{
                echo "Erro no login ou senha";
            }
    }else{  
            $matricula = $_POST['matricula'];
            $querySelect = "SELECT * from aluno where MD5(cod)='$matricula' and senha='$senha'";

            $result = mysqli_query($connection, $querySelect);
            $result = mysqli_fetch_array($result);

            if(!empty($result)){
                $_SESSION['cargo_user'] = "Consulta";
                echo "Logado com sucesso";
            }else{
                echo "Erro no login ou senha";
            }
    }