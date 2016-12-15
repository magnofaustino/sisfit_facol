<?php
include "conexao.php";
?>
<html>
	<head>
		<title>Cadastro de Usuario</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_usuario.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Usuario</h4></div>
                <div class="panel-body">  
                <div class="input-group">
                    <span class="input-group-addon">Usuario:</span>
                    <input type="text" class="form-control" title="Preencha o campo Usuario" required name="nome_1">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Nome Completo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_2">
                </div><br>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Senha:</span>
                    <input type="password" class="form-control" title="Preencha o campo Senha" required name="nome_3">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Confirma Senha:</span>
                    <input type="password" class="form-control" title="Preencha o campo Confirma Senha" required name="nome_4"size="4">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></a></span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" title="Preencha o campo E-mail" required name="nome_5"size="26">
                </div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Nível de Acesso:</span>
                         <select class="form-control" required name="usuario">
                         <option value="">Selecione ...</option>
                         <option value="3">Gerente</option>
                         <option value="2">Personal</option>
                         <option value="1">Atendente</option>
                        <option value="0">Nenhum</option>
                        </select>
                      </div></div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Bloqueado:</span>
                         <select class="form-control" required name="block">
                         <option value="">Selecione ...</option>
                         <option value="S">Sim</option>
                         <option value="N">Não</option>
                       
                        </select>
                </div></div>
                </div></div>
                <br><br>
                    
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="usuarios.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>