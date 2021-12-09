
            <?php session_start(); 

            if(!empty($_SESSION['cargo_user'])){ 

            if ($_SESSION['cargo_user'] == "Coordenador"){
                include_once("./menuAcesso/menuAdm.php"); 
            } else if ($_SESSION['cargo_user'] == "Coordenador"){
                include_once("./menuAcesso/menuCoordenador.php"); 
            }else if ($_SESSION['cargo_user'] == "Professor"){
                include_once('./erro.php');
                die();
            }else if ($_SESSION['cargo_user'] == "Auxiliar"){
                include_once('./erro.php');
                die();
            } ?>                  
                        <div class="col-md-12">
                            <br>
                            <div style="margin-bottom: 2%;">
                                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-user" style="margin-right: 68.5%;">Adicionar Novo Usuário</a>
                                    <select class="form-group function-user" style="height: 50%;
                                        padding: 8px 20px;
                                        margin: 6px 0;
                                        display: inline-block;
                                        border: 1px solid #ccc;
                                        box-sizing: border-box;">
                                        <option>Coordenador(a)</option>
                                        <option>Professor(a)</option>
                                        <option>Auxiliar</option>
                                        <option>Responsável</option>
                                    </select>
                                <!-- <a type="button" href="#" class="btn btn-primary btn-filter">Filtrar</a> -->
                            </div>
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Controle dos Usuários</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Função</th>
                                            <th>Email</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody class="tableUsuarios">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<div class="modal fade" id="modal-users" style="margin-top: -450px; overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro Novo Usuário</h5>
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
            <div class="form-group function-user-div">  
                <label for="message-text" class="col-form-label">Função</label>
                <select type="date" class="form-control function-user-modal" id="message-text function-user">
                    <option value="Coordenador(a)">Coordenador(a)</option>
                    <option value="Professor(a)">Professor(a)</option>
                    <option value="Auxiliar">Auxiliar</option>
                    <option value="Responsável">Responsável</option>
                </select>
            </div>
            <div class="form-group date-email-div">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="text" class="form-control date-email" id="message-text date-email"></input>
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
            <div class="form-group file-user-div">  
                <label for="message-text" class="col-form-label">Foto:</label>
                <input type="file" class="form-control file-user" id="message-text file-user"></input>
            </div>
            <div class="form-group observation-user-div">  
                <label for="message-text" class="col-form-label">Observação:</label>
                <textarea type="textarea" class="form-control observation-user" id="message-text observation-user"></textarea>
            </div>
            <div class="form-group btn-add-document-div">  
                <label for="message-text" class="col-form-label">Documento:</label>
                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-document" style="margin-right: 62.5%;">Adicionar Documento</a>                
            </div>
            <div class="form-group btn-add-address-div">  
                <label for="message-text" class="col-form-label">Endereço:</label>
                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-address" style="margin-right: 62.5%;">Adicionar Endereço</a>                
            </div>
            <div class="form-group date-carga-div">
                <label for="message-text" class="col-form-label">Carga em horas:</label>
                <input type="number" class="form-control date-carga" id="message-text date-carga"></input>
            </div>
            <div class="form-group date-formacao-div">
                <label for="message-text" class="col-form-label">Formação:</label>
                <input type="text" class="form-control date-formacao" id="message-text date-formacao"></input>
            </div>
            <div class="form-group restricoes-div">
                <label for="message-text" class="col-form-label">Restrições alimentares:</label>
                <textarea type="textarea" class="form-control restricoes-user" id="message-text restricoes-user"></textarea>
            </div>
            <div class="form-group doencas-div">
                <label for="message-text" class="col-form-label">Doenças:</label>
                <textarea type="textarea" class="form-control doencas-user" id="message-text doencas-user"></textarea>
            </div>
            <div class="form-group senha-div">
                <label for="message-text" class="col-form-label">Senha:</label>
                <input type="text" class="form-control senha" id="message-text senha"></input>
            </div>
            <div class="form-group cod-aluno-div">
                <label for="message-text" class="col-form-label">Código do aluno:</label>
                <input type="text" class="form-control cod-aluno" id="message-text cod-aluno"></input>
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
        </form>
        <br>
      </div>
      <div class="modal-footer">
          <br>
        <button type="button" class="btn btn-primary btn-fill btn-send-users" data-id="" style="cursor: pointer;" data-dismiss="modal">Enviar</button>
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
                    <option value="SC">SC</option>
                    <option value="PR">PR</option>
                    <option value="PR">RS</option>
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
            <h5 class="modal-title" id="exampleModalLabe2l">Excluir Usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body message-modal" style="color: black">
            <form>
                <div class="form-group turma-document-div">
                    <h5 class="modal-title" id="exampleModalLabe2l">Deseja realmente excluir essa usuário?</h5>
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

<?php } else{
    include_once('./erro.php');
}?>

