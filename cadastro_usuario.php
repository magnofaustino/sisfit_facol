<?php
include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Usuario</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_usuario.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Usuario</h4></div>
                <div class="panel-body">  
                <div class="input-group">
                    <span class="input-group-addon">Usuario:</span>
                    <input type="text" class="form-control" name="usuario">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Nome Completo:</span>
                    <input type="text" class="form-control" name="nome">
                </div><br>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Senha:</span>
                    <input type="password" class="form-control" name="senha">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Confirma Senha:</span>
                    <input type="password" class="form-control" name="contrasenha">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></a></span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                         <div class="well well-sm">Bloqueado:
                         <select class="form-control" name="fornecedor">
                         <option value="">Selecione ...</option>
                         <option value="S">Sim</option>
                         <option value="N">Não</option>
                        </select>
                </div></div>
                </div></div><br><br>
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="usuario.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>