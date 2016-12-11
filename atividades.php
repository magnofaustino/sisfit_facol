                  <?php
    
     include ("conexao.php");   
   
    $result = "select * from atividades";
    $resultado = mysqli_query($conn, $result);
 ?>
    


<html>
	<head>
		<title>Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Atividades</h3>
                <div class="pull-right">
                    <a href="cadastro_atividades.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Atividade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Temporaria?" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Inidio da Atividade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Fim da Atividade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['atividade'];?></td>
                        <td><?php echo $ras['valor']; ?></td>
                        <td><?php if($ras['atvtemp'] == "S") {echo "Sim"; } Else { echo "Não";}; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($ras['dtini'])); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($ras['dtfim'])); ?></td>
                        
<td class="text-center"><a href="alterar_atividades.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a href="del_atividade.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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