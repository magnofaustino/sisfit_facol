<?php
    
     include ("conexao_atendente.php");   

    $result = "select * from planos";
    $resultado = mysqli_query($conn, $result);
?>
    
<html>
	<head>
		<title>Planos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Planos</h3>
                <div class="pull-right">
               
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Plano" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Aulas" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor Matrícula" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor Mensalidade" disabled></th>
                       
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