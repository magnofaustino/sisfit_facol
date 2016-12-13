<?php
    
     include ("conexao_atendente.php");   

    $result = "select *from produtos";
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatório de Produtos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Relatório de Produtos</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                      
                        <th><input type="text" class="form-control" placeholder="Nome Produto" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor venda" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Quantidade em Estoque" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Garantia" disabled></th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        
                        <td><?php echo $ras['nome'];?></td>
                        <td><?php echo $ras['vvenda']; ?></td>
                        <td><?php echo $ras['qproduto']; ?></td>
                         <td><?php echo $ras['garantia']; ?></td>
                      
                    
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