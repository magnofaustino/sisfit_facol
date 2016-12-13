<?php

     include ("conexao_atendente.php");   
    $mes = $_GET['mes'];
    $result = "select * from tb_aluno where substring(dt_nasc,6,2) = $mes";
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatorio de Aniversariantes</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Aniversariantes do Mês</h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Data" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        
                        <td><?php echo $ras['nome'];?></td>
                        <td><?php echo substr($ras['dt_nasc'],8,2); ?></td>
                    </tr>
                    
                    <?php
        }
            ?>
                
                </tbody>
            </table>
                </div>
               <button type="button"  name="imprimir" class="btn btn-default" onclick="window.print()">Imprimir</button>
                <!-- <div class="pull-right">
                 <a href="tela_aniversariantes.php" class="btn btn-default btn-sm" role="button">Cancelar</a>
                 </div> -->
        </fieldset>
    </div>
</div>
            </body>
</html>