                  <?php
    
     include ("conexao.php");   

    $result = "select * from debito";
    $resultado = mysqli_query($conn, $result);
 ?>
    


<html>
	<head>
		<title>Debitos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Débitos</h3>
                <div class="pull-right">
                    <a href="contas_a_pagar.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="responsável" disabled></th>
                        <th><input type="text" class="form-control" placeholder="descricão" disabled></th>
                        <th><input type="text" class="form-control" placeholder="valor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="contato" disabled></th>
                      
                        <th><input type="text" class="form-control" placeholder="Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['id']; ?></td>
                        <td><?php echo $ras['nome'];?></td>
                        <td><?php echo $ras['descricao']; ?></td>
                         <td><?php echo $ras['valor']; ?></td>
                        <td><?php echo $ras['telefone']; ?></td>
                      
                        
<td class="text-center"><a href="alterar_debito.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a href="del_debito.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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