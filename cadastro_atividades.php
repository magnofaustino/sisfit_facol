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
		<h1>Cadastro de Atividades</h1>
		<form action="processa_atividades.php" method="GET" >
            <fieldset>
		Atividade:<input  type="text" name="atividade"><br><br>
                Valor:<input  type="text" name="valor"><br><br>
                
                É uma Atividade Temporaria?:  
		<select name="atvtemp">
		<option value="N">Não</option>
                <option value="S">Sim</option></select><br><br>
                Data de Inicio:<input type="date" name="dtini"><br><br>
                Data de Fim:<input type="date" name="dtfim"><br><br>
         <input type="submit" name="sub" value="Cadastrar">
            </fieldset>
        </form>
        
        
        
		 
	</body>
</html>