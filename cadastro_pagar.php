<?php


include "conexao.php";
?>
<html>
	<head>
		<title>Cadastro de Contas a Pagar</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_pagar.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Contas a Pagar</h4></div>
                <div class="panel-body">
		<div class="form-inline">
         
                <div class="input-group">
                    <span class="input-group-addon">Nome do resposavel:</span>
                    <input type="text" class="form-control" name="nome_1">
                   
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Descrição:</span>
                    <input type="text" class="form-control" name="nome_2">
                   
                </div></div><br>
                          <div class="input-group">
                    <span class="input-group-addon">Fornecedor:</span>
                    <select class="form-control" title="Preencha o campo Nome" required name="nome_3" >
		      
                        <option value=""> Selecione o Fornecedor</option>
                        
                        <?php
						$result_niveis_acessos = "SELECT * FROM fornecedor";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['nome_fantasia']; ?>"><?php echo $row_niveis_acessos['nome_fantasia']; ?></option> <?php
						}
					?>
                    </select></div><br>                
                <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" name="nome_4">
                    <span class="input-group-addon">R$</span>
                    </div></div><br>
                    
                    <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Desconto:</span>
                    <input type="text" class="form-control" name="nome_5">
                    <span class="input-group-addon">R$</span>
                    </div>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Acrescimo:</span>
                    <input type="text" class="form-control" name="nome_6">
                    <span class="input-group-addon">R$</span>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Pago:</span>
                        <label class="form-control">
                        <input type="radio" name="nome_7" value="N">  Nao
                        <input type="radio" name="nome_7" value="S">  Sim
                        </label></div>
                    
                     <div class="input-group">
                    <span class="input-group-addon">Data da baixa:</span>
                    <input type="date" class="form-control" name="nome_8">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                     </div>
                        
                    </div></div><br>
                                    <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Vencimento:</span>
                    <input type="date" class="form-control" name="nome_9">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Emissão:</span>
                    <input type="date" class="form-control" name="nome_10">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
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