
<?php session_start(); 

    if(!empty($_SESSION['cargo_user'])){ 

    if ($_SESSION['cargo_user'] == "Coordenador"){
        include_once("./menuAcesso/menuAdm.php"); 
    } else if ($_SESSION['cargo_user'] == "Coordenador"){
        include_once("./menuAcesso/menuCoordenador.php"); 
    }else if ($_SESSION['cargo_user'] == "Professor"){
        include_once("./menuAcesso/menuProfessor.php");
    }else if ($_SESSION['cargo_user'] == "Auxiliar"){
        include_once("./menuAcesso/menuAuxiliar.php"); 
    } ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Informações do Perfil</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Cod</label>
                                                    <input type="text" class="form-control" placeholder="Cod" value="" id='cod'>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" id='email'>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" class="form-control" placeholder="Nome" value="" id='nome'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Município</label>
                                                    <input type="text" class="form-control" placeholder="Município" value="" id='municipio'>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" placeholder="Bairro" value="" id='bairro'>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Rua</label>
                                                    <input type="text" class="form-control" placeholder="Rua" id='rua'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="number" class="form-control" placeholder="Número" value="" id='numero'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Complemento</label>
                                                    <input type="text" class="form-control" placeholder="Complemento" value="" id='complemento'>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Carga Horária</label>
                                                    <input type="text" class="form-control" placeholder="Carga Horária" id='carga'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data Ingresso</label>
                                                    <input type="date" class="form-control" placeholder="Data-Ingresso" value="" id='data_ingresso'>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ">
                                                <div class="form-group">
                                                    <label>Data Nascimento</label>
                                                    <input type="date" class="form-control" placeholder="Data-Nascimento" value="" id='data_nascimento'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Formação</label>
                                                    <input type="text" class="form-control" placeholder="Formação" id='formacao'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>RG</label>
                                                    <input type="text" class="form-control" placeholder="RG" value="" id="rg">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="text" class="form-control" placeholder="CPF" value="" id="cpf">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Tipo Sanguíneo</label>
                                                    <select type="date" class="form-control tipo-sanguineo" id="message-text tipo-sanguineo" id="tipo_sangue">
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
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Doenças pré-definidas</label>
                                                    <textarea style="height: 100px;" rows="4" cols="80" class="form-control" placeholder="Doenças" value="" id="doencas"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Restrições alimentares</label>
                                                    <textarea style="height: 100px;" rows="4" cols="80" class="form-control" placeholder="Restrições" value="" id="restricoes"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Observação</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Observação" value="Mike" id="observacao"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <!-- <label>Trocar Foto: </label>
                                                    <input type="file">  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary btn-fill pull-right btn-atualizar-info">Atualizar Informações</button>
                                        <div class="clearfix"></div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray img-user" src="" alt="...">
                                            <h5 class="title text-primary name-user" ></h5>
                                        </a>
                                    </div>
                                    <p class="description text-center obs">
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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
        infoPerfil();
    });

    $( ".btn-atualizar-info" ).click(function() {
        
    });

    function infoPerfil(){
        $.ajax({
            url: 'backend/atualizar_perfil.php',
            method: 'POST',
            success: function(data){
                console.log(data)
                jq_json_obj = $.parseJSON(data);
                cont = jq_json_obj.length;
                $('#cod').val(jq_json_obj[0][0]);
                $('#email').val(jq_json_obj[0][2]);
                $('#nome').val(jq_json_obj[0][1]);
                $('#municipio').val(jq_json_obj[0]['municipio']);
                $('#bairro').val(jq_json_obj[0]['bairro']);
                $('#rua').val(jq_json_obj[0]['rua']);
                $('#numero').val(jq_json_obj[0]['numero']);
                $('#complemento').val(jq_json_obj[0]['complemento']);
                $('#carga').val(jq_json_obj[0][29]);
                $('#data_ingresso').val(jq_json_obj[0]['datadeingresso']);
                $('#data_nascimento').val(jq_json_obj[0]['datanasc']);
                $('#formacao').val(jq_json_obj[0][31]);
                $('#rg').val(jq_json_obj[0]['RG']);
                $('#cpf').val(jq_json_obj[0]['CPF']);

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

                $('#doencas').val(jq_json_obj[0][35]);
                $('#restricoes').val(jq_json_obj[0][33]);
                $('#observacao').val(jq_json_obj[0]['obs']);

                $('.img-user').attr('src', './backend/imagens/'+jq_json_obj[0]['foto'])
                //$('#carga').val(jq_json_obj[0][0])
                $('.name-user').html(jq_json_obj[0][1]);
                $('.obs').html(jq_json_obj[0]['obs'])
                
            }
        });
    }
</script>

<?php } else{
    include_once('./erro.php');
}