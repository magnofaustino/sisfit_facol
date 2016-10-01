<?php
include "menu.php";
?>
<html>
	<head>
		<title>CADASTRO FUNCIONARIO</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Funcionário</h1>
		<form action="processa_funcionario.php" method="GET" >
             <fieldset>
		Nome:<input  type="text" name="nome"><br><br>
        CPF:<input  type="text" name="cpf"><br><br>
        RG:<input  type="text" name="rg"><br><br>
        Telefone:<input type="telefone" name="telefone"><br><br>
                 
                 
        
            
         <input type="submit" name="sub" value="Cadastrar">
            </fieldset>
        </form>
        
        
        
		 
	</body>
</html>