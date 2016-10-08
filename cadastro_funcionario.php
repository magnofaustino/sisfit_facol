<?php
include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Funcionarios</title>
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
                Matricula:<input  type="text" name="matricula"><br><br>
                Data de Admissão:<input type="date" name="admissao"><br><br>
                Data de Nascimento:<input  type="date" name="nascimento"><br><br>
                Sexo:<input  type="text" name="sexo"><br><br>
                Estado civil:<input  type="text" name="estadocivil"><br><br>
                Nacionalidade:<input  type="text" name="nacionalidade"><br><br>
                Uf Naturalidade:<input  type="text" name="ufnaturalidade"><br><br>
                Naturalidade:<input  type="text" name="naturalidade"><br><br>
                Deficiente:<input  type="text" name="deficiente"><br><br>
                Obs da deficiencia:<input  type="text" name="obsdeficiente"><br><br>
                Nome do pai:<input  type="text" name="nomepai"><br><br>
                Nome da mae:<input  type="text" name="nomemae"><br><br>
                Apelido:<input  type="text" name="apelido"><br><br>
                Funcao:<input  type="text" name="funcao"><br><br>
                Num. Carteira:<input  type="text" name="numcarteira"><br><br>
                Serie da carteira:<input  type="text" name="seriecarteira"><br><br>
                Uf Carteira:<input  type="text" name="ufcarteira"><br><br>
                Turno Trabalho:<input  type="text" name="turnotrab"><br><br>
                Tipo Trabalho:<input  type="text" name="tipotrab"><br><br>
            
         <input type="submit" name="sub" value="Cadastrar">
            </fieldset>
        </form>
        
        
        
		 
	</body>
</html>