<?php
include "menu.php";
?>

<html>
	<head>
		<title>CADASTRO DE FORCEDEDDOR</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Fornecedor</h1>
		<form action="processa_fornecedor.php" method="GET" >
        
                    
            	Razão Social:<input  type="text" name="razao"><br><br>
                Nome Fantasia:<input  type="text" name="nomefantasia"><br><br>
                Tipo: <select name="Nome">
		<option value="1">Juridico</option>
		<option value="2">Fisico</option></select><br><br>
                CPF ou CNPJ:<input  type="text" name="cpf_cnpj"><br><br>
                Telefone:<input  type="text" name="telefone"><br><br>
            	E-mail:<input  type="text" name="email"><br><br>
                Endereço:<input  type="text" name="endereco"><br><br>
                Bairro:<input  type="text" name="bairro"><br><br>
            	Municipio:<input  type="text" name="municipio"><br><br>
                Numero:<input  type="text" name="numero"><br><br>
                Cep:<input  type="text" name="cep"><br><br>
            
            <fieldset>
                 Responsável pelo Atendimento:  
		<select name="Nome">
		<option value="1">Atendente</option>
		<option value="2">Produto</option></select><br><br>       
    <input type="submit" name="sub" value="Cadastrar!">
            </fieldset>
        </form>	 
	</body>
</html>