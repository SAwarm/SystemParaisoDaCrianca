<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Sistema Paraíso da Criança</title>
        <!-- Fonte w3 school-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Fonte Awesome icons (versão free)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- CSS-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!--Logo do menu-->
                <a class="navbar-brand js-scroll-trigger" href="#page-top"> <!--<img src="" alt="..." />--></a>
                <!--Menu fixo quando rola pra baixo-->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><!--Botão de menu tela p-->
                                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger active" href="#inicio">Inicio <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sobrenos">Sobre Nós</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#galeria">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cardapio">Cardápio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#entrar">Entrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Descrições foto -->
        <header class="masthead" id="inicio">
            <div class="container">
                <div class="masthead-subheading">Bem-Vindo ao CEI Paraíso da Criança</div>
                <div class="masthead-heading text-uppercase"> Cuidar, educar e amar! </div>
                <a class="btn btn-primary text-uppercase js-scroll-trigger" href="#sobrenos">Saiba mais</a>
            </div>
        </header>
        <!-- Sobre Nós -->
          <!--Imagem de fundo sobre nos-->
          <img src="assets\img\tccsobrenos.png" style="width: 100%; position: absolute;">
        
        <section class="page-section" id="sobrenos"  style="position: relative; padding-top:10rem;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre Nós</h2>
                    <h3 class="section-subheading text-uppercase">Centro Educacional Infantil Paraíso da Criança</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        <p class="text-muted" style="  text-align: justify;">O Centro de Educação Infantil Paraíso da Criança, <a href="#mapa" class="js-scroll-trigger" style="text-decoration: none; color: #276686"> localiza-se na comunidade do bairro Nova Brasília, na rua Máximo Rodrigues da Silva, Nº 620, no perímetro urbano de Sombrio, Santa Catarina</a>. O CEI foi inaugurado no ano de 2006 e atualmente atende 130 crianças do infantil IA (berçário) ao Infantil IV, sendo mantido pela Prefeitura Municipal de Sombrio. 
                        </br>
                        Quanto a origem do nome do CEI Paraíso da Criança, tem por finalidade propor uma educação do ensino infantil no período integral, garantindo a compreensão da totalidade dos educandos inseridos numa cultura determinada, através da mediação e instrumentalização de nossa prática pedagógica, isso porque é uma relação que prioriza o bem-estar e o crescimento da criança, produzindo o conhecimento e interagindo com o mundo. 
                        <br>
                        Porém, entendemos que há uma necessidade de parceria entre as partes envolvidas, família e CEI, para que ocorra uma aprendizagem mais significativa. O CEI é uma instituição que completa a família, e juntas tornam-se lugares agradáveis para a convivência dos alunos. Uma depende da outra na tentativa de alcançar maior êxito, qual seja o melhor futuro para o filho/educando e automaticamente para toda a sociedade. 
                        </br>
                        O CEI é um lugar privilegiado de autoria de pensamento, portanto, precisa desenvolver em seus alunos a capacidade de pensar de forma crítica, contribuindo para sua formação integral, física, emocional, cognitiva e social.   </p>
                    </div>
                    <div class="col-md-6" align="center;">
                        <img src="assets\img\logocreche.jpg" style="border-radius: .5rem;">
                    </div>
                </div>
            </div>
        </section>
                <!--Galeria-->
    <img src="assets\img\cimagaleria.png" style="width: 100%; position: absolute;">
    <section class="page-section bg-light" id="galeria" style="position: relative; padding-top: 20rem;">
           <div class="text-center">
            <h2 class="section-heading text-uppercase">Galeria</h2>
            <h3 class="section-subheading text-muted">Momentos íncriveis que se concretizaram!</h3>
        
        <div class="w3-content w3-container">
        <div class="row">
        
            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\picapau.png" onclick="onClick(this) "alt="<br>Desfile 7 de setembro, com toda a turma do Sitio do Picapau Amarelo!">               
            </div>
            </div>

            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\festajunina.png" onclick="onClick(this)"alt="<br>Iha é arraiá! E as meninas já estão pronta pra aproveitar São João!">               
            </div>
            </div>

            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\plantando.png" onclick="onClick(this)"alt="<br>Cuidando do planeta, para o planeta cuidar da gente!">               
            </div>
            </div>
        </div>
    
        <div class="row" style="padding-bottom: 4rem;">
        
            <div class="col-md-4">
           <div class="galeria_img">
                <img src="assets\img\natal.png" onclick="onClick(this) "alt="<br>Bate o sino pequenino, sino de Belém!
                <br> Festa da família.">               
            </div>
            </div>
            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\piscinab.png" onclick="onClick(this)"alt="<br>Que vontade de nadar nessa piscina!">
            </div>
            </div>
            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\bolinhas.png" onclick="onClick(this)"alt="<br>Integração entre turmas, brincando no pátio!">               
            </div>
            </div>
        </div>
        </div>
