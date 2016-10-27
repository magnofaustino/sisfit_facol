<?php
    
     include ("conexao.php");   

    $result = "select *from funcionario";
    $resultado = mysqli_query($conn, $result);
  
 ?>




<html>
<meta charset="UTF-8"/>
<head> <title>Relatório de Alunos</title> </head>  
<body>
<h1>Informações sobre o aluno</h1>

   <form action="processa_aluno.php" method="GET" >
             <fieldset>
		Nome:<input  type="text" name="nome_aluno"><br><br>
            
		      CPF:<input  type="text" name="cpf"><br><br>
                 
                 Altura:<input  type="text" name="altura"><br><br>
    
    
     <?php while($ras = mysqli_fetch_assoc($resultado)){ 
      ?>
        
    Nome:<input  type="text" name="nome_aluno" value="<?php echo $ras['id_funcionario']?>"><br><br>
    
    
        
    
 
                 
                 <input type="submit" name="sub" value="Enviar!">
    
       </fieldset>
    </form>
       <?php 
     }
?>
</body>
</html> 