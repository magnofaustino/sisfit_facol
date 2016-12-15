




<?php
    
     include ("conexao.php");   
    
    $result = "select * from avaliacao";
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
                        <th><input type="text" class="form-control" placeholder="Nome do Aluno" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Atividade Atual" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Observação da Avaliação" disabled></th>
                        <th><input type="text" class="form-control" placeholder="                Alterar / Excluir" disabled></th>
                        
                        </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['n_aluno'];?></td>
                        <td><?php echo $ras['atv_atual'];?></td>
                        <td><?php echo $ras['obs_aval'];?></td>
                       
                        
<td class="text-center"><a href="alterar_avaliacao.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a onclick="return confirma()" href="del_avaliacao.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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