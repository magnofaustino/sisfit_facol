<?php
     include ("conexao.php");   

    $result = "select * from produtos";
    $resultado = mysqli_query($conn, $result);
 ?>
    


<html>
	<head>
		<title>Ativo Fixo</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Ativo Fixo</h3>
                <div class="pull-right">
                    <a href="cadastrar_produto.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Nome Produto" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Descricão" disabled></th>
                        <th><input type="text" class="form-control" placeholder="valor venda" disabled></th>
                        <th><input type="text" class="form-control" placeholder="valor custo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Garantia" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['nome'];?></td>
                        <td><?php echo $ras['des']; ?></td>
                        <td><?php echo $ras['vcusto']; ?></td>
                        <td><?php echo $ras['vvenda']; ?></td>
                        <td><?php echo $ras['garantia']; ?></td>
                        
<td class="text-center"><a href="alterar_produto.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a href="del_produto.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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
