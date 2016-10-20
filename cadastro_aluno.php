
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
                 RG:<input  type="text" name="rg"><br><br>
                Sexo:<input  type="text" name="sexo"><br><br>
                 Profissão:<input  type="text" name="profissao"><br><br>
                 UF:<input  type="text" name="orgao_emissor"><br><br>
                 Data Nascimento:<input  type="text" name="dt_nascimento"><br><br>
                 Endereço:<input  type="text" name="endereco"><br><br>
                 Bairro:<input  type="text" name="bairro"><br><br>
                Estado:<input  type="text" name="estado"><br><br>
                 Numero:<input  type="text" name="numero"><br><br>
                 CEP:<input  type="text" name="cep"><br><br>
                 UF naturalidade:<input  type="text" name="uf_naturalidade"><br><br>
                 Naturalidade:<input  type="text" name="naturalidade"><br><br>
                 Nacionalidade:<input  type="text" name="nacionalidade"><br><br>
                 deficiencia:<input  type="text" name="deficiente"><br><br>
                 Obs deficiencia:<input  type="text" name="obs_deficiente"><br><br>
                 Email:<input  type="text" name="email"><br><br>
                 Telefone:<input  type="text" name="telefone"><br><br>
                 Plano:<input  type="text" name="plano"><br><br>
                 Bolsa:<input  type="text" name="bolsa"><br><br>
                 Tipo da bolsa:<input  type="text" name="tipo_bolsa"><br><br>
                 Horário de Treino:<input  type="text" name="horario"><br><br>
                 Data de Cadastro:<input  type="text" name="dt_cadastro"><br><br>
                
        
            
        
            
    <input type="submit" name="sub" value="Enviar!">
            </fieldset>
        </form>
     
        		 
	</body>
</html>


