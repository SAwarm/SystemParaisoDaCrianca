<?php include_once("./menuAcesso/menuAuxiliar.php"); ?>

                  
                        <div class="col-md-12">
                            <br>
                            <div style="margin-bottom: 2%;">
                                <a type="button" href="#" class="btn btn-primary btn-fill btn-add-user" style="margin-right: 62.5%;">Adicionar Novo Usuário</a>
                                    <select class="form-group" style="height: 50%;
                                        padding: 8px 20px;
                                        margin: 6px 0;
                                        display: inline-block;
                                        border: 1px solid #ccc;
                                        box-sizing: border-box;">
                                        <option>Coordenador(a)</option>
                                        <option>Professor(a)</option>
                                        <option>Auxiliar</option>
                                        <option>Responsáveis</option>
                                    </select>
                                <a type="button" href="#" class="btn btn-primary btn-filter">Filtrar</a>
                            </div>
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Striped Table with Hover</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                            <th>City</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<div class="modal fade" id="modal-users" style="margin-top: -300px; overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <select type="date" class="form-control function-user" id="message-text function-user">
                    <option value="Coordenador(a)">Coordenador(a)</option>
                    <option value="Professor(a)">Professor(a)</option>
                    <option value="Auxiliar">Auxiliar</option>
                    <option value="Responsável">Responsável</option>
                </select>
            </div>
            <div class="form-group date-email-div">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="date" class="form-control date-email" id="message-text date-email"></input>
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
                <label for="message-text" class="col-form-label">Gênero</label>
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
        </form>
        <br>
      </div>
      <div class="modal-footer">
          <br>
        <button type="button" class="btn btn-primary btn-fill btn-send-users" style="cursor: pointer;" data-dismiss="modal">Enviar</button>
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
                <input type="date" class="form-control cpf-document" id="message-text cpf-document"></input>
            </div>
            <div class="form-group rg-document-div">  
                <label for="message-text" class="col-form-label">RG:</label>
                <input type="date" class="form-control rg-document" id="message-text rg-document"></input>
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

    $(window).resize(function () {
        $("#modal-document").niceScroll();
        if($( document ).width() >= 950 ){
            $('.nav-mobile-menu').hide();
        }else{
            $('.nav-mobile-menu').show();
        }
    })

    $( ".btn-add-user" ).click(function() {
        $('#modal-users').modal('show');
    });

    $( ".btn-filter" ).click(function() {
        
    })

    $( ".btn-send-users" ).click(function() {
        
    })

    $(".btn-add-document").click(function(){
        $('#modal-document').modal('show');
    })

    $(".btn-document").click(function(){
        if($('.descricao-document').val() == "" || $('.cpf-document').val() == "" || $('.rg-document').val() == ""){
            alert("Digite os valores dos campos");  
        }
        
    })

</script>