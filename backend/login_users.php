<?php 

    require_once('./connection.php');

    $senha = $_POST['senha'];

    if(!empty($_POST['cargo'])){
            $cargo = $_POST['cargo'];
            $email = $_POST['email'];

            $querySelect = "SELECT * from funcionario inner join funcao on funcionario.funcao = funcao.cod
            where funcionario.email='$email' and funcionario.senha='$senha' and funcao.descricao ='$cargo'";

            $result = mysqli_query($connection, $querySelect);
            $result = mysqli_fetch_array($result);

            if(!empty($result)){
                session_start();
                $_SESSION['cargo_user'] = $cargo;
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
                session_start();
                $_SESSION['cargo_user'] = "Consulta";
                echo "Logado com sucesso";
            }else{
                echo "Erro no login ou senha";
            }
    }