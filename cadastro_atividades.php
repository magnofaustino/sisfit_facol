<?php

/* 
 * Cadastro de Atividades - Sandro Braz
 */

include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		
            <h2></h2><br><br>
	    
            <div class="panel panel-primary">
            <div class="panel-heading"><h4>Cadastro de Atividades</h4></div>
            <div class="panel-body">
            
            <form action="processa_atividades.php" method="GET" >
            <fieldset>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Atividade:</span>
                    <input type="text" class="form-control" name="atividade">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" name="valor">
                    <span class="input-group-addon">R$</span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Inicio:</span>
                    <input type="date" class="form-control" name="dtini">
                    <span class="input-group-addon">01/01/2016</span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Fim:</span>
                    <input type="date" class="form-control" name="dtfim">
                    <span class="input-group-addon">01/01/2016</span>
                </div>
                </div>
                </div><br>
                
                <div class="input-group">
                    <div class="well">É uma Atividade Temporaria?:
                        <label class="radio-inline">
                        <input type="radio" name="atvtemp" value="N">Não
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="atvtemp" value="S">Sim
                        </label>
                    </div>
                </div><br><br>
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
            </fieldset>
            </form>
            </div>
            </div>
        </body>
</html>