<?php
    
     include ("conexao.php");   

    $con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");    
    $s= mysql_select_db("escola") or die ("erro ao selecionar o BD PROJETO BAR");
    $resoltadobusca = mysql_query("select * from aluno") or die ("erro executar o select");
 ?>




<html>
<meta charset="UTF-8"/>
<head> <title>Relatório de Alunos</title> </head>  
<body>
<h1>Informações sobre o aluno</h1>

   
    
    <table border='4'>
      <tr> 
          
          <td>Aluno</td>
          <td>Cpf</td>
            <td>id</td>
          
       
        </tr>
    
    <?php while($ras = mysql_fetch_array($resoltadobusca)){
        $id = $ras['id_aluno'];
        ?> 
      <tr>
  
        <td><?php echo $ras['nome_aluno']; ?></td>
        <td><?php echo $ras['cpf']; ?></td>
        <td><?php echo "<a href=alterar_aluno.php?tx=".$id. "> EDITAR</a>"  ?></td>
     </tr>
        
     <?php } ?>
    
    </table><br><br>
  
</body>
</html> 