<html>
<title>
<head>
    
    </head>    
    
    </title>
<body>
    
    
     <form>
         
         <?php
         $b = 'a';
         
         ?>
  <input type="radio" name="gender" value="m" <?php if($b == "n") echo "checked" ?>> Male<br>
  <input type="radio" name="gender" value="f" <?php if($b == "m") echo "checked" ?>> femele<br>
</form> 
    
    </body>


</html>




<?php
include "menu.php";
?>
<html>
	<head>
		<title>CADASTRO PAGAMENTOS</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<h1>Cadastro de Pagamentos</h1>
		<form action="processa_pagamentos.php" method="GET" >
             <fieldset>
		Nome do Responsável a receber:<input  type="text" name="nome_do_responsavel"><br><br>
            
		      descrição do debito:<input  type="text" name="descricao"><br><br>
            telefone:<input  type="text" name="telefone"><br><br>
                 
               
            
    <input type="submit" name="sub" value="Enviar!">
            </fieldset>
        </form>



