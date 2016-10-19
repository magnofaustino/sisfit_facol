
<?php
include "menu.php";
?>
<html>
	<head>
		<title>CADASTRO ALUNO</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Aluno</h1>
		<form action="processa_aluno.php" method="GET" >
             <fieldset>
		Nome:<input  type="text" name="nome"><br><br>
            
		      CPF:<input  type="text" name="cpf"><br><br>
                 
                 Altura:<input  type="text" name="curso"><br><br>
                 
                 
        
            
        	Sexo:  
		<select name="sexo">
		<option value="1">MASCULINO</option>
		<option value="2">FEMININO</option>
		
		
            </select><br><br>    
            
    <input type="submit" name="sub" value="Enviar!">
            </fieldset>
        </form>
     
        		 
	</body>
</html>


