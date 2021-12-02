
    <?php session_start(); 

    if(!empty($_SESSION['cargo_user'])){ 

        if ($_SESSION['cargo_user'] == "Coordenador"){
            include_once("./menuAcesso/menuAdm.php"); 
        } else if ($_SESSION['cargo_user'] == "Coordenador"){
            include_once("./menuAcesso/menuCoordenador.php"); 
        }else if ($_SESSION['cargo_user'] == "Professor"){
            include_once("./menuAcesso/menuProfessor.php"); 
        }else if ($_SESSION['cargo_user'] == "Auxiliar"){
            include_once('./erro.php');
            die();
        } ?>

            <div class="col-md-12">
                            <br>
                            <div style="margin-bottom: 2%;">
                                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-user" style="margin-right: 62.5%;">Adicionar Novo Aluno</a>
                            </div>
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Controle de Alunos</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Turma</th>
                                            <th>Nome Responsável</th>
                                            <th>Email Responsável</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody class="tableAluno">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<div class="modal fade" id="modal-aluno" style="margin-top: -400px; overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro Novo Aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body message-modal" style="color: black">
        <form>
            <div class="form-group nome-user-div">
                <label for="nome-user" class="col-form-label">Nome:</label>
                <input type="text" class="form-control nome-user" id="nome-user">
            </div>
            <div class="form-group date-nasc-div">  
                <label for="message-text" class="col-form-label">Data de Nascimento:</label>
                <input type="date" class="form-control date-nasc" id="message-text date-nasc"></input>
            </div>
            <div class="form-group date-ingresso-div">  
                <label for="message-text" class="col-form-label">Data Ingresso:</label>
                <input type="date" class="form-control date-ingresso" id="message-text date-ingresso"></input>
            </div>
            <div class="form-group genero-user-div">  
                <label for="message-text" class="col-form-label">Gênero:</label>
                <select type="date" class="form-control genero-user" id="message-text genero-user">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <div class="form-group turma-user-div">  
                <label for="message-text" class="col-form-label">Gênero:</label>
                <select type="date" class="form-control genero-user" id="message-text genero-user">
                    <option value="1B">teste</option>
                </select>
            </div>
            <div class="form-group file-user-div">  
                <label for="message-text" class="col-form-label">Foto:</label>
                <input type="file" class="form-control file-user" id="message-text file-user"></input>
            </div>
            <div class="form-group btn-add-document-div">  
                <label for="message-text" class="col-form-label">Documento:</label>
                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-document" style="margin-right: 62.5%;">Adicionar Documento</a>                
            </div>
            <div class="form-group btn-add-address-div">  
                <label for="message-text" class="col-form-label">Endereço:</label>
                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-address" style="margin-right: 62.5%;">Adicionar Endereço</a>                
            </div>
            <div class="form-group date-formacao-div">
                <label for="message-text" class="col-form-label">Medicamento:</label>
                <input type="text" class="form-control date-medicamento" id="message-text date-medicamento"></input>
            </div>
            <div class="form-group restricoes-div">
                <label for="message-text" class="col-form-label">Restrições alimentares:</label>
                <textarea type="textarea" class="form-control restricoes-user" id="message-text restricoes-user"></textarea>
            </div>
            <div class="form-group doencas-div">
                <label for="message-text" class="col-form-label">Doenças:</label>
                <textarea type="textarea" class="form-control doencas-user" id="message-text doencas-user"></textarea>
            </div>
            <div class="form-group tipo-sanguineo-div">  
                <label for="message-text" class="col-form-label">Tipo sanguíneo:</label>
                <select type="date" class="form-control tipo-sanguineo" id="message-text tipo-sanguineo">
                    <option value="a_positivo">A+</option>
                    <option value="a_negativo">A-</option>
                    <option value="b_positivo">B+</option>
                    <option value="b_negativo">B-</option>
                    <option value="ab_positivo">AB+</option>
                    <option value="ab_negativo">AB-</option>
                    <option value="o_positivo">O+</option>
                    <option value="o_negativo">O-</option>
                </select>
            </div>
            <div class="form-group senha-div">
                <label for="message-text" class="col-form-label">Senha:</label>
                <input type="text" class="form-control date-senha" id="message-text date-senha"></input>
            </div>
        </form>
        <br>
      </div>
      <div class="modal-footer">
          <br>
        <button type="button" class="btn btn-primary btn-fill btn-send-aluno" style="cursor: pointer;" data-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-document" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Novo Documento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body message-modal" style="color: black">
        <form>
            <div class="form-group descricao-document-div">
                <label for="descricao-document" class="col-form-label">Descrição:</label>
                <input type="text" class="form-control descricao-document" id="descricao-document">
            </div>
            <div class="form-group cpf-document-div">
                <label for="message-text" class="col-form-label">CPF:</label>
                <input type="number" class="form-control cpf-document" id="message-text cpf-document"></input>
            </div>
            <div class="form-group rg-document-div">  
                <label for="message-text" class="col-form-label">RG:</label>
                <input type="number" class="form-control rg-document" id="message-text rg-document"></input>
            </div>
        </form>
        <br>
      </div>
      <div class="modal-footer">
          <br>
        <button type="button" class="btn btn-primary btn-fill btn-document" style="cursor: pointer;">Salvar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-address" style="margin-top: -100px; overflow-y:auto; background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Novo Endereço</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body message-modal" style="color: black">
        <form>
             <div class="form-group estado-user-div">  
                <label for="message-text" class="col-form-label">Estado:</label>
                <select type="date" class="form-control estado-user" id="message-text estado-user">
                    <option value="sc">SC</option>
                    <option value="pr">PR</option>
                    <option value="rs">RS</option>
                </select>
            </div>
            <div class="form-group municipio-div">
                <label for="descricao-document" class="col-form-label">Município:</label>
                <input type="text" class="form-control municipio" id="municipio">
            </div>
            <div class="form-group bairro-div">
                <label for="message-text" class="col-form-label">Bairro:</label>
                <input type="text" class="form-control bairro" id="message-text bairro"></input>
            </div>
            <div class="form-group rua-div">  
                <label for="message-text" class="col-form-label">Rua:</label>
                <input type="text" class="form-control rua" id="message-text rua"></input>
            </div>
            <div class="form-group numero-div">  
                <label for="message-text" class="col-form-label">Número:</label>
                <input type="number" class="form-control numero-casa" id="message-text numero-casa"></input>
            </div>
            <div class="form-group complemento-div">  
                <label for="message-text" class="col-form-label">Complemento:</label>
                <input type="text" class="form-control complemento" id="message-text complemento"></input>
            </div>
        </form>
        <br>
      </div>
      <div class="modal-footer">
          <br>
        <button type="button" class="btn btn-primary btn-fill btn-address" style="cursor: pointer;">Salvar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-exclusao" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabe2l">Excluir Turma</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body message-modal" style="color: black">
                                    <form>
                                        <div class="form-group turma-document-div">
                                            <h5 class="modal-title" id="exampleModalLabe2l">Deseja realmente excluir essa aluno?</h5>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <br>
                                    <button type="button" class="btn btn-danger btn-fill btn-exclude" style="cursor: pointer;">Excluir</button>
                                </div>
                                </div>
                            </div>
                        </div>   


</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>

<script>   

    $( document ).ready(function() {
        reloadTable();
    });

    $( ".btn-add-user" ).click(function() {
        $('#modal-aluno').modal('show');
    });
    
    $( ".btn-add-turma").click(function() {
        //
    });

    $(".btn-add-document").click(function(){
        $('#modal-document').modal('show');
    })

    $(".btn-add-address").click(function(){
        $('#modal-address').modal('show');
    })

    $(".btn-document").click(function(){
        if($('.descricao-document').val() == "" || $('.cpf-document').val() == "" || $('.rg-document').val() == ""){
            alert("Digite os valores dos campos");  
        }
        
    })

    $( ".btn-send-aluno" ).click(function(event) {
        nome = $('.nome-user').val();
        data_nasc = $('.date-nasc').val();
        data_ingresso = $('.date-ingresso').val();
        file = $('.file-user').val();
        descricao = $('.descricao-document').val();
        cpf = $('.cpf-document').val();
        rg = $('.rg-document').val();
        medicamento = $('.date-medicamento').val();
        restricoes = $('.restricoes-user').val();
        doencas = $('.doencas-user').val();
        tipo_sang = $('.tipo-sanguineo').val();
        genero = $('.genero-user').val();
        estado = $('.estado-user').val();
        municipio = $('.municipio').val();
        bairro = $('.bairro').val();
        rua = $('.rua').val();
        numero_casa = $('.numero-casa').val();
        complemento =$('.complemento').val();
        msg = "";

        /*if(nome == ""){
            msg += "Nome";
        }
        if(email == ""){
           msg += " Email";
        }
        if(data_nasc == ""){
            msg += " Data nascimento";
        }
        if(data_ingresso == ""){
            msg += " Data ingresso";
        }
        if(file == ""){
            msg += " Foto";
        }
        if(observacao == ""){
            msg += " Observação";
        }
        if(descricao == ""){
            msg += " Descrição";
        }
        if(cpf == ""){
            msg += " CPF";
        }
        if(rg == ""){
            msg += " RG";
        }
        if(carga == ""){
            msg += " Carga";
        }
        if(formacao == ""){
            msg += " Formação";
        }
        if(restricoes == ""){
            msg += " Restrições alimentares";
        }
        if(doencas == ""){
            msg += " Doenças";
        }
        if(tipo_sang == ""){
            msg += " Tipo sanguíneo";
        }
        if(estado == ""){
            msg += " Estado";
        }
        if(municipio == ""){
            msg += " Município";
        }
        if(bairro == ""){
            msg += " Bairro";
        }
        if(rua == ""){
            msg += " Rua";
        }

        if(msg != ""){
            alert("Digite os campos de: "+ msg);
            event.preventDefault();
        }*/

        var data = new FormData();
            jQuery.each(jQuery('.file-user')[0].files, function(i, file) {
            data.append('file-'+i, file);
        });

        data.append('nome', nome);
        data.append('data_nasc', data_nasc);
        data.append('data_ingresso', data_ingresso);
        data.append('descricao', descricao);
        data.append('cpf', cpf);
        data.append('rg', rg);
        data.append('medicamento', medicamento);
        data.append('restricoes', restricoes);
        data.append('doencas', doencas);
        data.append('tipo_sang', tipo_sang);
        data.append('genero', genero);
        data.append('estado', estado);
        data.append('municipio', municipio);
        data.append('bairro', bairro);
        data.append('rua', rua);
        data.append('numero_casa', numero_casa);
        data.append('complemento', complemento);
        
        jQuery.ajax({
            url: 'backend/cadastro_alunos.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(data){
                if(data == "true"){
                    alert("Salvo com sucesso!")
                    reloadTable()
                }else if(data == "false"){
                    alert("Erro ao salvar aluno!")
                }
            }
        });
    })

    $(document).on('click','.btn-exclude-aluno', function(){
        $('.turma').val('');
        $('#modal-exclusao').modal('show');

        id = $(this).attr('data-id');
        $('.btn-exclude').attr('data-id', id);
    });

    $(document).on('click','.btn-exclude', function(){
        id = $(this).attr('data-id');
        $.ajax({
            url: 'backend/exclude_aluno.php',
            data: {id: id},
            method: 'POST',
            success: function(data){
                if(data == "true"){
                    alert("Excluído com sucesso!");
                    $('#modal-exclusao').modal('hide');
                    reloadTable()
                }else{
                    alert("Erro "+data);
                }
            }
        });
    });

    function reloadTable(){
        $.ajax({
            url: 'backend/select_alunos_table.php',
            data: {},
            method: 'POST',
            success: function(data){
                if(data != "null"){
                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length;
                    cols = "";
                    for(x = 0; x < cont; x++){
                        cols += "<tr><td>"+jq_json_obj[x]['cod']+"</td>"+
                        "<td>"+jq_json_obj[x][1]+"</td>" +
                        "<td>"+jq_json_obj[x]['descricao']+"</td>" +
                        "<td>"+jq_json_obj[x]['nome']+"</td>" +
                        "<td>"+jq_json_obj[x]['email']+"</td>" +
                        '<td><a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" id="btn-edit-aluno" style="margin-right: 10px;" class="btn btn-success btn-edit-turma"><i class="far fa-edit"></i></a>'+
                        '<a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" class="btn btn-danger btn-exclude-aluno"><i class="fas fa-times-circle"></i></a></td></tr>';
                    }
                    $('.tableAluno').html(cols);
                }else{

                }
            }
        });
    }
</script>

<?php } else{
    include_once('./erro.php');
}