</div>
</div>
</section>
<!--
        <div class="galeria2 js-scroll-trigger" id="galeria2">
        <div class="row">
            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\brincando.png" onclick="onClick(this)"alt="<br><br>Oh meu deus que bagunça! haha">    
            </div>
            </div>
            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\gelatina.png" onclick="onClick(this) "alt="<br>Descobrindo texturas com o paladar e o tato.">               
            </div>
            </div> 
            <div class="col-md-4">
            <div class="galeria_img">
                <img src="assets\img\cesta.jpeg" onclick="onClick(this)"alt="<br>Arrecadação de alimentos para doação devido às pandemia!">               
            </div>
            </div>
        </div>

        </div>
    </div>

Paginas
  <div class="w3-center w3-padding-32" style="color: #276686;">
    <div class="w3-bar">
    <a href="#galeria" class="w3-bar-item w3-button w3-hover-grey js-scroll-trigger">«</a>
      <a href="#galeria" class="w3-bar-item w3-grey w3-button js-scroll-trigger">1</a>
     <a href="#galeria2" class="w3-bar-item w3-button w3-hover-grey js-scroll-trigger">2</a>
      <a href="#galeria2" class="w3-bar-item w3-button w3-hover-grey js-scroll-trigger">»</a>
    </div>
  </div>
-->
  <!--Modal-->
 <div id="modal01" class="w3-modal w3-black" style="padding-top:7rem;" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01">
      <p id="caption"></p>
    </div>
  </div>

        <!-- Cardápio -->
        <img src="assets\img\cardapiocima.png" style="width: 100%; position: absolute;">
        <section class="page-section" id="cardapio" style="position: relative; padding-top: 20rem;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cardápio</h2>
                    <h3 class="section-subheading text-muted">A melhor alimentação para seu filho</h3>
                </div>
<div class="w3-container" id="menu"> 
  <div class="w3-content" style="max-width: 1500px;">
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Infantil IB-IV');" id="myLink">
        <div class="w3-col s6 tablink">Infantil IB-IV</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Berçario');">
        <div class="w3-col s6 tablink">Berçário</div>
      </a>
    </div>

    <div id="Infantil IB-IV" class="w3-container menu w3-padding-48 w3-card">

        <img src="assets\img\cardapiotcc.png" alt="erro" align="center" style="width: 100%; padding: .3rem;">

    </div>

    <div id="Berçario" class="w3-container menu w3-padding-48 w3-card">

      <img src="assets\img\cardapiotcc2.png" alt="erro" align="center" style="width: 100%; padding: .3rem;">
