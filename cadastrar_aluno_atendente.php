
<?php
include ("conexao_atendente.php");
?>
<html>
	<head>
		<title>Cadastro Aluno</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
             
            <div class="container">
            <div class="row">
                <form action="p_a_a.php" method="POST" >
            <fieldset>
                
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Aluno</h4></div>
                    
                <div class="panel-body">                
                <div class="input-group">
                    
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome" >
                   
                </div><br>
                    
		<div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                    <span class="input-group-addon">CPF:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="cpf"size="36" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Rg:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="rg" >
                </div>                
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone"size="27" >
                    <span class="input-group-addon"><a class="glyphicon glyphicon-earphone"></a></span>
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">Matrícula:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="matricula" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Estado civil:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="estadocivil"size="11" >
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nacionalidade:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nacionalidade"size="28" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Naturalidade:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="naturalidade"size="17" >
                </div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">UF:</span>
                         <select class="form-control" title="Preencha o campo Nome" required name="ufnaturalidade" >
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
                    <span class="input-group-addon">Data de Nascimento:</span>
                    <input type="date" class="form-control" name="nascimento" >
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br>
                
                    <div class="form-inline">
                    <div class="input-group">
                    <span class="input-group-addon">Sexo:</span>
                        <label class="form-control">  
                        <input type="radio" name="sexo" value="M" >  Masculino
                        <input type="radio" name="sexo" value="F" >  Feminino
                        </label>
                    </div></div><br>
                    <div class="form-inline">           
                    <div class="input-group">
                    <span class="input-group-addon">Deficiênte:</span>
                        <label class="form-control">
                      <input type="radio" name="deficiente" value="N" >  Nao
                      <input type="radio" name="deficiente" value="S" >  Sim
                        </label>
                    </div>
                        
                <div class="input-group">
                    <span class="input-group-addon">Tipo da deficiência:</span>
                    <input type="text" class="form-control" name="obs_deficiente" >
                </div></div><br>
               
                <div class="form-inline">
               
                <div class="input-group">
                    <span class="input-group-addon">Limitação:</span>
                        <label class="form-control">
                      <input type="radio" name="limitacao" value="N" >  Nao
                      <input type="radio" name="limitacao" value="S" >  Sim
                        </label>
                    </div>
                 
                <div class="input-group">
                    <span class="input-group-addon">Tipo da limitação:</span>
                    <input type="text" class="form-control" name="tipo_lim"size="22" >
                </div></div><br>
                
                
                
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="text" class="form-control" name="email" size="35" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Plano:</span>
                         <select class="form-control" title="Preencha o campo Nome" required name="plano" >
                             <option value="">Selecione ...</option>
		   	<?php
						$result_niveis_acessos = "SELECT * FROM planos";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome_plano']; ?></option> <?php
						}
					?>
                    </select></div><br>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Bolsa:</span>
                    <input type="text" class="form-control" name="bolsa" >
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Tipo da bolsa:</span>
                    <input type="text" class="form-control" name="tipo_bolsa"size="29" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Horário de Treino:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="horario" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Cadastro:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="dt_cadastro"size="8" value="<?php echo date("d/m/Y"); ?>" readonly >
                </div></div></div><br> 
                                                    
                <div class="form-inline">
                <div class="form-group">               
                <div class="input-group">
                    <span class="input-group-addon">Endereço:</span>
                    <input type="text" class="form-control" name="endereco"size="33" >
                </div>
                     <div class="input-group">
                           <span class="input-group-addon">Número:</span>
                    <input type="text" class="form-control" name="numero"size="29" >
                </div>
                 
                <div class="input-group">
                    <span class="input-group-addon">Bairro:</span>
                    <input type="text" class="form-control" name="bairro"size="18" >
                </div><br><br>
                      <div class="input-group">
                    <span class="input-group-addon">CEP:</span>
                    <input type="text" class="form-control" name="cep"size="38" >
                </div>
                     <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Estado:</span>
                         <select class="form-control" name="orgao_amissor"  >
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
                <br><br>
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="c_a_a.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>