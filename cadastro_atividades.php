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
		<h2>Cadastro de Atividades</h2><br><br>
		<form action="processa_atividades.php" method="GET" >
            <fieldset>
		<div class="input-group">
                    <span class="input-group-addon">Atividade:</span>
                    <input type="text" class="form-control" name="atividade">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" name="valor">
                    <span class="input-group-addon">R$</span>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Data de Inicio:</span>
                    <input type="date" class="form-control" name="dtini">
                    <span class="input-group-addon">01/01/2016</span>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Data de Fim:</span>
                    <input type="date" class="form-control" name="dtfim">
                    <span class="input-group-addon">01/01/2016</span>
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon">É uma Atividade Temporaria?:</span>
                  <p><p></p></p>
                  <label class="radio-inline">
                    <input type="radio" name="optradio" name="atvtemp">Não
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio" name="atvtemp">Sim
                  </label>
                </div><br><br>
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
            </fieldset>
        </form>
        
        
        
		 
	</body>
</html>