<script>

    $(document).ready(function() {
        //$('.senha-div').hide();
        $('.cod-aluno-div').hide();
        reloadTable()
    });

    $( ".function-user" ).change(function() {
        //
    });

    $(window).resize(function () {
        if($( document ).width() >= 950 ){
            $('.nav-mobile-menu').hide();
        }else{
            $('.nav-mobile-menu').show();
        }
    })

    $( ".btn-add-user" ).click(function() {
        $('#modal-users').modal('show');
        $('#exampleModalLabel').html('Inserindo Usuário');
        $('.btn-send-users').attr('data-id', '');
        clean();
    });

    $( ".btn-filter" ).click(function() {
        
    })

    doctos = "";
    endereco = "";
    restAlim = "";
    doenc = "";
    formacaoFunc = "";
    cargah = "";

    $(document).on('click','#btn-edit-user', function(){
        id = $(this).attr('data-id');
        funcao = $('.function-user').val();
        //$('.btn-send-aluno').attr('data-id', id);
        $.ajax({
            url: 'backend/select_funcionario_edit.php',
            data: {id: id, funcao: funcao},
            method: 'POST',
            success: function(data){
                jq_json_obj = $.parseJSON(data);
                $('#modal-users').modal('show');
                
                $('.nome-user').val(jq_json_obj[0][1]);
                $('.senha').val(jq_json_obj[0]['senha']);
                $('.date-email').val(jq_json_obj[0]['email']);
                $('.date-nasc').val(jq_json_obj[0]['datanasc']);
                $('.date-ingresso').val(jq_json_obj[0]['datadeingresso']);
                //$('.file-user').val();
                $('.observation-user').val(jq_json_obj[0]['obs']);
                $('.descricao-document').val(jq_json_obj[0][18]);
                $('.cpf-document').val(jq_json_obj[0]['CPF']);
                $('.rg-document').val(jq_json_obj[0]['RG']);
                $('.date-carga').val(jq_json_obj[0][29]);
                $('.date-formacao').val(jq_json_obj[0][31]);
                $('.restricoes-user').val(jq_json_obj[0][33]);
                $('.doencas-user').val(jq_json_obj[0][35]);
                $('.cod-aluno').val(jq_json_obj[0]['cod_aluno']);

                if(jq_json_obj[0]['tipo_sang'] == 1){
                    $('.tipo-sanguineo').val('a_positivo');

                }else if(jq_json_obj[0]['tipo_sang'] == 2){
                    $('.tipo-sanguineo').val('a_negativo');

                }else if(jq_json_obj[0]['tipo_sang'] == 3){
                    $('.tipo-sanguineo').val('b_positivo');

                }else if(jq_json_obj[0]['tipo_sang'] == 4){
                    $('.tipo-sanguineo').val('b_negativo');

                }else if(jq_json_obj[0]['tipo_sang'] == 5){
                    $('.tipo-sanguineo').val('ab_positivo');

                }else if(jq_json_obj[0]['tipo_sang'] == 6){
                    $('.tipo-sanguineo').val('ab_negativo');

                }else if(jq_json_obj[0]['tipo_sang'] == 7){
                    $('.tipo-sanguineo').val('o_positivo');

                }else if(jq_json_obj[0]['tipo_sang'] == 8){
                    $('.tipo-sanguineo').val('o_negativo');

                }

                if(jq_json_obj[0]['genero'] == "1"){
                    $('.genero-user').val("Masculino");
                }else if(jq_json_obj[0]['genero'] == "2"){
                    $('.genero-user').val("Feminino");
                }else{
                    $('.genero-user').val("Outros");
                }

                $('.function-user-modal').val(funcao);
                $('.estado-user').val(jq_json_obj[0]['estado']);
                $('.municipio').val(jq_json_obj[0]['municipio']);
                $('.bairro').val(jq_json_obj[0]['bairro']);
                $('.rua').val(jq_json_obj[0]['rua']);
                $('.numero-casa').val(jq_json_obj[0]['numero']);
                $('.complemento').val(jq_json_obj[0]['complemento']);

                $('#exampleModalLabel').html('Editando Usuário');
                $('.btn-send-users').attr('data-id', id)

                doctos = jq_json_obj[0]['doctos'];
                endereco = jq_json_obj[0]['endereco'];
                restAlim = jq_json_obj[0]['restalimentar'];
                doenc = jq_json_obj[0]['doencaspre'];
                formacaoFunc =  jq_json_obj[0]['formacao'];
                cargah = jq_json_obj[0]['cargah'];

            }
        });
    });

    $(document).on('click','.btn-send-users', function(event){
        nome = $('.nome-user').val();
        senha = $('.senha').val();
        email = $('.date-email').val();
        data_nasc = $('.date-nasc').val();
        data_ingresso = $('.date-ingresso').val();
        file = $('.file-user').val();
        observacao = $('.observation-user').val();
        descricao = $('.descricao-document').val();
        cpf = $('.cpf-document').val();
        rg = $('.rg-document').val();
        carga = $('.date-carga').val();
        formacao = $('.date-formacao').val();
        restricoes = $('.restricoes-user').val();
        doencas = $('.doencas-user').val();
        tipo_sang = $('.tipo-sanguineo').val();
        funcao = $('.function-user-modal').val();
        genero = $('.genero-user').val();
        estado = $('.estado-user').val();
        municipio = $('.municipio').val();
        bairro = $('.bairro').val();
        rua = $('.rua').val();
        numero_casa = $('.numero-casa').val();
        complemento =$('.complemento').val();
        cod_aluno = $('.cod-aluno').val();
        msg = "";

        if($('.function-user').val() == "Responsável"){
            if(nome == ""){
            msg += "Nome";
            }
            if(senha == ""){
                msg += " Senha";
            }
            if(email == ""){
            msg += " Email";
            }
            if(data_nasc == ""){
                msg += " Data nascimento";
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
        }else{
            if(nome == ""){
            msg += "Nome";
            }
            if(senha == ""){
                msg += " Senha";
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
        }

        if(msg != ""){
            alert("Digite os campos de: "+ msg);
            event.preventDefault();
        }
        var data = new FormData();
        data.append('nome', nome);
        data.append('senha', senha);
        data.append('email', email);
        data.append('data_nasc', data_nasc);
        data.append('data_ingresso', data_ingresso);
        data.append('observacao', observacao);
        data.append('descricao', descricao);
        data.append('cpf', cpf);
        data.append('rg', rg);
        data.append('carga', carga);
        data.append('formacao', formacao);
        data.append('restricoes', restricoes);
        data.append('doencas', doencas);
        data.append('tipo_sang', tipo_sang);
        data.append('funcao', funcao);
        data.append('genero', genero);
        data.append('estado', estado);
        data.append('municipio', municipio);
        data.append('bairro', bairro);
        data.append('rua', rua);
        data.append('numero_casa', numero_casa);
        data.append('complemento', complemento);
        data.append('id_aluno', cod_aluno);
        data.append('id_user', $(this).attr('data-id'))
        data.append('id_doctos', doctos);
        data.append('id_endereco', endereco);
        data.append('id_doencas', doenc);
        data.append('id_restalimentar', restAlim);
        data.append('id_cargah', cargah);
        data.append('id_formacao', formacaoFunc);

        if($(this).attr('data-id') != "" && msg == ""){

            jQuery.each(jQuery('.file-user')[0].files, function(i, file) {
                data.append('file-'+i, file);
            });

            jQuery.ajax({
                url: 'backend/update_funcionario.php',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                success: function(data){
                    if(data == "true"){
                        reloadTable()
                        alert("Registro alterado com sucesso!");
                    }else{
                        reloadTable()
                        alert("Erro ao alterar registro! "+data);
                    }
                }
            });

        }else if(msg == ""){
            jQuery.each(jQuery('.file-user')[0].files, function(i, file) {
                data.append('file-'+i, file);
            });


            jQuery.ajax({
                url: 'backend/cadastro_funcionario.php',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                success: function(data){
                    if(data == "true"){
                        reloadTable()
                        alert("Salvo com sucesso!");
                    }else if(data == "false"){
                        reloadTable()
                        alert("Erro ao salvar registro!");
                    }
                }
            });
        }
    })

    $(document).on('click','.btn-exclude-user', function(){
        $('#modal-exclusao').modal('show');

        id = $(this).attr('data-id');
        $('.btn-exclude').attr('data-id', id);
    });

    $(document).on('click','.btn-exclude', function(){
        id = $(this).attr('data-id');
        funcao = $('.function-user').val();
        $.ajax({
            url: 'backend/exclude_funcionario.php',
            data: {id: id, funcao: funcao},
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

    $('.function-user').change(function() {
        reloadTable();
        if($(this).val() == "Responsável"){
            $('.date-ingresso-div').hide();
            $('.doencas-div').hide();
            $('.restricoes-div').hide();
            $('.date-carga-div').hide();
            $('.date-formacao-div').hide();
            $('.observation-user-div').hide();
            $('.cod-aluno-div').show();
        }else{
            $('.cod-aluno-div').hide();
            $('.date-ingresso-div').show();
            $('.doencas-div').show();
            $('.restricoes-div').show();
            $('.date-carga-div').show();
            $('.date-formacao-div').show();
            $('.observation-user-div').show();
        }
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
        }else{
            $('#modal-document').modal('hide');
            $("#modal-aluno").css({"overflow":"auto"});
        }
    })

    $(".btn-address").click(function(){
        estado = $('.estado-user').val();
        municipio = $('.municipio').val();
        bairro = $('.bairro').val();
        rua = $('.rua').val();
        numero_casa = $('.numero-casa').val();
        complemento =$('.complemento').val();
        if(estado == "" || municipio == "" || bairro == "" || rua == "" || numero_casa == "" || complemento == ""){
            alert("Digite os valores dos campos");  
        }else{
            $('#modal-address').modal('hide');
            $("#modal-aluno").css({"overflow":"auto"});
        }
    })

    function reloadTable(){
        func = $('.function-user').val();
        $.ajax({
            url: 'backend/select_controle_usuarios.php',
            data: {func: func},
            method: 'POST',
            success: function(data){
                if(data != "null"){
                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length;
                    cols = "";
                    for(x = 0; x < cont; x++){
                        if(jq_json_obj[x][37] == undefined){
                            jq_json_obj[x][37] = "Responsável";
                        }
                        cols += "<tr><td>"+jq_json_obj[x][0]+"</td>"+
                        "<td>"+jq_json_obj[x]['nome']+"</td>" +
                        "<td>"+jq_json_obj[x][37]+"</td>" +
                        "<td>"+jq_json_obj[x]['email']+"</td>" +
                        '<td><a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" id="btn-edit-user" style="margin-right: 10px;" class="btn btn-success btn-edit-user"><i class="far fa-edit"></i></a>'+
                        '<a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" class="btn btn-danger btn-exclude-user"><i class="fas fa-times-circle"></i></a></td></tr>';
                    }
                    $('.tableUsuarios').html(cols);
                }else{
                    $('.tableUsuarios').html("");
                }
            }
        });
    }

    function clean(){
        $('.nome-user').val('');
        $('.senha').val('');
        $('.date-email').val('');
        $('.date-nasc').val('');
        $('.date-ingresso').val('');
        $('.file-user').val('');
        $('.observation-user').val('');
        $('.descricao-document').val('');
        $('.cpf-document').val('');
        $('.rg-document').val('');
        $('.date-carga').val('');
        $('.date-formacao').val('');
        $('.restricoes-user').val('');
        $('.doencas-user').val('');
        $('.tipo-sanguineo').val('a_positivo');
        $('.function-user-modal').val('Coordenador(a)');
        $('.genero-user').val('Masculino');
        $('.estado-user').val('SC');
        $('.municipio').val('');
        $('.bairro').val('');
        $('.rua').val('');
        $('.numero-casa').val('');
        $('.complemento').val('');
        $('.cod-aluno').val('');
    }

</script>