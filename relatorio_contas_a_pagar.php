<?php
    
    include ("conexao.php");   

    $dtini = $_GET['dtini'];
    $dtfim = $_GET['dtfim'];
    $sit = $_GET['sit'];
    
    $result = "select * from pagar where vencimento between '$dtini' and '$dtfim' ";
   
    If($sit == 'N') {
    $result .= " and pago = 'N'"; } 
    elseif ($sit == 'S') {
    $result .= " and pago = 'S'";}
   
    $resultado = mysqli_query($conn, $result);
 ?>
<html>
	<head>
		<title>Relatório de Contas a pagar</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Relatório de Contas a pagar <?php If($sit == 'N') { echo "( A Pagar )"; } elseif ($sit == 'S') {echo "( Pagos )";} else {echo "( Ambos )";} ?></h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                      
                        <th><input type="text" class="form-control" placeholder="Fornecedor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Descricão" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Vencimento" disabled></th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        
                        <td><?php echo $ras['fornecedor'];?></td>
                        <td><?php echo $ras['descricao']; ?></td>
                        <td><?php echo $ras['valor'];?></td>
                        <td><?php echo date('d/m/Y', strtotime($ras['vencimento'])); ?></td>
                      
                    
                    </tr>
                    
                    
                    <?php
        }
            ?>
                
                </tbody>
            </table></div>
           <button type="button"  name="imprimir" class="btn btn-default" onclick="window.print()">Imprimir</button>
        </fieldset>
    </div>
</div>
</body>
</html>