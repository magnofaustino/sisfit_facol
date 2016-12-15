                  <?php
    
     include ("conexao.php");   

    $result = "select * from usuario";
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
                <h3 class="panel-title">Usuarios</h3>
                <div class="pull-right">
                    <a href="cadastro_usuario.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Login" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Usuario" disabled></th>
                        <th><input type="text" class="form-control" placeholder="E-mail" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Bloqueado" disabled></th>
                      
                        <th><input type="text" class="form-control" placeholder="           Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['login'];?></td>
                        <td><?php echo $ras['nome']; ?></td>
                        <td><?php echo $ras['email']; ?></td>
                        <td><?php if($ras['usuario'] == "S") {echo "Sim"; } Else { echo "Não";}; ?></td>
                      
                        
<td class="text-center"><a href="alterar_usuario.php?tx=<?php echo $id?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span>Editar</a>
    
<a onclick="return confirma()" href="del_usuario.php?tx=<?php echo $id?>" class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    
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