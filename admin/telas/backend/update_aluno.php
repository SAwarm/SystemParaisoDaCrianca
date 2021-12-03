<?php

    require_once('./connection.php');

    $id_aluno = $_POST['id_aluno'];
    $id_doctos = $_POST['id_doctos'];
    $id_endereco = $_POST['id_endereco'];
    $id_restalimentar = $_POST['id_restalimentar'];
    $id_doencas = $_POST['id_doencas'];

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
    $turma = 1;
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

    $new_name = "";
    if(isset($_FILES['file-0']))
    {
        $ext = strtolower(substr($_FILES['file-0']['name'],-4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $dir = './imagens/'; //Diretório para uploads 
        move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        //echo("Imagen enviada com sucesso!");
    }

    if($new_name != ""){

        $sqlUpdate = "UPDATE aluno SET nome='$nome', datanasc='$data_nasc', datadeingresso='$data_ingresso',
        medicamento='$medicamento', foto='$new_name', genero='$genero', tipo_sang='$tipo_sang' WHERE cod='$id_aluno'";

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

                        if (mysqli_query($connection, $sqlUpdate)) {
                            
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
        $sqlUpdate = "UPDATE aluno SET nome='$nome', datanasc='$data_nasc', datadeingresso='$data_ingresso',
        medicamento='$medicamento', genero='$genero', tipo_sang='$tipo_sang' WHERE cod='$id_aluno'";

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

                        if (mysqli_query($connection, $sqlUpdate)) {
                            
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