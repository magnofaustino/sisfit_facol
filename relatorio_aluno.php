<?php
    
     include ("conexao.php");   

    $result = "select *from tb_aluno";
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatorio de Alunos</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Relatorio de Alunos</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Cpf" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Rg" disabled></th>
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
                        <td><?php echo $ras['cpf']; ?></td>
                        <td><?php echo $ras['rg']; ?></td>
                    </tr>
                    
                    <?php
        }
            ?>
                
                </tbody>
            </table>
                </div>
            
               <button type="button"  name="imprimir" class="btn btn-default" onclick="window.print()">Imprimir</button>
                <!-- onclick="window.location.href='imprimir.php'" -->
             </fieldset>
    </div>
</div>
            </body>
</html>