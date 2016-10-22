<?php

include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Plano</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Plano</h1>
		<form action="processa_atividades.php" method="GET" >
           
            <fieldset>
		Nome do Plano:<input  type="text" name="nome_plano"><br><br>
        Observações do Plano<input  type="text" name="obs_plano"><br><br>
                
               atividades do plano:  
		<select name="atividade_plano">
		<option value="N">atividade "a"</option>
        <option value="S">atividade "b"
            
            </option></select><br><br>
                
                   tipo do plano:  
		<select name="tipo_plano">
		<option value="N">familiar</option>
        <option value="S">individual
            
            </option></select><br><br>
         <input type="submit" name="sub" value="Cadastrar">
            </fieldset>
        </form>
        
        
        
		 
	</body>
</html>