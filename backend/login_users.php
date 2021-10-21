<?php 

    require_once('./connection.php');

   $cargo = $_POST['cargo'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   if(!empty($cargo)){
        $querySelect = "SELECT * from funcionario inner join funcao on funcionario.funcao = funcao.cod
        where funcionario.email='$email' and funcionario.senha='$senha' and funcao.descricao ='$cargo'";

        $result = mysqli_query($connection, $querySelect);
        $result = mysqli_fetch_array($result);

        if(!empty($result)){
            echo "Logado com sucesso";
        }else{
            echo "Erro no login ou senha";
        }
   }else{
        
   }