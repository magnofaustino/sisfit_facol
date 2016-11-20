
<?php
include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Fornecedor</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
            
            <div class="container">
            <div class="row">
                <form action="processa_fornecedor.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Fornecedores</h4></div>
                <div class="panel-body">
		<div class="form-inline">
		        </div>
                
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Razão Social:</span>
                    <input type="text" class="form-control" name="razao">
                
                 </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Nome Fantasia:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_fantasia">
                </div>
                <br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <div class="well">Pessoa:
                        <label class="radio-inline">
                        <input type="radio" name="tipo" value="F">Fisica
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="tipo" value="J">Juridica
                        </label>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">CNPJ/CPF:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="cpf_cnpj">
                </div></div>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone">
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" name="email">
                </div></div><br>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Endereco:</span>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Numero:</span>
                    <input type="text" class="form-control" name="numero">
                </div>
                 <div class="input-group">
                    <span class="input-group-addon">Bairro:</span>
                    <input type="text" class="form-control" name="bairro">
                 </div></div><br>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Municipio:</span>
                    <input type="text" class="form-control" name="municipio">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Cep:</span>
                    <input type="text" class="form-control" name="cep">
                </div></div><br><br>
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="fornecedor.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>     		 
	</body>
</html>