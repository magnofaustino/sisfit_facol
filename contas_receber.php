<?php
    
     include ("conexao.php");   

    $result = "select *from receber";
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatorio Contas a Receber</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Relatorio Contas a Receber</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                      
                         <th><input type="text" class="form-control" placeholder="Aluno" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="descricão" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Pago?" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Vencimento" disabled></th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        
                        
                        
                         <td><?php echo $ras['aluno'];?></td>
                        <td><?php echo $ras['nome'];?></td>
                         <td><?php echo $ras['descricao'];?></td>
                        <td><?php echo $ras['valor']; ?></td>
                         <td><?php echo $ras['pago'];?></td>
                        <td><?php echo $ras['vencimento']; ?></td>
                      
                    
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