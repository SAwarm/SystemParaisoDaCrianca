
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
                                    <h4 class="card-title">Editar Perfil</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Cod</label>
                                                    <input type="text" class="form-control" placeholder="Cod" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" class="form-control" placeholder="Nome" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Município</label>
                                                    <input type="text" class="form-control" placeholder="Município" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" placeholder="Bairro" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Rua</label>
                                                    <input type="text" class="form-control" placeholder="Rua">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="number" class="form-control" placeholder="Número" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Complemento</label>
                                                    <input type="text" class="form-control" placeholder="Complemento" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Carga Horária</label>
                                                    <input type="text" class="form-control" placeholder="Carga Horária">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data Ingresso</label>
                                                    <input type="date" class="form-control" placeholder="Data-Ingresso" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 ">
                                                <div class="form-group">
                                                    <label>Data Nascimento</label>
                                                    <input type="date" class="form-control" placeholder="Data-Nascimento" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Formação</label>
                                                    <input type="text" class="form-control" placeholder="Formação">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>RG</label>
                                                    <input type="text" class="form-control" placeholder="RG" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="text" class="form-control" placeholder="CPF" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Tipo Sanguíneo</label>
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
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Doenças pré-definidas</label>
                                                    <textarea style="height: 100px;" rows="4" cols="80" class="form-control" placeholder="Observação" value="">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Restrições alimentares</label>
                                                    <textarea style="height: 100px;" rows="4" cols="80" class="form-control" placeholder="Observação" value="">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Observação</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Trocar Foto: </label>
                                                    <input type="file"> 
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                            <h5 class="title text-primary" >Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
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
<?php } else{
    include_once('./erro.php');
}