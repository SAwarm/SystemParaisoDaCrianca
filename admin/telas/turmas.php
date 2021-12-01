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
                                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-user" style="margin-right: 62.5%;">Adicionar Nova Turma</a>
                            </div>
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Controle das Turmas</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Id</th>
                                            <th>Turma</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody id="popularTurmas">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-turmas" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Nova Turma</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body message-modal" style="color: black">
                                    <form>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Turma:</label>
                                            <input type="text" class="form-control turma" id="turma">
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <br>
                                    <button type="button" class="btn btn-primary btn-fill btn-add-turma" style="cursor: pointer;">Adicionar</button>
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
                                            <h5 class="modal-title" id="exampleModalLabe2l">Deseja realmente excluir essa turma?</h5>
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

<script>    
    $( ".btn-add-user" ).click(function() {
        $('#modal-turmas').modal('show');
        $('.btn-add-turma').html('Adicionar');
        $('#exampleModalLabe2l').html('Cadastro Nova Turma');
    });

    $( document ).ready(function() {
        popularTableTurmas();
    });
    
    $( ".btn-add-turma").click(function(e) {
        turma = $('.turma').val();
        
        if($('.btn-add-turma').html() == "Salvar"){
            id = $(this).attr('data-id');
            $.ajax({
                url: 'backend/update_turma.php',
                data: {id: id, turma: turma},
                method: 'POST',
                success: function(data){
                    alert(data);
                    $('#modal-turmas').modal('hide');
                    $('.turma').val('');
                    popularTableTurmas();
                }
            });
        }else{
            $.ajax({
                url: 'backend/cadastro_turma.php',
                data: {turma: turma},
                method: 'POST',
                success: function(data){
                    alert(data);
                    $('#modal-turmas').modal('hide');
                    $('.turma').val('');
                    popularTableTurmas();
                }
            });
        }
    });

    $(document).on('click','.btn-edit-turma', function(){
        $('.turma').val('');
        id = $(this).attr('data-id');
        $('.btn-add-turma').attr('data-id', id);
        $.ajax({
            url: 'backend/select_turma.php',
            data: {edit: true, id: id},
            method: 'POST',
            success: function(data){
                jq_json_obj = $.parseJSON(data);
                $('#modal-turmas').modal('show');
                $('.turma').val(jq_json_obj[0][1]);
                $('.btn-add-turma').html('Salvar');
                $('#exampleModalLabe2l').html('Editando Turma');
            }
        });
    });

    $(document).on('click','.btn-exclude-turma', function(){
        $('.turma').val('');
        $('#modal-exclusao').modal('show');

        id = $(this).attr('data-id');
        $('.btn-exclude').attr('data-id', id);
    });

    $(document).on('click','.btn-exclude', function(){
        id = $(this).attr('data-id');
        $.ajax({
            url: 'backend/exclude_turma.php',
            data: {id: id},
            method: 'POST',
            success: function(data){
                alert(data)
                $('#modal-exclusao').modal('hide');
                popularTableTurmas();
            }
        });
    });

    function popularTableTurmas(){
        $.ajax({
            url: 'backend/select_turma.php',
            method: 'POST',
            success: function(data){
                cols = "";
                 if(data != "null"){

                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length
                    for (x = 0; x < cont; x++){
                        cols += '<tr><td scope="row">'+jq_json_obj[x][0]+'</td>';
                        cols += '<td>'+jq_json_obj[x][1]+'</td>';
                        cols += '<td><a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" id="btn-edit-turma" style="margin-right: 10px;" class="btn btn-success btn-edit-turma"><i class="far fa-edit"></i></a>'+
                                    '<a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" class="btn btn-danger btn-exclude-turma"><i class="fas fa-times-circle"></i></a></td></tr>';
                        $("#popularTurmas").html(cols);
                    }
                 }else{
                     alert("erro");
                 }
            }
        });
    }

</script>

<?php } else{
    include_once('./erro.php');
}