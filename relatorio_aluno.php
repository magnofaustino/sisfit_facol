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

   
    
    <table border='4'>
      <tr> 
          
           <td>ID</td>
          <td>NOME</td>
          <td>CPF</td>
          <td>TELEFONE</td>
          
       
        </tr>
    
    <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                    $id = $ras['id_funcionario'];
            
      ?> 
        
      <tr>
        
        <td><?php echo $ras['id_funcionario']; ?></td>
        <td><?php echo $ras['nome']; ?></td>
        <td><?php echo $ras['cpf']; ?></td>
        <td><?php echo $ras['telerone']; ?></td>
          
          
          
        <td><?php echo "<a href=alterar_aluno.php?tx=".$id. "> EDITAR</a>"  ?></td>
     </tr>
        
     <?php } ?>
    
    </table><br><br>
  
</body>
</html> 