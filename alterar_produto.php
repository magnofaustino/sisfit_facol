<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from produtos where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              $nome = $ras['nome'];
              $descricao = $ras['des'];
              $vcusto = $ras['vcusto'];
              $vvenda = $ras['vvenda'];
              $umedida = $ras['umedida'];
              $qproduto = $ras['qproduto'];
              $grupo = $ras['grupo'];
              $tipo = $ras['tipo'];
              $garantia = $ras['garantia'];
              $duração = $ras['tempgarantia'];
              $periodo= $ras['periodo'];
              $compra = $ras['dtcompra'];
              $fornecedor = $ras['fornecedor'];
              $bloqueado = $ras['bloqueado'];
              
          }

   
  
 ?>





<html>
	<head>
		<title>Editar Produto</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
             
            <div class="container">
            <div class="row">
                <form action="update_produto.php" method="GET" >
            <fieldset>
                
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Produto</h4></div>
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
             
                                 <div class="panel-body">
                    
                <div class="input-group">
                    <span class="input-group-addon">Nome do Produto:</span>
                    <input type="text" class="form-control" name="nome_1" value="<?php echo $nome; ?>">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Descrição do Produto:</span>
                    <input type="text" class="form-control" name="nome_2" value="<?php echo $descricao; ?>">
                </div><br>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Valor de Custo:</span>
                    <input type="text" class="form-control" name="nome_3">
                    <span class="input-group-addon">R$</span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Valor de Venda:</span>
                    <input type="text" class="form-control" name="nome_4">
                    <span class="input-group-addon">R$</span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Unidade de Medida:</span>
                    <input type="text" class="form-control" name="nome_5">
                </div>
                                    <div class="input-group">
                    <span class="input-group-addon">Quantidade do Produto:</span>
                    <input type="text" class="form-control" name="nome_6">
                </div>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Grupo de Produto:</span>
                    <input type="text" class="form-control" name="nome_7">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Tipo de Produto:</span>
                    <input type="text" class="form-control" name="nome_8">
                </div>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <div class="well">Garantia?:
                        <label class="radio-inline">
                        <input type="radio" name="garantia" value="N">Não
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="garantia" value="S">Sim
                        </label>
                    </div>
                </div>   
                <div class="input-group">
                    <span class="input-group-addon">Quantidade da Garantia:</span>
                    <input type="text" class="form-control" name="nome_9">
                </div>
                     <div class="form-group">
                         <div class="well well-sm">Periodo:
                         <select class="form-control" name="nome_10">
                         <option value="">Selecione ...</option>
                         <option value="D">Dias</option>
                         <option value="M">Meses</option>
                         <option value="A">Anos</option>
                        </select>
                      </div></div>
                </div></div><br>
                             
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data da Compra</span>
                    <input type="date" class="form-control" name="nome_11">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                     <div class="form-group">
                         <div class="well well-sm">Fornecedor:
                         <select class="form-control" name="Nome_12">
                         <option value="">Selecione ...</option>
                         <option value="1">Fornece 1</option>
                         <option value="2">Fornece 2</option>
                         <option value="3">Fornece 3</option>
                        </select>
                      </div></div>
                <div class="form-group">
                         <div class="well well-sm">Bloqueado:
                         <select class="form-control" name="Nome_13">
                         <option value="">Selecione ...</option>
                         <option value="S">Sim</option>
                         <option value="N">Não</option>
                        </select>
                      </div></div>
                </div>
                </div><br><br>
                    
                    
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
               <a href="cadastro_produto.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>