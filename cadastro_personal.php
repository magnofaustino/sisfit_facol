
<?php
include "conexao.php";
?>

<html>
	<head>
		<title>Cadastro de Personal</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
                <form action="processa_personal.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Personal</h4></div>
                <div class="panel-body">                
                <div class="input-group">
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome">
                </div><br>  
		<div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                    <span class="input-group-addon">CPF:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="cpf">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Rg:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="rg">
                </div>                
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone">
                    <span class="input-group-addon"><a class="glyphicon glyphicon-earphone"></a></span>
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">Estado civil:</span>
                    <input type="text" class="form-control" name="estadocivil">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nacionalidade:</span>
                    <input type="text" class="form-control" name="nacionalidade">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Naturalidade:</span>
                    <input type="text" class="form-control" name="naturalidade">
                </div>
                <div class="form-group">
                         <!-- <div class="well well-sm">Uf Naturalidade: -->
                         <select class="form-control" name="ufnaturalidade">
                         <option value="">UF Naturalidade</option>
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
                      </div>
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Nascimento:</span>
                    <input type="date" name="dt_nascimento">
                </div>
                <div class="input-group">
                    <div class="well">Sexo:
                        <label class="radio-inline">
                        <input type="radio" name="sexo" value="M">Masculino
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="sexo" value="F">Feminino
                        </label>
                    </div>
                </div>
                </div>
                </div>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Horário de Treino:</span>
                    <input type="text" class="form-control" name="horario">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Cadastro:</span>
                    <input type="date" name="dt_cadastro" value="<?php echo date("d/m/Y"); ?>" readonly>
                </div></div></div><br>
                
                <div class="form-inline">
                <div class="form-group">               
                <div class="input-group">
                    <span class="input-group-addon">Endereço:</span>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="input-group">
                <span class="input-group-addon">Numero:</span>
                    <input type="text" class="form-control" name="numero">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group"> 
                <div class="input-group">
                    <span class="input-group-addon">Bairro:</span>
                    <input type="text" class="form-control" name="bairro">
                </div>
                      <div class="input-group">
                    <span class="input-group-addon">CEP:</span>
                    <input type="text" class="form-control" name="cep">
                </div>
                     <div class="form-group">
                         <div class="well well-sm">Estado:
                         <select class="form-control" name="orgao_emissor">
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
                      </div></div>
                </div></div><br>
                <br><br>
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="personal.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>