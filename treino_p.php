   <?php 

    
     include ("conexao_personal.php");
    $result = "select * from segunda";
    $resultado = mysqli_query($conn, $result);
 ?>
    


<html>
	<head>
		<title>Treinos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Treinos</h3>
                <div class="pull-right">
                    <a href="c_t_p.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Aluno" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Exercício" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Repetição" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Observação" disabled></th>
                      
                        <th><input type="text" class="form-control" placeholder="Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['nome'];?></td>
                        <td><?php echo $ras['exercicio']; ?></td>
                        <td><?php echo $ras['repeticao']; ?></td>
                        <td><?php echo $ras['obs']; ?></td>
                        
                      
                        
<td class="text-center"><a href="#?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a onclick="return confirma()" href="del_receber.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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