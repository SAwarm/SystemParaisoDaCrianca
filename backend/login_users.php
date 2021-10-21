<?php 

    require_once('./connection.php');

   $cargo = $_POST['cargo'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   if ($cargo == "Coordenador(a)"){



   }else if ($cargo == "Professor(a)"){



   }else if ($cargo == "Auxiliar"){

        $querySelect = "SELECT * from funcionario inner join funcao on funcionario.funcao = funcao.cod
        where funcionario.email='$senha' and funcionario.senha='$senha' and funcao.descricao ='Auxiliar'";

        $result = mysqli_query($link, $querySelect);
        print_r(mysqli_num_rows($result));
    
   }else{
       echo "erro, volte mais tarde e tente novamente";
   }