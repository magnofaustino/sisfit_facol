<?php
include "conexao.php";
?>

<html>
	<head>
		<title>Cadastro de Funcionario</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_funcionario.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Funcionario</h4></div>
                <div class="panel-body">
                
                <div class="input-group">
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome">
                </div><br>
                    
		<div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                    <span class="input-group-addon">CPF:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="cpf"size="35">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Rg:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="rg"size="21">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de nascimento:</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="nascimento">
                </div>                
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone"size="31">
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">Matricula:</span>
                    <input type="text" class="form-control" name="matricula"size="15">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Estado civil:</span>
                    <input type="text" class="form-control" name="estadocivil"size="25">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nacionalidade:</span>
                    <input type="text" class="form-control" name="nacionalidade"size="26">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Naturalidade:</span>
                    <input type="text" class="form-control" name="naturalidade"size="12">
                </div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">UF:</span>
                         <select class="form-control" name="ufnaturalidade">
                         <option value="">Selecione</option>
                          <option value="Acre">Acre</option>
                         <option value="Alagoas">Alagoas</option>
                         <option value="Amapá">Amapá</option>
                         <option value="Amazonas">Amazonas</option>
                         <option value="Bahia">Bahia</option>
                         <option value="Ceará">Ceará</option>
                         <option value="Distrito Federal">Distrito Federal</option>
                         <option value="Goiás">Goiás</option>
                         <option value="Espírito Santo">Espírito Santo</option>
                         <option value="Maranhão">Maranhão</option>
                         <option value="Mato Grosso">Mato Grosso</option>
                         <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                         <option value="Minas Gerais">Minas Gerais</option>
                         <option value="Pará">Pará</option>
                         <option value="Paraiba">Paraiba</option>
                         <option value="Paraná">Paraná</option>
                         <option value="Pernambuco">Pernambuco</option>
                         <option value="Piauí">Piauí</option>
                         <option value="Rio de Janeiro">Rio de Janeiro</option>
                         <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                         <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                         <option value="Rondônia">Rondônia</option>
                         <option value="Roraima">Roraima</option>
                         <option value="São Paulo">São Paulo</option>
                         <option value="Santa Catarina">Santa Catarina</option>
                         <option value="Sergipe">Sergipe</option>
                         <option value="Tocantins">Tocantins</option>
                        </select>
                      </div></div>              
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Admissão:</span>
                    <input type="date" class="form-control" name="admissao">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Saida:</span>
                    <input type="date" class="form-control" name="saida">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br>
                
                <div class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                    <span class="input-group-addon">Sexo:</span>
                        <label class="form-control">
                        <input type="radio" name="sexo" value="M">  Masculino
                        <input type="radio" name="sexo" value="F">  Feminino
                        </label>
                    </div>
                
                
                <div class="input-group">
                    <div class="input-group">
                    <span class="input-group-addon">Deficiente:</span>
                        <label class="form-control">
                        <input type="radio" name="deficiente" value="N">  Nao
                        <input type="radio" name="deficiente" value="S">  Sim
                        </label>
                    </div></div>
                            
                <div class="input-group">
                    <span class="input-group-addon">Tipo da deficiencia:</span>
                    <input type="text" class="form-control" name="obsdeficiente">
                </div></div><br><br>
                
                <div class="input-group">
                    <div class="input-group">
                    <span class="input-group-addon">Limitacao Fisica:</span>
                        <label class="form-control">
                        <input type="radio" name="limitacao" value="N">  Nao
                        <input type="radio" name="limitacao" value="S">  Sim
                        </label>
                    </div></div>
                             
                <div class="input-group">
                    <span class="input-group-addon">Tipo da Limitacao:</span>
                    <input type="text" class="form-control" name="tipo_lim">
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nome do pai:</span>
                    <input type="text" class="form-control" name="nomepai">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Nome da mãe:</span>
                    <input type="text" class="form-control" name="nomemae">
                
                
                </div><br><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Apelido:</span>
                    <input type="text" class="form-control" name="apelido"size="25">
                </div>               
                <div class="input-group">
                    <span class="input-group-addon">Funcao:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="funcao"size="26">
                </div><br></br>
                </div></div>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Num. Carteira:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="numcarteira"size="19">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Serie da carteira:</span>
                    <input type="text" class="form-control" name="seriecarteira"size="18">
                </div>
               </div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">UF</span>
                         <select class="form-control" name="uf_naturalidade">
                         <option value="">Selecione</option>
                         <option value="Acre">Acre</option>
                         <option value="Alagoas">Alagoas</option>
                         <option value="Amapá">Amapá</option>
                         <option value="Amazonas">Amazonas</option>
                         <option value="Bahia">Bahia</option>
                         <option value="Ceará">Ceará</option>
                         <option value="Distrito Federal">Distrito Federal</option>
                         <option value="Goiás">Goiás</option>
                         <option value="Espírito Santo">Espírito Santo</option>
                         <option value="Maranhão">Maranhão</option>
                         <option value="Mato Grosso">Mato Grosso</option>
                         <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                         <option value="Minas Gerais">Minas Gerais</option>
                         <option value="Pará">Pará</option>
                         <option value="Paraiba">Paraiba</option>
                         <option value="Paraná">Paraná</option>
                         <option value="Pernambuco">Pernambuco</option>
                         <option value="Piauí">Piauí</option>
                         <option value="Rio de Janeiro">Rio de Janeiro</option>
                         <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                         <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                         <option value="Rondônia">Rondônia</option>
                         <option value="Roraima">Roraima</option>
                         <option value="São Paulo">São Paulo</option>
                         <option value="Santa Catarina">Santa Catarina</option>
                         <option value="Sergipe">Sergipe</option>
                         <option value="Tocantins">Tocantins</option>
                        </select>
                      </div></div><br><br>
                
                
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Turno Trabalho:</span>
                    <input type="text" class="form-control" name="turnotrab"size="18">
                </div>
                
                <div class="input-group">
                    <span class="input-group-addon">Escala de Trabalho:</span>
                    <input type="text" class="form-control" name="tipotrab"size="16">
                </div></div></div>
                <br><br>
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="funcionario.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>