
<?php
include "menu.php";
?>
<html>
	<head>
		<title>CADASTRO FORNECEDOR</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de fornecedor</h1>
		<form action="processa_fornecedor.php" method="GET" >
             <fieldset>
                 Razão Social:<input  type="text" name="razao"><br><br>
                 Nome Fantasia:<input  type="text" name="nome_fantasia"><br><br>
                 Tipo :<input  type="text" name="tipo"><br><br>
                 CNPJ/CPF :<input  type="text" name="cpf_cnpj"><br><br>
                 Telefone :<input  type="text" name="telefone"><br><br>
                 Email :<input  type="text" name="email"><br><br>
                 Endereco :<input  type="text" name="endereco"><br><br>
                 Bairro:<input  type="text" name="bairro"><br><br>
                 Municipio :<input  type="text" name="municipio"><br><br>
                 Numero :<input  type="text" name="numero"><br><br>
                 CEP :<input  type="text" name="cep"><br><br>
                 
            
                 
                
                 
                 
        
            
        
            
    <input type="submit" name="sub" value="Enviar!">
            </fieldset>
        </form>
     
        		 
	</body>
</html>