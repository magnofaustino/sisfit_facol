
<?php
include "menu.php";
?>
<html>
	<head>
		<title>CADASTRO DE PRODUTO</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Produto</h1>
		<form action="processa_produto.php" method="GET" >
             <fieldset>
		Nome do produto:<input  type="text" name="nome_produto"><br><br>
            
		      valor de custo:<input  type="text" name="valor_custo"><br><br>
                 valo de venda:<input  type="text" name="valor_venda"><br><br>
                quantidade de produto: <input  type="text" name="qt_estoque"><br><br>
                 descrição do produto:<input  type="text" name="descricao"><br><br>
                 unidade de medida:<input  type="text" name="unidade_medida"><br><br>
                
                 
        
            
        	fornecedores:  
		<select name="fornecedor">
		<option value="1">select</option>
		<option value="2">select</option>
		
		
            </select><br><br>    
            
    <input type="submit" name="sub" value="Enviar!">
            </fieldset>
        </form>
     
        
        
        
		 
	</body>
</html>

