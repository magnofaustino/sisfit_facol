<?php
include "conexao.php";
?>
<html>
	<head>
		<title>Aniversariantes do Mês</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
            <div class="container">
            <div class="row">
                <form  action="relatorio_aniversariantes.php"  method="GET">      
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Aniversariantes do Mês</h4></div>
                <div class="panel-body">
                <div class="form-inline">
                <div class="form-group">
                    
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Mês do Aniversário</span>
                         <select class="form-control" name="mes">
                         <option value="">Selecione</option>
                         <option value="01">Janeiro</option>
                         <option value="02">Fevereiro</option>
                         <option value="03">Março</option>
                         <option value="04">Abril</option>
                         <option value="05">Maio</option>
                         <option value="06">Junho</option>
                         <option value="07">Julho</option>
                         <option value="08">Agosto</option>
                         <option value="09">Setembro</option>
                         <option value="10">Outubro</option>
                         <option value="11">Novembro</option>
                         <option value="12">Dezembro</option>
                        </select>
                      </div></div>
                </div></div><br>
                
                
                <button type="submit"  class="btn btn-default">Enviar</button>
                <button type="reset" class="btn btn-default">Limpar</button>

                
                </div></div></div>
            </fieldset>
            </form>
        </div>
        </body>
</html>