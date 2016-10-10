

<?php
$id=$_GET["tx"];

        $con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
        $seleciona_banco = mysql_select_db("escola") or die ("erro ao selecionar ao selecionar o banco");
        $resoltadobusca = mysql_query("select * from aluno where id_aluno = $id") or die ("erro executar o select");
          while($ras = mysql_fetch_array($resoltadobusca)){
              $nome = $ras['nome_aluno'];
              $cpf = $ras['cpf'];
              $curso = $ras['curso'];
          }
?>
        
<html>
	<head>
		<title>EDITAR ALUNO</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
       <h1>Atualização de Aluno</h1>
        
		<form action="processa_aluno.php" method="GET" >
             
            <fieldset>
                 Nome:<input  type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
                 CPF:<input  type="text" name="cpf" value="<?php echo $cpf; ?>"><br><br>
                 Altura:<input  type="text" name="curso" value="<?php echo $curso; ?>"><br><br>
                 
                 <input type="submit" name="sub" value="Enviar!">
            </fieldset>
        </form>
    
    
	</body>
</html>

