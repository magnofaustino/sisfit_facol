<?php
include "inicial.php";
?>
<html>
<meta charset="UTF-8"/>
<head> <title>Relatório de Alunos</title> </head>  
<body>
<h1>Informações sobre o aluno</h1>
<?php

$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");

 //função seleciona banco de dados.
    $seleciona_banco = mysql_select_db("escola") or die ("erro ao selecionar o BD PROJETO BAR");

$resoltbusca = mysql_query("select * from curso") or die ("erro executar o select");

if($con){
     echo("conecção feita");
     }

?>
    
     <?php  $resoltadobusca = mysql_query("select * from aluno") or die ("erro executar o select");
   
   ?> 
    <table border='2'>
    
    <tr>
        
        <td>Aluno</td>
        <td>Cpf</td>
       
        </tr>
    
    <?php while($ras = mysql_fetch_array($resoltadobusca)){?> 
      <?php $n = $ras['numero'];
                                                           ?>
        <tr>
        
        <td><?php echo $ras['nome_aluno']; ?></td>
        <td><?php echo $ras['cpf']; ?></td>
       
           </tr>
        <?php } ?>
    </table><br><br>
  
</body>
</html> 