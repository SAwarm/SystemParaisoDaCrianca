
        <?php session_start(); 

        if(!empty($_SESSION['cargo_user'])){ 

        if ($_SESSION['cargo_user'] == "Coordenador"){
            include_once("./menuAcesso/menuAdm.php"); 
        } else if ($_SESSION['cargo_user'] == "Coordenador"){
            include_once("./menuAcesso/menuCoordenador.php"); 
        }else if ($_SESSION['cargo_user'] == "Professor"){
            include_once("./menuAcesso/menuProfessor.php"); 
        }else if ($_SESSION['cargo_user'] == "Responsável"){
            include_once('./menuAcesso/menuResponsavel.php');
        } else if ($_SESSION['cargo_user'] == "Auxiliar"){
            include_once('./erro.php');
            die();
        } ?>
           <div class="col-md-12">
                            <br>
                            <div style="margin-bottom: 2%;">
                                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-nota" style="margin-right: 62.5%;">Adicionar Nova Avaliação</a>
                            </div>
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Controle das Avaliações</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Id</th>
                                            <th>Nome Aluno</th>
                                            <th>Avaliação</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody class="tableNotas">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-notas" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Nova Avaliação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body message-modal" style="color: black">
                                    <form>
                                        <div class="form-group descricao-document-div">
                                            <label for="message-text" class="col-form-label">Aluno:</label>
                                            <input type="number" class="form-control aluno-cod" id="message-text aluno-cod"></input>                 
                                        </div>
                                        <div class="form-group descricao-document-div">
                                            <label for="descricao-document" class="col-form-label">Avaliação:</label>
                                            <textarea type="text" class="form-control descricao-avaliacao" id="descricao-avaliacao"></textarea>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <br>
                                    <button type="button" class="btn btn-primary btn-fill btn-add-new-nota" style="cursor: pointer;">Adicionar</button>
                                </div>
                                </div>
                            </div>
                        </div>    

                        <div class="modal fade" id="modal-exclusao" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLab">Excluir Avaliação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body message-modal" style="color: black">
                                    <form>
                                        <div class="form-group turma-document-div">
                                            <h5 class="modal-title" id="exampleModalLabe2l">Deseja realmente excluir essa avaliação?</h5>
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

    $(document).on('click','#btn-edit-nota', function(){
        id = $(this).attr('data-id');
        $('#exampleModalLabe2l').html('Editando Avaliação');
        $('.btn-add-new-nota').attr('data-id', id);
        $.ajax({
            url: 'backend/select_nota_edit.php',
            data: {id: id},
            method: 'POST',
            success: function(data){
                jq_json_obj = $.parseJSON(data);
                $('#modal-notas').modal('show');
                $('.aluno-cod').val(jq_json_obj[0]['cod']);
                $('.descricao-avaliacao').val(jq_json_obj[0]['nota']);
            }
        });
    });

    $( ".btn-add-nota" ).click(function() {
        $('#modal-notas').modal('show');
        $('#exampleModalLabe2l').html('Inserindo Avaliação');
        $('.aluno-cod').val('');
        $('.descricao-avaliacao').val('');
        $('.btn-add-new-nota').attr('data-id', '');
    });

    $('.btn-add-new-nota').click(function(){

        
        id = $(this).attr('data-id');

        if(id != ""){
            id_aluno = $('.aluno-cod').val();
            avaliacao = $('.descricao-avaliacao').val();
            $.ajax({
                url: 'backend/update_avaliacao.php',
                data: {id_aluno: id_aluno, avaliacao: avaliacao, id: id},
                method: 'POST',
                success: function(data){
                    if(data == "true"){
                        alert('Registro alterado com sucesso!');
                        $('#modal-notas').modal('hide');
                        reloadTable()
                    }else{
                        alert("Erro ao alterar registro"+data);
                    }
                }
            });
        }else{
            id_aluno = $('.aluno-cod').val();
            avaliacao = $('.descricao-avaliacao').val();
            $.ajax({
                url: 'backend/cadastro_avaliacao.php',
                data: {id_aluno: id_aluno, avaliacao: avaliacao},
                method: 'POST',
                success: function(data){
                    if(data == "true"){
                        alert('Salvo com sucesso!');
                        $('#modal-notas').modal('hide');
                        reloadTable()
                    }else{
                        alert("Erro "+data);
                    }
                }
            });
        }
    })

    $(document).on('click','.btn-exclude-nota', function(){
        $('.turma').val('');
        $('#modal-exclusao').modal('show');

        id = $(this).attr('data-id');
        $('.btn-exclude').attr('data-id', id);
    });

    $(document).on('click','.btn-exclude', function(){
        id = $(this).attr('data-id');
        $.ajax({
            url: 'backend/exclude_nota.php',
            data: {id: id},
            method: 'POST',
            success: function(data){
                alert(data)
                $('#modal-exclusao').modal('hide');
                reloadTable();
            }
        });
    });

    function reloadTable(){
        $.ajax({
            url: 'backend/select_notas_table.php',
            data: {},
            method: 'POST',
            success: function(data){
                if(data != "null"){
                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length;
                    cols = "";
                    for(x = 0; x < cont; x++){
                        cols += "<tr><td>"+jq_json_obj[x]['cod']+"</td>"+
                        "<td>"+jq_json_obj[x]['nome']+"</td>" +
                        "<td>"+jq_json_obj[x]['nota']+"</td>" +
                        '<td><a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" id="btn-edit-nota" style="margin-right: 10px;" class="btn btn-success btn-edit-nota"><i class="far fa-edit"></i></a>'+
                        '<a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" class="btn btn-danger btn-exclude-nota"><i class="fas fa-times-circle"></i></a></td></tr>';
                    }
                    $('.tableNotas').html(cols);
                }else{

                }
            }
        });
    }
</script>

<?php } else{
    include_once('./erro.php');
}
