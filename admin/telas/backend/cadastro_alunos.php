<?php
   require_once('./connection.php');

   $nome = $_POST['nome'];
   $data_nasc = $_POST['data_nasc'];
   $data_ingresso = $_POST['data_ingresso'];
   $cpf = $_POST['cpf'];
   $rg = $_POST['rg'];
   $medicamento = $_POST['medicamento'];
   $tipo_sang = $_POST['tipo_sang'];
   $genero = $_POST['genero'];
   $estado = $_POST['estado'];
   $municipio = $_POST['municipio'];
   $bairro = $_POST['bairro'];
   $rua = $_POST['rua']; 
   $numero_casa = $_POST['numero_casa'];
   $complemento = $_POST['complemento'];
   $turma = $_POST['id_turma'];
   $descricao = $_POST['descricao'];
   $restricoes = $_POST['restricoes'];
   $doencas = $_POST['doencas'];


   if($genero == "Masculino"){
       $genero = 1;
   }else if($genero == "Feminino"){
        $genero = 2;
   }else if($genero == "Outros"){
        $genero = 3;
    }

    if($tipo_sang == "A+"){
        $tipo_sang = 1;
    }else if($tipo_sang == "A-"){
        $tipo_sang = 2;
    }else if($tipo_sang == "B+"){
        $tipo_sang = 3;
    }else if($tipo_sang == "B-"){
        $tipo_sang = 4;
    }else if($tipo_sang == "AB+"){
        $tipo_sang = 5;
    }else if($tipo_sang == "AB-"){
        $tipo_sang = 6;
    }else if($tipo_sang == "O+"){
        $tipo_sang = 7;
    }else if($tipo_sang == "O-"){
        $tipo_sang = 8;
    }

    function CadastroDocument($connection, $descricao, $cpf, $rg){
        $queryInsert = "INSERT INTO doctos (descricao, cpf, rg) VALUES ('$descricao', '$cpf', '$rg')";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id($connection);
   }

   function CadastroAddress($connection, $estado, $municipio, $bairro, $rua, $numero_casa, $complemento){
        $queryInsert = "INSERT INTO endereco (estado, municipio, bairro, rua, numero, complemento) VALUES ('$estado', '$municipio', '$bairro', '$rua', '$numero_casa', '$complemento')";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id($connection);
   }

    function CadastroRestAlimentar($connection, $restricoes){
        $queryInsert = "INSERT INTO restalimentar (descricao) VALUES ('$restricoes')";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id($connection);
    }

    function CadastroDoencas($connection, $doencas){
        $queryInsert = "INSERT INTO doencaspre (descricao) VALUES ('$doencas')";

        $result = mysqli_query($connection, $queryInsert);
        return mysqli_insert_id($connection);
    }

    $doctos = CadastroDocument($connection, $descricao, $cpf, $rg);
    $endereco = CadastroAddress($connection, $estado, $municipio, $bairro, $rua, $numero_casa, $complemento);
    $restAlim = CadastroRestAlimentar($connection, $restricoes);
    $doenc = CadastroDoencas($connection, $doencas);

    //$senha = $funcao.$nome.$data_nasc.$formacao.$genero;

    $new_name = "";
    if(isset($_FILES['file-0']))
    {
        $ext = strtolower(substr($_FILES['file-0']['name'],-4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $dir = './imagens/'; //Diretório para uploads 
        move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        //echo("Imagen enviada com sucesso!");
    }

    $queryInsert = "INSERT INTO aluno 
        (
            nome,
            datanasc,
            datadeingresso,
            medicamento,
            foto,
            doctos,
            genero,
            turma,
            endereco,
            restalimentar,
            doencaspre,
            tipo_sang
        ) 
        VALUES 
        (
            '$nome',
            '$data_nasc',
            '$data_ingresso',
            '$medicamento',
            '$new_name',
            '$doctos',
            '$genero',
            '$turma',
            '$endereco',
            '$restAlim',
            '$doenc',
            '$tipo_sang'
        )";

        if(mysqli_query($connection, $queryInsert)){
            echo "true";
        }else{
            echo "false".mysqli_error($connection);
        }

    