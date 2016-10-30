<?php

include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Empresa</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_empresa.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Empresa</h4></div>
                <div class="panel-body">
		<div class="form-inline">
                <div class="form-group">
                 <div class="input-group">
                    <span class="input-group-addon">Razão Social:</span>
                    <input type="text" class="form-control" name="razao">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Nome Fantasia:</span>
                    <input type="text" class="form-control" name="nome_fantasia">
                </div>
                <div class="input-group">
                    <div class="well">Tipo:
                        <label class="radio-inline">
                        <input type="radio" name="tipo" value="F">Fisica
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="tipo" value="J">Juridica
                        </label>
                    </div>
                </div></div></div>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">CNPJ/CPF:</span>
                    <input type="text" class="form-control" name="cpf_cnpj">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Insc. Estadual:</span>
                    <input type="text" class="form-control" name="insc_estadual">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Insc. Municipal:</span>
                    <input type="text" class="form-control" name="insc_municipal">
                </div></div><br>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" name="telefone">
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Endereco:</span>
                    <input type="text" class="form-control" name="endereco">
                </div></div><br>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Complemento:</span>
                    <input type="text" class="form-control" name="complemento">
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
                </div>
                <div class="form-group">
                         <div class="well well-sm">Estado:
                         <select class="form-control" name="estado">
                         <option value="">Selecione ...</option>
                         <option value="AC">Acre</option>
                         <option value="AL">Alagoas</option>
                         <option value="AP">Amapá</option>
                         <option value="AM">Amazonas</option>
                         <option value="BA">Bahia</option>
                         <option value="CE">Ceará</option>
                         <option value="DF">Distrito Federal</option>
                         <option value="GO">Goiás</option>
                         <option value="ES">Espírito Santo</option>
                         <option value="MA">Maranhão</option>
                         <option value="MT">Mato Grosso</option>
                         <option value="MS">Mato Grosso do Sul</option>
                         <option value="MG">Minas Gerais</option>
                         <option value="PA">Pará</option>
                         <option value="PB">Paraiba</option>
                         <option value="PR">Paraná</option>
                         <option value="PE">Pernambuco</option>
                         <option value="PI">Piauí­</option>
                         <option value="RJ">Rio de Janeiro</option>
                         <option value="RN">Rio Grande do Norte</option>
                         <option value="RS">Rio Grande do Sul</option>
                         <option value="RO">Rondônia</option>
                         <option value="RR">Roraima</option>
                         <option value="SP">São Paulo</option>
                         <option value="SC">Santa Catarina</option>
                         <option value="SE">Sergipe</option>
                         <option value="TO">Tocantins</option>
                        </select>
                      </div></div><br><br>
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="cadastro_empresa.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>
