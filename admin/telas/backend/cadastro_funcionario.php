<?php
   require_once('./connection.php');
   $funcao = $_POST['funcao'];
   if($funcao == "Responsável"){

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $data_ingresso = $_POST['data_ingresso'];
        $observacao = $_POST['observacao'];
        $descricao = $_POST['descricao'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $id_aluno = $_POST['id_aluno'];

        if(isset($_POST['formacao'])){
            $formacao = $_POST['formacao'];
        }
        
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

        $idDoc = CadastroDocument($connection, $descricao, $cpf, $rg);
        $idEndereco = CadastroAddress($connection, $estado, $municipio, $bairro, $rua, $numero_casa, $complemento);

        $new_name = "";
        if(isset($_FILES['file-0']))
        {
            $ext = strtolower(substr($_FILES['file-0']['name'],-4)); //Pegando extensão do arquivo
            $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
            $dir = './imagens/'; //Diretório para uploads 
            move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
            //echo("Imagen enviada com sucesso!");
        }

        $queryInsert = "INSERT INTO responsavel 
            (
                nome,
                email,
                datanasc,
                foto,
                doctos,
                genero,
                endereco,
                cod_aluno,
                senha
            ) 
            VALUES 
            (
                '$nome',
                '$email',
                '$data_nasc',
                '$new_name',
                '$idDoc',
                '$genero',
                '$idEndereco',
                '$id_aluno', 
                '$senha'
            )";
    
        if(mysqli_query($connection, $queryInsert)){
            echo "true";
        }else{
            // .mysqli_error($connection);
            echo "false".mysqli_error($connection);
        }


   }else{
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $data_ingresso = $_POST['data_ingresso'];
        $observacao = $_POST['observacao'];
        $descricao = $_POST['descricao'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $carga = $_POST['carga'];
        if(isset($_POST['formacao'])){
            $formacao = $_POST['formacao'];
        }
        $restricoes = $_POST['restricoes'];
        $doencas = $_POST['doencas'];
        $tipo_sang = $_POST['tipo_sang'];
        
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
    
        if($tipo_sang == "a_positivo"){
            $tipo_sang = 1;
        }else if($tipo_sang == "a_negativo"){
            $tipo_sang = 2;
        }else if($tipo_sang == "b_positivo"){
            $tipo_sang = 3;
        }else if($tipo_sang == "b_negativo"){
            $tipo_sang = 4;
        }else if($tipo_sang == "ab_positivo"){
            $tipo_sang = 5;
        }else if($tipo_sang == "ab_negativo"){
            $tipo_sang = 6;
        }else if($tipo_sang == "o_positivo"){
            $tipo_sang = 7;
        }else if($tipo_sang == "o_negativo"){
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
    
        function CadastroCarga($connection, $carga){
            $queryInsert = "INSERT INTO cargah (descricao) VALUES ('$carga')";
    
            $result = mysqli_query($connection, $queryInsert);
            return mysqli_insert_id($connection);
        }
    
        function CadastroFormacao($connection, $formacao){
            $queryInsert = "INSERT INTO formacao (descricao) VALUES ('$formacao')";
    
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
        $cargah =  CadastroCarga($connection, $carga);
        $formacaoFunc = CadastroFormacao($connection, $formacao);
        $restAlim = CadastroRestAlimentar($connection, $restricoes);
        $doenc = CadastroDoencas($connection, $doencas);
    
        $new_name = "";
        if(isset($_FILES['file-0']))
        {
            $ext = strtolower(substr($_FILES['file-0']['name'],-4)); //Pegando extensão do arquivo
            $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
            $dir = './imagens/'; //Diretório para uploads 
            move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
            //echo("Imagen enviada com sucesso!");
        }
    
        $queryInsert = "INSERT INTO funcionario 
            (
                nome,
                email,
                datanasc,
                datadeingresso,
                foto,
                obs,
                doctos,
                genero,
                endereco,
                funcao,
                cargah,
                formacao,
                restalimentar,
                doencaspre,
                tipo_sang,
                senha
            ) 
            VALUES 
            (
                '$nome',
                '$email',
                '$data_nasc',
                '$data_ingresso',
                '$new_name',
                '$observacao',
                '$doctos',
                '$genero',
                '$endereco',
                '$funcao',
                '$cargah',
                '$formacaoFunc',
                '$restAlim',
                '$doenc',
                '$tipo_sang',
                '$senha'
            )";
    
        if(mysqli_query($connection, $queryInsert)){
            echo "true";
        }else{
            // .mysqli_error($connection);
            echo "false";
        }
   }   