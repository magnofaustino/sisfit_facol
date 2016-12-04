<?php
    
     include ("conexao.php");   

    $result = "select *from planos";
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatorio de Planos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Relatorio de Planos</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="nome do plano" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Atividades do Plano" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Duração Plano" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Numero de Aulas" disabled></th>
                        <th><input type="text" class="form-control" placeholder=" Valor Matrícula" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['id']; ?></td>
                        <td><?php echo $ras['nome_plano'];?></td>
                        <td><?php echo $ras['atividades_plano']; ?></td>
                        <td><?php echo $ras['duracao_plano']; ?></td>
                         <td><?php echo $ras['numero_aula']; ?></td>
                        <td><?php echo $ras['vl_matricula']; ?></td>
                    
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