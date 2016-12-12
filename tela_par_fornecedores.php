<?php
include "conexao.php";
?>
<html>
	<head>
		<title>Relátorio de Fornecedores</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
            <div class="container">
            <div class="row">
                <form  action="relatorio_fornecedor.php"  method="GET">      
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Relátorio de Fornecedores</h4></div>
                <div class="panel-body">
                <div class="form-inline">
                <div class="form-group">                      
                <div class="input-group">
                         <span class="input-group-addon">Tipo do Fornecedor</span>
                         <select class="form-control" name="tipo">
                         <option value="A">Ambos</option>
                         <option value="J">Juridico</option>
                         <option value="F">Fisica</option>
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