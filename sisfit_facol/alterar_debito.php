<?php
include ("conexao.php");

$id = $_GET['tx'];

$result = "select * from debito where id = $id";

      $resultadobusca = mysqli_query($conn, $result);
        while($ras = mysqli_fetch_array($resultadobusca)){
    
            $nome = $ras['nome'];
            $descricao = $ras['descricao'];
            $valor = $ras['valor'];
            $telefone = $ras['telefone'];
            
              

}
?>
<html>
	<head>
		<title>Alterar  debito</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_debito.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Debito</h4></div>
                     <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                  <div class="panel-body">
		<div class="form-inline">
                
                
               <div class="input-group">
                    <span class="input-group-addon">Nome:</span>
                   <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome" value="<?php echo $nome; ?>">
                      </div>

                <div class="input-group">
                    <span class="input-group-addon">Descrrição:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="descricao" value="<?php echo $descricao; ?>" >
                   
                </div></div><br>
                    
                       <div class="input-group">
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="valor" value="<?php echo $valor; ?>" >
                    <span class="input-group-addon">R$</span>
                </div></div><br>
                    
                       <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="telefone" value="<?php echo $telefone; ?>" >
                   
                </div></div><br>
                
                
          
                    
   <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="cadastro_pagamentos.php"     class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>