<?php
    $id = $_GET['tx'];
     include ("conexao_atendente.php");
    


$result = "select * from tb_aluno where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              $nome = $ras['nome'];
              $cpf = $ras['cpf'];
              $rg = $ras['rg'];
              $telefone = $ras['telefone'];
              $matricula = $ras['matricula'];
              $est_civil = $ras['est_civil'];
              $nacionalidade = $ras['nacionalidade'];
              $naturalidade = $ras['naturalidade'];
              $uf_natur = $ras['uf_natur'];
              $nascimento = $ras['dt_nasc'];
              $sexo = $ras['sexo'];
              $deficiente = $ras['deficiente'];
              $obs_deficiente = $ras['obs_def'];
              $email = $ras['email'];
              $plano = $ras['plano'];
              $bolsa = $ras['bolsa'];
              $tipo_bolsa = $ras['tipo_bolsa'];
              $h_treino = $ras['h_treino'];
              $dt_cadastro = $ras['dt_cadastro'];
              $rua = $ras['rua'];
              $numero = $ras['numero'];
              $bairro = $ras['bairro'];
              $cep = $ras['cep'];
              $orgao_emissor = $ras['orgao_emissor'];
              $limitacao=$ras['limitacao'];
              $tipo_lim =$ras['tipo_lim'];
     
          
          }

 
  
 ?>





<html>
	<head>
		<title>Editar Aluno</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
             
            <div class="container">
            <div class="row">
                <form action="up_alu_at.php" method="POST" >
            <fieldset>
                
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Aluno</h4></div>
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                <div class="panel-body">                
                <div class="input-group">
                    
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome" value="<?php echo $nome; ?>" readonly>
                   
                </div><br>
                    
		<div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                    <span class="input-group-addon">CPF:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="cpf"size="36" value="<?php echo $cpf; ?>" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Rg:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="rg"size="23" value="<?php echo $rg; ?>" readonly>
                </div>                
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone"size="27" value="<?php echo $telefone; ?>">
                    <span class="input-group-addon"><a class="glyphicon glyphicon-earphone"></a></span>
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">Matrícula:</span>
                    <input type="text" class="form-control" name="matricula"size="17" value="<?php echo $matricula; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Estado civil:</span>
                    <input type="text" class="form-control" name="estadocivil"size="11" value="<?php echo $est_civil; ?>">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nacionalidade:</span>
                    <input type="text" class="form-control" name="nacionalidade"size="28" value="<?php echo $nacionalidade; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Naturalidade:</span>
                    <input type="text" class="form-control" name="naturalidade"size="14" value="<?php echo $naturalidade; ?>" readonly>
                </div>
                <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">UF:</span>
                         <select class="form-control" name="ufnaturalidade" value="<?php echo $natur; ?>">
                         <option value="<?php echo  $uf_natur ?>"><?php echo  $uf_natur ?></option>
                         <option value="Acre">Acre</option>
                         <option value="Alagoas">Alagoas</option>
                         <option value="Amapá">Amapá</option>
                         <option value="Amazonas">Amazonas</option>
                         <option value="Bahia">Bahia</option>
                         <option value="Ceará">Ceará</option>
                         <option value="Distrito Federal">Distrito Federal</option>
                         <option value="Goiás">Goiás</option>
                         <option value="Eespirito Santo">Espírito Santo</option>
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
                      </div>
                </div></div><br><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Nascimento:</span>
                    <input type="date" class="form-control" name="nascimento" value="<?php echo $nascimento; ?>">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br>
                <div class="form-inline">
                    <div class="input-group">
                    <span class="input-group-addon">Sexo:</span>
                        <label class="form-control">  
                        <input type="radio" name="sexo" value="M" <?php if($sexo == "  M") echo "checked" ?>>  Masculino
                        <input type="radio" name="sexo" value="F" <?php if($sexo == "  F") echo "checked" ?>>  Feminino
                        </label>
                    </div></div><br>
                    <div class="form-inline">                
                    <div class="input-group">
                    <span class="input-group-addon">Deficiênte:</span>
                        <label class="form-control">
                      <input type="radio" name="deficiente" value="  N" <?php if($deficiente == "  N") echo "checked" ?>>  Nao
                      <input type="radio" name="deficiente" value="  S" <?php if($deficiente == "  S") echo "checked" ?>>  Sim
                        </label>
                    </div>
                
                <div class="input-group">
                    <span class="input-group-addon">Tipo da deficiência:</span>
                    <input type="text" class="form-control" name="obs_deficiente" value="<?php echo $obs_deficiente; ?>">
                </div><br><br>
                
                <div class="input-group">
                    <span class="input-group-addon">Limitação:</span>
                      <label class="form-control">
                      <input type="radio" name="limitacao" value="  N" <?php if($limitacao == "  N") echo "checked" ?>>  Nao
                      <input type="radio" name="limitacao" value="  S" <?php if($limitacao == "  S") echo "checked" ?>>  Sim
                        </label>
                    </div>
                
                <div class="input-group">
                    <span class="input-group-addon">Tipo da limitação:</span>
                    <input type="text" class="form-control" name="tipo_lim"size="22"value="<?php echo $tipo_lim; ?>">
                </div><br><br>
                
                
                
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Plano:</span>
                    <input type="text" class="form-control" name="plano" value="<?php echo $plano; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Bolsa:</span>
                    <input type="text" class="form-control" name="bolsa" value="<?php echo $bolsa; ?>">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Tipo da bolsa:</span>
                    <input type="text" class="form-control" name="tipo_bolsa"size="29" value="<?php echo $tipo_bolsa; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Horário de Treino:</span>
                    <input type="text" class="form-control" name="horario"size="12" value="<?php echo $h_treino; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Cadastro:</span>
                    <input type="text" class="form-control" name="dt_cadastro"size="7" value="<?php echo $dt_cadastro; ?>" readonly>
                </div></div></div><br> 
                                                    
                <div class="form-inline">
                <div class="form-group">               
                <div class="input-group">
                    <span class="input-group-addon">Endereço:</span>
                    <input type="text" class="form-control" name="endereco"size="33" value="<?php echo $rua; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Número:</span>
                    <input type="text" class="form-control" name="numero" value="<?php echo $numero; ?>">
                </div>
                 
                <div class="input-group">
                    <span class="input-group-addon">Bairro:</span>
                    <input type="text" class="form-control" name="bairro"size="18" value="<?php echo $bairro; ?>">
                </div></div><br><br>
                <div class="form-inline">
                <div class="form-group">      
                    <div class="input-group">
                    <span class="input-group-addon">CEP:</span>
                    <input type="text" class="form-control" name="cep"size="38" value="<?php echo $cep; ?>">
                </div>
                     <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Estado:</span>
                         <select class="form-control" name="orgao_amissor" >
                         <option value="<?php echo  $orgao_emissor ?>"><?php echo  $orgao_emissor ?></option>
                         <option value="Acre">Acre</option>
                         <option value="Alagoas">Alagoas</option>
                         <option value="Amapá">Amapá</option>
                         <option value="Amazonas">Amazonas</option>
                         <option value="Bahia">Bahia</option>
                         <option value="Ceará">Ceará</option>
                         <option value="Distrito Federal">Distrito Federal</option>
                         <option value="Goiás">Goiás</option>
                         <option value="Eespirito Santo">Espírito Santo</option>
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
                
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
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