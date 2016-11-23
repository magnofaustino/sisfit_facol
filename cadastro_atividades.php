<?php


include "conexao.php";


?>
<html>
	<head>
		<title>Cadastro de Atividades</title>
		<meta charset="UTF-8"></meta>
    

	</head>
        <body>
            
                
            <div class="container">
            <div class="row">
    
           <form  action="processa_atividades.php"  method="GET">     
                
                
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Atividades</h4></div>
                <div class="panel-body">
		<div class="form-inline">
                
                
               <div class="input-group">
                    <span class="input-group-addon">Modalidades:</span>
                  
                   <input id="nome" type=text class="form-control" title="Preencha o campo Nome" required name="atividade"/> 
                      </div>

                <div class="input-group">
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="valor">
                    <span class="input-group-addon">R$</span>
                </div></div><br>
                
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                
                    <span class="input-group-addon">Duracao da aula:</span>
                    <input type="time" class="form-control" title="Preencha o campo Nome" required name="duracao_aula">
                    
                </div>
                    <div class="input-group">
                    <span class="input-group-addon">Atividade Temporaria:</span>
                        <label class="form-control">
                            <input type="radio" name="atvtemp" value="N">Não
                            <input type="radio" name="atvtemp" value="S"> Sim 
                        </label> 
                    </div>
                </div><br>    
                    </div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Inicio:</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="dtini">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Fim:</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="dtfim">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="atividades.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>