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
		<title>Editar Ativo Fixo</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
             
            <div class="container">
            <div class="row">
                <form action="update_produto.php" method="POST" >
            <fieldset>
                
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Ativo Fixo</h4></div>
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
             
                                 <div class="panel-body">
                    
                <div class="input-group">
                    <span class="input-group-addon">Nome do Produto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_1" value="<?php echo $nome; ?>" readonly>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Descrição do Produto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_2" value="<?php echo $descricao; ?>" readonly >
                </div><br>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Valor de Custo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_3" value="<?php echo $vcusto; ?>" readonly>
                    <span class="input-group-addon">R$</span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Valor de Venda:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_4" value="<?php echo $vvenda; ?>" readonly>
                    <span class="input-group-addon">R$</span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Unidade de Medida:</span>
                    <input type="text" class="form-control" name="nome_5" value="<?php echo $umedida; ?>">
                </div>
                                    <div class="input-group">
                    <span class="input-group-addon">Quantidade do Produto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_6" value="<?php echo $qproduto; ?>">
                </div>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Grupo de Produto:</span>
                    <input type="text" class="form-control" name="nome_7" value="<?php echo $grupo; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Tipo de Produto:</span>
                    <input type="text" class="form-control" name="nome_8" value="<?php echo $tipo; ?>">
                </div>
                </div></div><br>
                <div class="form-inline">
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon">Garantia:</span>
                            <label class="form-control">
                            <input type="radio" name="nome_9" value="N" <?php if($garantia == "N") echo "checked" ?>>Não
                            <input type="radio" name="nome_9" value="S" <?php if($garantia == "S") echo "checked" ?>>Sim
                            </label>
                        </div>
                        <div class="input-group">
                                <span class="input-group-addon">Quantidade da Garantia:</span>
                                <input type="text" class="form-control" name="nome_10" value="<?php echo $duracao; ?>">
                        </div><br><br>
                        <div class="input-group">
                             <span class="input-group-addon">Periodo:</span>
                             <select class="form-control" name="nome_11">
                             <option value=""><?php echo $duracao; ?></option>
                             <option value="D">Dias</option>
                             <option value="M">Meses</option>
                             <option value="A">Anos</option>
                            </select>
                        </div>
                    </div>
                </div><br>                   
                    
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data da Compra</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="nome_11" value="<?php echo $compra; ?>" readonly>
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="form-group">  
                    <div class="input-group">
                         <span class="input-group-addon">Fornecedor:</span>
                         <select class="form-control" title="Preencha o campo Nome" required name="Nome_12" >
                           <option value="">Selecione ...</option>
                                        <?php
						$result_niveis_acessos = "SELECT * FROM fornecedor";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                                <option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome_fantasia']; ?></option> <?php
						}
					?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Bloqueado:</span>
                         <select class="form-control" name="Nome_13">
                         <option value="">Selecione ...</option>
                         <option value="S">Sim</option>
                         <option value="N">Não</option>
                        </select>
                      </div></div>
                </div>
                </div><br><br>
                    
                    
                
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
               <a href="produto.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>