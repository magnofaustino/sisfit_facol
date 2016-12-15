




<?php
    
     include ("conexao.php");   
    
    $result = "select * from segunda";
    $resultado = mysqli_query($conn, $result);
?>
    
<html>
	<head>
		<title>Avalicao</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Avaliacao</h3>
                <div class="pull-right">
                  <a href="cadastro_aluno.php" class="btn btn-warning btn-sm" role="button">Segunda</a>
            
<a href="cadastro_aluno.php" class="btn btn-warning btn-sm" role="button">Terça</a>
            
 <a href="cadastro_aluno.php" class="btn btn-warning btn-sm" role="button">Quarta</a>
            
            
  <a href="cadastro_aluno.php" class="btn btn-warning btn-sm" role="button">Quinta</a>
            
  <a href="cadastro_aluno.php" class="btn btn-warning btn-sm" role="button">Sexta</a><br></br>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Execício" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Serie" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Repetoções" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Intervalo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Observações" disabled></th>
                       
                        
                        </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['exercicio'];?></td>
                        <td><?php echo $ras['serie'];?></td>
                        <td><?php echo $ras['repeticao'];?></td>
                         <td><?php echo $ras['intervalo'];?></td>
                         <td><?php echo $ras['obs'];?></td>
                       
                        

                    </tr>
                    
                    <?php
        }
            ?>
                
                </tbody>
            </table>
           
                </div>
             </fieldset>
    </div>
</div>
            </body>
</html>