<?php
include ("conexao.php");   
$id=$_GET["tx"];
        

$result = "select * from tb_aluno where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              $nome = $ras['nome'];
          $cpf = $ras['cpf'];
              $curso = $ras['rg'];
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
