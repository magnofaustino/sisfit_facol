<?php
include "inicial.php";
?>

<html>
	<head>
		<title>CADASTRO DE FORCEDEDDOR</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Fornecedor</h1>
		<form action="processa_fornecedor.php" method="GET" >
             
            	Nome:<input  type="text" name="nome_fornecedor"><br><br>
                 CPF ou CNPJ:<input  type="text" name="cpf"><br><br>
        //     telefone:<input  type="text" name="telefone"><br><br>
            
            
            <fieldset>
                 	Responsável pelo Atendimento:  
		<select name="Nome">
		<option value="1">Atendente</option>
		<option value="2">Poduto</option>
		
		
            </select><br><br>  
        CPF ou CNPJ:<input  type="text" name="cpf"><br><br>
		
            
		
            
          
            
    <input type="submit" name="sub" value="Cadastrar!">
            </fieldset>
        </form>
     
        
        
        
		 
	</body>
</html>