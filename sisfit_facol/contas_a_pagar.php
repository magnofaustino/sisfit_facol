<?php


include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_debito.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Debito</h4></div>
                <div class="panel-body">
		<div class="form-inline">
               <div class="input-group">
                    <span class="input-group-addon">Fornecedor:</span>
                   <input type="text" class="form-control" name="fornecedor">
                      </div>
                <div class="input-group">
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" name="nome">
                   
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Descrição:</span>
                    <input type="text" class="form-control" name="descricao">
                   
                </div></div><br>
                    
                <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" name="valor">
                    <span class="input-group-addon">R$</span>
                    </div>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="text" class="form-control" name="telefone">
                   
                </div></div><br>
                    <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Desconto:</span>
                    <input type="text" class="form-control" name="desconto">
                    <span class="input-group-addon">R$</span>
                    </div>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Acrescimo:</span>
                    <input type="text" class="form-control" name="acrescimo">
                    <span class="input-group-addon">R$</span>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">   
                
                    <div class="input-group">
                    <span class="input-group-addon">Pago:</span>
                        <label class="radio-inline">
                        <input type="radio" name="pago" value="N">Não
                        </label>
                        
                        <label class="radio-inline">
                        <input type="radio" name="pago" value="S">Sim
                        </label>
                     <div class="input-group">
                    <span class="input-group-addon">Data da baixa:</span>
                    <input type="date" class="form-control" name="dtini">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                     </div>
                        
                    </div></div></div><br>
                                    <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Vencimento:</span>
                    <input type="date" class="form-control" name="dtini">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Emissão:</span>
                    <input type="date" class="form-control" name="dtfim">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="atividades.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>