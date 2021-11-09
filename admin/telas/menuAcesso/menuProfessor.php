<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sistema Administrativo - Paraíso da Criança</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
           
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        Administrativo
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="./perfil_usuario.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Perfil do Usuário</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./notas.php">
                            <i class="nc-icon nc-ruler-pencil"></i>
                            <p>Avaliação</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./alunos.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Alunos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./turmas.php">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Turmas</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <button href="" class="navbar-toggler" style="margin-left: 90%;" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Pesquisar</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="./backend/logout.php">
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>