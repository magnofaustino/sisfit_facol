<?php
    
     include ("conexao.php");   

    $result = "select *from atividades";
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatorio de Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Relatorio de Atividades</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Atividade" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Duração" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data Início" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data Fim" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['id']; ?></td>
                        <td><?php echo $ras['atividade'];?></td>
                        <td><?php echo $ras['valor']; ?></td>
                        <td><?php echo $ras['duracao_aula']; ?></td>
                         <td><?php echo $ras['dtini']; ?></td>
                        <td><?php echo $ras['dtfim']; ?></td>
                    
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