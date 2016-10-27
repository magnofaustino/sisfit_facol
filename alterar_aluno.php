<?php
    $id = $_GET['tx'];
     include ("conexao.php");   

   
  
 ?>




<html>
<meta charset="UTF-8"/>
<head> <title>Relatório de Alunos</title> </head>  
<body>
<h1>Informações sobre o aluno</h1>

   <form action="processa_aluno.php" method="GET" >
             <fieldset>
                 
                 <?php
                 
                  $result = "select *from funcionario WHERE id_funcionario = $id";
    $resultado = mysqli_query($conn, $result);
                 
                 while (mysqli_fetch_assoc($resultado)){}
                 ?>
                 Nome:<input  type="text" name="nome_aluno" value="<?php echo $ras['nome']?>"><br><br>
                 CPF:<input  type="text" name="cpf"><br><br>
                 Altura:<input  type="text" name="altura"><br><br>
    
   
        

        
    
 
                 
                 <input type="submit" name="sub" value="Enviar!">
    
       </fieldset>
    </form>
 
</body>
</html> 