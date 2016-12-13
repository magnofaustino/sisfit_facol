<?php
    
     include ("conexao_personal.php");   
    
    $result = "select * from avaliacao";
    $resultado = mysqli_query($conn, $result);
?>
    
<html>
	<head>
		<title>Avalição</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Avaliação</h3>
                <div class="pull-right">
                    <a href="cad_ava_per.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Nome do Aluno" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Atividade Atual" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Observação da Avaliação" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Alterar" disabled></th>
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
                       
                        
<td class="text-center"><a href="alt_av_per.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    

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