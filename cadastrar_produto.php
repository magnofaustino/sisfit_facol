
<?php

include "conexao.php";
?>
<html>
	<head>
		<title>Cadastro de Produto</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_produto.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Produto</h4></div>
                <div class="panel-body">
                    
                <div class="input-group">
                    <span class="input-group-addon">Nome do Produto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_1">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Descrição do Produto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_2">
                </div><br>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Valor de Custo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_3">
                    <span class="input-group-addon">R$</span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Valor de Venda:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_4">
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
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_6">
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
                        <input type="radio" name="nome_9" value="N">Não
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="nome_9" value="S">Sim
                        </label>
                    </div>
                </div>   
                <div class="input-group">
                    <span class="input-group-addon">Quantidade da Garantia:</span>
                    <input type="text" class="form-control" name="nome_10">
                </div>
                     <div class="form-group">
                         <div class="well well-sm">Periodo:
                         <select class="form-control" name="nome_11">
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
                    <input type="date" class="form-control" name="nome_12">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                     <div class="form-group">
                         <div class="well well-sm">Fornecedor:
                         <select class="form-control" name="Nome_13">
                         <option value="">Selecione ...</option>
                       	<?php
						$result_niveis_acessos = "SELECT * FROM fornecedor";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome_fantasia']; ?></option> <?php
						}
					?>
                        </select>
                      </div></div>
                <div class="form-group">
                         <div class="well well-sm">Bloqueado:
                         <select class="form-control" name="Nome_14">
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
                <a href="produto.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>