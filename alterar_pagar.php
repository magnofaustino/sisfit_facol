<?php
include ("conexao.php");

$id = $_GET['tx'];

$result = "select * from pagar where id = $id";

      $resultadobusca = mysqli_query($conn, $result);
        while($ras = mysqli_fetch_array($resultadobusca)){
    
            $nome_1 = $ras['fornecedor'];
            $nome_2 = $ras['nome'];
            $nome_3 = $ras['descricao'];
            $nome_4 = $ras['valor'];
            $nome_5 = $ras['desconto'];
            $nome_6 = $ras['acrescimo'];
            $nome_7 = $ras['pago'];
            $nome_8 = $ras['data_baixa'];
            $nome_9 = $ras['vencimento'];
            $nome_10 = $ras['emissao'];           
                    
              

}
?>
<html>
	<head>
		<title>Alterar Contas a Pagar</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_pagar.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Contas a Pagar</h4></div>
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                <div class="panel-body">
		<div class="form-inline">
               <div class="input-group">
                    <span class="input-group-addon">Fornecedor:</span>
                   <input type="text" class="form-control" name="nome_1" value="<?php echo $nome_1; ?>" readonly>
                      </div>
                <div class="input-group">
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" name="nome_2" value="<?php echo $nome_2; ?>" readonly>
                   
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Descrição:</span>
                    <input type="text" class="form-control" name="nome_3" value="<?php echo $nome_3; ?>" readonly>
                   
                </div></div><br>
                    
                <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" name="nome_4" value="<?php echo $nome_4; ?>" readonly>
                    <span class="input-group-addon">R$</span>
                    </div></div><br>
                    
                    <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Desconto:</span>
                    <input type="text" class="form-control" name="nome_5" value="<?php echo $nome_5; ?>" readonly>
                    <span class="input-group-addon">R$</span>
                    </div>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Acrescimo:</span>
                    <input type="text" class="form-control" name="nome_6" value="<?php echo $nome_6; ?>" readonly>
                    <span class="input-group-addon">R$</span>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Pago:</span>
                        <label class="form-control">
                        <input type="radio" name="nome_7" value="N" <?php if($nome_7 == "N") echo "checked" ?>>Não
                        <input type="radio" name="nome_7" value="S" <?php if($nome_7 == "S") echo "checked" ?>>Sim
                        </label>
                    </div>
                    <div class="input-group">
                    <span class="input-group-addon">Data da baixa:</span>
                    <input type="date" class="form-control" name="nome_8" value="<?php echo $nome_8; ?>"  readonly>
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                    </div>
                        
                    </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Vencimento:</span>
                    <input type="date" class="form-control" name="nome_9" value="<?php echo $nome_9; ?>" readonly>
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Emissão:</span>
                    <input type="date" class="form-control" name="nome_10" value="<?php echo $nome_10; ?>" readonly>
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                    <a href="pagar.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>