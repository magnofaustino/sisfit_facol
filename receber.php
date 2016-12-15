   <?php 
     include ("conexao.php");
    $result = "select * from receber";
    $resultado = mysqli_query($conn, $result);
 ?>
    


<html>
	<head>
		<title>Contas a Receber</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Contas a Receber</h3>
                <div class="pull-right">
                    <a href="cadastro_receber.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Pago" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Vencimento" disabled></th>
                      
                        <th><input type="text" class="form-control" placeholder="           Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['nome'];?></td>
                        <td><?php echo $ras['valor']; ?></td>
                        <td><?php if($ras['pago'] == "S") {echo "Sim"; } Else { echo "Não";}; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($ras['vencimento'])); ?></td>
                      
                        
<td class="text-center"><a href="alterar_receber.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a href="del_receber.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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