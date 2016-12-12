<?php
include "conexao.php";
?>
<html>
	<head>
		<title>Relátorio de Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
            <div class="container">
            <div class="row">
                <form  action="relatorio_atividades.php"  method="GET">      
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Relátorio de Atividades</h4></div>
                <div class="panel-body">
                <div class="form-inline">
                <div class="form-group">
                    <div><h5>Atividades Iniciando Entre as Datas</h5></div>
                <div class="input-group">
                    <span class="input-group-addon">Da Data:</span>
                    <input type="date" class="form-control" title="Preencha o Campo Data" required name="dtini">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ate a Data:</span>
                    <input type="date" class="form-control" title="Preencha o Campo Data" required name="dtfim">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>                      
                <div class="input-group">
                         <span class="input-group-addon">Atividade Temporaria?</span>
                         <select class="form-control" name="atividade">
                         <option value="N">Não</option>
                         <option value="S">Sim</option>
                         <option value="A">Ambas</option>
                        </select>
                </div>
                </div></div><br><br>
                
                <button type="submit"  class="btn btn-default">Enviar</button>
                <button type="reset" class="btn btn-default">Limpar</button>

                
                </div></div></div>
            </fieldset>
            </form>
        </div>
        </body>
</html>