<?php
include "conexao.php";
?>
<html>
	<head>
		<title>Relátorio do Contas a Pagar</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
            <div class="container">
            <div class="row">
                <form  action="relatorio_contas_a_pagar.php"  method="GET">      
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Relátorio do Contas a Pagar</h4></div>
                <div class="panel-body">
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data Inicial:</span>
                    <input type="date" class="form-control" title="Preencha o Campo Data" required name="dtini">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data Final:</span>
                    <input type="date" class="form-control" title="Preencha o Campo Data" required name="dtfim">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>                      
                <div class="input-group">
                         <span class="input-group-addon">Situação</span>
                         <select class="form-control" name="sit">
                         <option value="N">A pagar</option>
                         <option value="S">Pagos</option>
                         <option value="A">Ambos</option>
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