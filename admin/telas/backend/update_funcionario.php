<?php
    require_once('./connection.php');

    $id_doctos = $_POST['id_doctos'];
    $id_endereco = $_POST['id_endereco'];
    $id_restalimentar = $_POST['id_restalimentar'];
    $id_doencas = $_POST['id_doencas'];
    $id_formacao = $_POST['id_formacao'];
    $id_carga = $_POST['id_cargah'];
    $id_user = $_POST['id_user'];
    $id_aluno = $_POST['id_aluno'];
    $id_funcao = 0;

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
        $id_funcao = 2;
    }else if($funcao == "Professor(a)"){
        $id_funcao = 3;
    }else if($funcao == "Auxiliar"){
        $id_funcao = 1;
    }else if($funcao == "Responsável"){
        $id_funcao = 4;
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

    $new_name = "";
    if(isset($_FILES['file-0']))
    {
        $ext = strtolower(substr($_FILES['file-0']['name'],-4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $dir = './imagens/'; //Diretório para uploads 
        move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        //echo("Imagen enviada com sucesso!");
    }

    if($id_funcao == 4){
        if($new_name != ""){

            $sqlUpdate = "UPDATE responsavel SET nome='$nome', email='$email', datanasc='$data_nasc',
            cod_aluno='$id_aluno', foto='$new_name', genero='$genero', senha='$senha' where responsavel.cod = '$id_user'";
    
            if (mysqli_query($connection, $sqlUpdate)) {
                //echo "Registro atualizado com sucesso!";
                $sqlUpdate = "UPDATE doctos SET descricao='$descricao', cpf='$cpf', rg='$rg' WHERE cod='$id_doctos'";
    
                if (mysqli_query($connection, $sqlUpdate)) {
                    $sqlUpdate = "UPDATE endereco SET estado='$estado', municipio='$municipio', bairro='$bairro',
                    rua='$rua', numero='$numero_casa', complemento='$complemento' WHERE cod='$id_endereco'";

                    if (mysqli_query($connection, $sqlUpdate)) {
                        echo "true";
                    }else{
                        echo "Erro de atualização do registro: " . mysqli_error($connection);
                    }
                }else{
                    echo "Erro de atualização do registro: " . mysqli_error($connection);
                }
            } else {
                echo "Erro de atualização do registro: " . mysqli_error($connection);
            }
        }else{
            $sqlUpdate = "UPDATE responsavel SET nome='$nome', email='$email', datanasc='$data_nasc',
            cod_aluno='$id_aluno', genero='$genero', senha='$senha' where responsavel.cod = '$id_user'";
    
            if (mysqli_query($connection, $sqlUpdate)) {
                //echo "Registro atualizado com sucesso!";
                $sqlUpdate = "UPDATE doctos SET descricao='$descricao', cpf='$cpf', rg='$rg' WHERE cod='$id_doctos'";
    
                if (mysqli_query($connection, $sqlUpdate)) {
                    $sqlUpdate = "UPDATE endereco SET estado='$estado', municipio='$municipio', bairro='$bairro',
                    rua='$rua', numero='$numero_casa', complemento='$complemento' WHERE cod='$id_endereco'";

                    if (mysqli_query($connection, $sqlUpdate)) {
                        echo "true";
                    }else{
                        echo "Erro de atualização do registro: " . mysqli_error($connection);
                    }
                }else{
                    echo "Erro de atualização do registro: " . mysqli_error($connection);
                }
            } else {
                echo "Erro de atualização do registro: " . mysqli_error($connection);
            }
        }
    }else{
        if($new_name != ""){

            $sqlUpdate = "UPDATE funcionario SET nome='$nome', email='$email', datanasc='$data_nasc', datadeingresso='$data_ingresso',
            foto='$new_name', obs='$observacao', genero='$genero', funcao='$id_funcao', tipo_sang='$tipo_sang', senha='$senha' where funcionario.cod = '$id_user'";
    
            if (mysqli_query($connection, $sqlUpdate)) {
                //echo "Registro atualizado com sucesso!";
                $sqlUpdate = "UPDATE doctos SET descricao='$descricao', cpf='$cpf', rg='$rg' WHERE cod='$id_doctos'";
    
                if (mysqli_query($connection, $sqlUpdate)) {
                    $sqlUpdate = "UPDATE endereco SET estado='$estado', municipio='$municipio', bairro='$bairro',
                    rua='$rua', numero='$numero_casa', complemento='$complemento' WHERE cod='$id_endereco'";
    
                    if (mysqli_query($connection, $sqlUpdate)) {
                        $sqlUpdate = "UPDATE restalimentar SET descricao='$restricoes' WHERE cod='$id_restalimentar'";
    
                        if (mysqli_query($connection, $sqlUpdate)) {
                            $sqlUpdate = "UPDATE doencaspre SET descricao='$doencas' WHERE cod='$id_doencas'";

                            if(mysqli_query($connection, $sqlUpdate)){
                                $sqlUpdate = "UPDATE cargah SET descricao='$carga' WHERE cod='$id_carga'";

                                if(mysqli_query($connection, $sqlUpdate)){
                                    $sqlUpdate = "UPDATE formacao SET descricao='$formacao' WHERE cod='$id_formacao'";

                                    if(mysqli_query($connection, $sqlUpdate)){
                                        echo "true";
                                    }else{
                                        echo "Erro de atualização do registro: " . mysqli_error($connection);
                                    }
                                }else{
                                    echo "Erro de atualização do registro: " . mysqli_error($connection);
                                }
                            }else{
                                echo "Erro de atualização do registro: " . mysqli_error($connection);
                            }
                        }else{
                            echo "Erro de atualização do registro: " . mysqli_error($connection);
                        }
                    }else{
                        echo "Erro de atualização do registro: " . mysqli_error($connection);
                    }
                }else{
                    echo "Erro de atualização do registro: " . mysqli_error($connection);
                }
            } else {
                echo "Erro de atualização do registro: " . mysqli_error($connection);
            }
        }else{
            $sqlUpdate = "UPDATE funcionario SET nome='$nome', email='$email', datanasc='$data_nasc', datadeingresso='$data_ingresso',
            obs='$observacao', genero='$genero', tipo_sang='$tipo_sang', funcao='$id_funcao', senha='$senha' where funcionario.cod = '$id_user'";
    
            if (mysqli_query($connection, $sqlUpdate)) {
                //echo "Registro atualizado com sucesso!";
                $sqlUpdate = "UPDATE doctos SET descricao='$descricao', cpf='$cpf', rg='$rg' WHERE cod='$id_doctos'";
    
                if (mysqli_query($connection, $sqlUpdate)) {
                    $sqlUpdate = "UPDATE endereco SET estado='$estado', municipio='$municipio', bairro='$bairro',
                    rua='$rua', numero='$numero_casa', complemento='$complemento' WHERE cod='$id_endereco'";
    
                    if (mysqli_query($connection, $sqlUpdate)) {
                        $sqlUpdate = "UPDATE restalimentar SET descricao='$restricoes' WHERE cod='$id_restalimentar'";
    
                        if (mysqli_query($connection, $sqlUpdate)) {
                            $sqlUpdate = "UPDATE doencaspre SET descricao='$doencas' WHERE cod='$id_doencas'";
    
                            if(mysqli_query($connection, $sqlUpdate)){
                                $sqlUpdate = "UPDATE cargah SET descricao='$carga' WHERE cod='$id_carga'";

                                if(mysqli_query($connection, $sqlUpdate)){
                                    $sqlUpdate = "UPDATE formacao SET descricao='$formacao' WHERE cod='$id_formacao'";

                                    if(mysqli_query($connection, $sqlUpdate)){
                                        echo "true";
                                    }else{
                                        echo "Erro de atualização do registro: " . mysqli_error($connection);
                                    }
                                }else{
                                    echo "Erro de atualização do registro: " . mysqli_error($connection);
                                }
                            }else{
                                echo "Erro de atualização do registro: " . mysqli_error($connection);
                            }
                        }else{
                            echo "Erro de atualização do registro: " . mysqli_error($connection);
                        }
                    }else{
                        echo "Erro de atualização do registro: " . mysqli_error($connection);
                    }
                }else{
                    echo "Erro de atualização do registro: " . mysqli_error($connection);
                }
            } else {
                echo "Erro de atualização do registro: " . mysqli_error($connection);
            }
        }
    }
    