</div>
</div>
        </section>
       <!--Fim do cardapio-->


        <!--Login & Contato-->
         <img src="assets\img\cimalogin.png" style="width: 100%">
    <section class="page-section" id="entrar">   
    <!--Tela login responsaveis--> 
      <div class="container1">
        <div class="first-content">
          <h4 style="color:#5b3491; text-align: center; ">Tenha acesso já à plataforma <br>de seu filho:</h4><br>
          <div id="responsavel" class="responsavel">
          <label for="matricula"><b>Matrícula</b></label>
          <input type="text" placeholder="Digite seu número de matrícula" name="matricula" class="input-matricula-responsavel" required>
          <label for="psw"><b>Senha</b></label>
          <input type="password" placeholder="Digite sua senha" name="psw" class="input-senha-responsavel" required> 
        <button  class="btn-colaborador" id="btn-responsavel" type="button" style="background-color:#5b3491; color:#cdb0f5;">Entrar</button>
         <span class="psw"><a align="center" style="color: black; cursor: pointer;" class="btn-responsavel-senha">Esqueceu sua senha?</a></span>
        </div>
        </div>

     <!--Tela login colaboradores-->   
     <div class="second-content" style="align-items: center;">
      <h4 style="color:#cdb0f5; text-align: center;">É COLABORADOR?</h4>
      <h5 style="color:#cdb0f5; text-align: center;">Entre clicando no botão abaixo</h5><br>
      <button class="btn-colaborador" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >COLABORADOR</button>   <br>
      <img src="assets\img\balaologin.png" align="right" style="width:90%; bottom: 0;">
    </div>
      <div id="id01" class="modal">
        <form class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Digite seu email" name="email_colaborador" class="input-email" required>
          <label for="cargo" style="font-weight: bold;"><br>Cargo<br> </label>
              <select name="cargo_colaborador" class="cargo" id="cargo_colaborador">
                <option>Coordenador(a)</option>
                <option>Professor(a)</option>
                <option>Auxiliar</option>
              </select>
          <label for="psw"><b>Senha</b></label>
          <input type="password" placeholder="Digite sua senha" name="senha_colaborador" class="input-senha" required> 
        <button  class="btn-colaborador" type="button" style="background-color:#5b3491; color:#cdb0f5;" id="btn-colaborador">Entrar</button>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="btn-colaborador">Cancelar</button>
          <span class="psw"><a style="color: black; cursor: pointer;" class="btn-colaborador-senha">Esqueceu sua senha?</a></span>
        </div>
        </form>
        </div>
        <!--Fim tela colaboradores-->
        </div>
      </div>
  </section> 

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body message-modal" style="color: black">
        
        <br>
      </div>
      <div class="modal-footer">
          <br>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_recuperar_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Para trocar de senha digite os campos abaixo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body message-modal" style="color: black">
            <form>
                <div class="form-group">
                    <label for="" class="col-form-label">Email:</label>
                    <input type="text" class="form-control email" id="email">
                </div>
                <div class="form-group">
                    <label for="" class="col-form-label">Cpf:</label>
                    <input type="text" class="form-control cpf" id="cpf">
                </div>
                <div class="form-group">
                    <label for="" class="col-form-label">Nova senha:</label>
                    <input type="password" class="form-control nova_senha" id="nova_senha">
                </div>
            </form>
        <br>
      </div>
      <div class="modal-footer">
          <br>
          <button type="button" class="btn btn-primary btn-fill btn-troca-senha" style="cursor: pointer;">Trocar Senha</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
        <!--Fim Login Aluno-->  
        <!-- Footer-->

        <div  id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d435.7561974727319!2d-49.6449511!3d-29.1042176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95223c4eada59c23%3A0xd24b39d5b8e254bc!2sR.%20M%C3%A1ximo%20Rodrigues%20da%20Silva%2C%20232%20-%20Nova%20Bras%C3%ADlia%2C%20Sombrio%20-%20SC%2C%2088960-000!5e0!3m2!1spt-BR!2sbr!4v1618181812162!5m2!1spt-BR!2sbr" href="#mapa" width="100%" height="300" frameborder="0" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <footer class="footer">
            <a href="#inicio" class="js-scroll-trigger w3-button w3-light-grey" style="border-radius: 2rem; text-decoration: none;"><i class="fa fa-arrow-up w3-margin-right"></i>Inicio</a>
                 <p> <h2 style="font-family: sans-serif; padding-top: 0.5rem; font-size: 30px;">Contatos</h2>
                  <h3 style="font-family: sans-serif; font-size: 16px; font-weight: normal;">Siga-nos nas redes sociais</h3></p>
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <!--contatos-->
                    <p>
                        <!-- target="_blank" abre em outra página o link-->
                        <a target="_blank" href="https://www.facebook.com/Para%C3%ADso-da-Crian%C3%A7a-1103045449716919" style="text-decoration: none;">
                                <button class="btn btn-outline-secondary" style="border-radius: 0.20rem; color: #fff; background-color: #3B5998;"><i class="fab fa-facebook"></i> Facebook</button>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/cei.paraisodacrianca/" style="padding-left: 0.10rem; text-decoration: none;">
                                <button class="btn btn-outline-secondary" style="border-radius: 0.20rem; color: #fff; background-color: #3F729B;  "><i class="fab fa-instagram"></i>  Instagram </button>
                        </a>
                    </p>
                </div>            </div>
            <p style="font-family: arial; color: white; font-weight: bold; bottom: -250px; font-size: 13px; position: relative;" class="text-center">Desenvolvido por <br>Diogo de Borba Oliveira & Maria Eduarda de Souza Stuart<br>IFC Campus Avançado Sombrio, 2021</p> 
         </footer>
         <!-- Fim footer-->
        <script>
            /*Modal Imagem Galeria*/
        function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
        }
        /*Tabela Cardápio*/
        function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-teal", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-teal";
        }
        document.getElementById("myLink").click();

        // O modal
        var modal = document.getElementById('id01');

        // Clique fora =  o modal fecha
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
        </script>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Terceiro party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Core tema JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<script>

    $( "#btn-colaborador" ).click(function() {
        email = $('.input-email').val();
        senha = $('.input-senha').val();
        cargo = $('#cargo_colaborador').val();

        if (email == "" || senha == "" || cargo == ""){
            $(".message-modal").html("Digite algo nos campos de email senha!");
            $("#exampleModal").modal("show");
        }else{
                $.ajax({
                method: "POST",
                url: "backend/login_users.php",
                data: { email: email, senha: senha, cargo: cargo },
                beforeSend : function(){
                    
                }
            })
            .done(function(msg){
                if(msg != "Erro no login ou senha"){
                    $(".message-modal").html("Usuário logado com sucesso!");
                    $("#exampleModal").modal("show");
                    setTimeout(() => { location.replace('./admin/telas/perfil_usuario.php');  }, 2000);
                }else{
                    $(".message-modal").html(msg);
                    $("#exampleModal").modal("show");
                }
            })
            .fail(function(jqXHR, textStatus, msg){
                $(".message-modal").html("Erro no login! Verifique o erro com a administração do sistema.");
                $("#exampleModal").modal("show");
            });
        }
    });

    acao = "";
    $('.btn-troca-senha').click(function(){
        email = $('.email').val();
        cpf = $('.cpf').val();
        senha = $('.nova_senha').val();

        if(email != "" && cpf != "" && senha != ""){
            $.ajax({
                url: 'backend/trocar_senha.php',
                data: {acao: acao, email: email, cpf: cpf, senha: senha},
                method: 'POST',
                success: function(data){
                    if(data == "true"){
                        $('.email').val('');
                        $('.cpf').val('');
                        $('.nova_senha').val('');
                        alert("Senha alterada com sucesso");
                    }else{
                        alert("Digite o seu email e CPF corretos!");
                    }
                }
            });
        }else{
            alert("Digite todos os campos");
        }
    });

    $('.btn-responsavel-senha').click(function(){
        $('.email').val('');
        $('.cpf').val('');
        $('.nova_senha').val('');
        $('#modal_recuperar_senha').modal('show');
        acao = "responsavel";
    });

    $('.btn-colaborador-senha').click(function(){
        $('.email').val('');
        $('.cpf').val('');
        $('.nova_senha').val('');
        $('#modal_recuperar_senha').modal('show');
        acao = "colaborador";
    });

    $( "#btn-responsavel" ).click(function() {
        matricula = $('.input-matricula-responsavel').val();
        senha = $('.input-senha-responsavel').val();

        if (matricula == "" || senha == ""){
            $(".message-modal").html("Digite algo nos campos de email senha!");
            $("#exampleModal").modal("show");
        }else{
                $.ajax({
                    method: "POST",
                    url: "backend/login_users.php",
                    data: { matricula: matricula, senha: senha},
                    beforeSend : function(){
                        // depois do envio
                    }
            })
            .done(function(msg){
                if(msg != "Erro no login ou senha"){
                    $(".message-modal").html("Usuário logado com sucesso!");
                    $("#exampleModal").modal("show");
                    setTimeout(() => { location.replace('./admin/telas/perfil_usuario.php');  }, 2000);
                }else{
                    $(".message-modal").html(msg);
                    $("#exampleModal").modal("show");
                }
            })
            .fail(function(jqXHR, textStatus, msg){
                $(".message-modal").html("Erro no login! Verifique o erro com a administração do sistema.");
                $("#exampleModal").modal("show");
            });
        }
    });


</script>
