<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Menu Sisfit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/menu.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
            <span class="sr-only">Menu de navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>      
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aluno<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="cadastro_aluno.php">Cadastro de aluno</a></li>
                <li class="divider"></li>
                <li><a href="#">Relatório de Alunos</a></li>
                <li class="divider"></li>
                <li><a href="#">Informes</a></li>
              </ul>
            </li>
            <li ><a href="cadastro_fornecedor.php">Fornecedores<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>        
            <li ><a href="cadastro_funcionario.php">Funcionarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>        
            <li ><a href="cadastro_atividades.php">Atividades<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
            <li ><a href="cadastro_pagamentos.php">Contas a pagar<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
            <li ><a href="cadastro_plano.php">Planos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </body>

</html>
