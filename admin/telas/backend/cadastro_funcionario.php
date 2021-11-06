<?php
    require_once('./connection.php');
   // print_r($_POST['nome']) ;

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $data_nasc = $_POST['data_nasc'];
   $data_ingresso = $_POST['data_ingresso'];
   $file = $_POST['observacao'];
   $descricao = $_POST['descricao'];
   $cpf = $_POST['cpf'];
   $rg = $_POST['rg'];
   $carga = $_POST['carga'];
   $formacao = $_POST['formacao'];
   $restricoes = $_POST['restricoes'];
   $doencas = $_POST['doencas'];
   $tipo_sang = $_POST['tipo_sang'];
   $doencas = $_POST['doencas'];
   $funcao = $_POST['funcao'];
   $genero = $_POST['genero'];
   $estado = $_POST['estado'];
   $municipio = $_POST['municipio'];
   $bairro = $_POST['bairro']; 
   $rua = $_POST['rua']; 
   $numero_casa = $_POST['numero_casa'];
   $complemento = $_POST['complemento'];


   if($genero == "Masculino"){
       $genero = 1;
   }else if($genero == "Feminino"){
        $genero = 2;
   }else if($genero == "Outros"){
        $genero = 3;
    }

    if($funcao == "Coordenador(a)"){
        $funcao = 2;
    }else if($funcao == "Professor(a)"){
        $funcao = 3;
    }else if($funcao == "Auxiliar"){
        $funcao = 1;
    }else if($funcao == "Responsável"){
        $funcao = 4;
    }

    function CadastroDocument($descricao, $cpf, $rg){
        $queryInsert = "INSERT INTO doctos (descricao, cpf, rg) VALUES ($descricao, $cpf, $rg)";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id();
   }

   function CadastroAddress($estado, $municipio, $bairro, $rua, $numero_casa, $complemento){
        $queryInsert = "INSERT INTO endereco (estado, municipio, bairro, rua, numero, complemento) VALUES ($estado, $municipio, $bairro, $rua, $numero_casa, $complemento)";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id();
   }

   function CadastroCarga($carga){
        $queryInsert = "INSERT INTO cargah (descricao) VALUES ($carga)";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id();
   }

   function CadastroFuncao($formacao){
        $queryInsert = "INSERT INTO formacao (descricao) VALUES ($formacao)";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id();
   }

    function CadastroRestAlimentar($restricoes){
        $queryInsert = "INSERT INTO restalimentar (descricao) VALUES ($restricoes)";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id();
    }



    