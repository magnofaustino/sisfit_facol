<?php
    
     include ("conexao.php");   

    $result = "select * from planos";
    $resultado = mysqli_query($conn, $result);
?>
    
<html>
	<head>
		<title>Cadastro de Planos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastro de Planos</h3>
                <div class="pull-right">
                    <a href="cadastro_plano.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Plano" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Aulas" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor Matricula" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor Mensalidade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="           Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                  
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['nome_plano'];?></td>
                        <td><?php echo $ras['numero_aula']; ?></td>
                        <td><?php echo $ras['vl_matricula']; ?></td>
                        <td><?php echo $ras['vl_mensal']; ?></td>
                        
<td class="text-center"><a href="alterar_plano.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a onclick="return confirma()" href="del_plano.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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