<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="imagens/faviconsisfit.ico">
    <title>Menu Sisfit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/grid.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <!-- MENU SUPERIOR -->
    
    
    <div class="navbar navbar-default navbar-fixed-top" role="navigation"> 
            <div class="navbar-header">
        <a class="brand" href="#">
            <img src="imagens/logomenu.png" alt="">
        </a></div>
        <div class="container"> 
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>Nome Usuario</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Nome do Usuario</strong></p>
                                        <p class="text-left small">Sisfit@sisfit.com.br</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Atualizar dados do usuario</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Sair</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div><br><br><br>
    
    
    
    
    <!-- MENU LATERAL -->
    
    
    
    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
            <span class="sr-only">Menu de navegação</span>
            <span class="icon-bar"></span>

          </button>      
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Dashboards<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="aluno.php">Alunos</a></li>
                <li class="divider"></li>
                <li ><a href="fornecedores.php">Fornecedores<span style="font-size:16px;"></span></a></li>        
                <li class="divider"></li>
                <li ><a href="funcionario.php">Funcionarios<span style="font-size:16px;"></span></a></li>        
                <li class="divider"></li>
                <li ><a href="personal.php">Personal<span style="font-size:16px;"></span></a></li>        
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academia<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li ><a href="atividades.php">Atividades<span style="font-size:16px;"></span></a></li>        
                <li class="divider"></li>
                <li ><a href="planos.php">Planos<span style="font-size:16px;"></span></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financeiro<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-usd"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li ><a href="pagamentos.php">Contas a pagar<span style="font-size:16px;" class=""></span></a></li>       
                <li class="divider"></li>
                <li ><a href="receber.php">Contas a Receber<span style="font-size:16px;"></span></a></li>                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatórios<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-usd"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="relatorio_aluno.php">Relatório de Alunos</a></li>                     
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Miscelania<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li ><a href="produto.php">Produtos<span style="font-size:16px;"></span></a></li>                            
              </ul>
            </li>
            
            
            
            
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                  <li><a href="cadastro_empresa.php">Cadastro da Empresa</a></li>
                <li class="divider"></li>
                <li><a href="usuarios.php">Cadastro de Usuarios</a></li>
                <li class="divider"></li>
                <li><a href="#">Build</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>

</html>
