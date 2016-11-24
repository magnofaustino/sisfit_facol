
<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from funcionario where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              
              
              $nome = $ras['nome'];
              $cpf = $ras['cpf'];
              $rg = $ras['rg'];
              $nascimento = $ras['nascimento'];
              $telefone = $ras['telefone'];
              $matricula = $ras['matricula'];
              $estadocivil = $ras['estadocivil'];
              $nacionalidade = $ras['nacionalidade'];
              $naturalidade = $ras['naturalidade'];
              $ufnaturalidade = $ras['ufnaturalidade'];
              $admissao = $ras['admissao'];
              $saida = $ras['saida'];
              $sexo = $ras['sexo'];
              $deficiente = $ras['deficiente'];
              $obsdeficiente = $ras['obsdeficiente'];
              $nomepai = $ras['nomepai'];
              $nomemae = $ras['nomemae'];
              $apelido = $ras['apelido'];
              $funcao= $ras['funcao'];
              $numcarteira = $ras['numcarteira'];
              $seriecarteira = $ras['seriecarteira'];
              $uf_naturalidade = $ras['uf_naturalidade'];
              $turnotrab = $ras['turnotrab'];
              $tipotrab = $ras['tipotrab'];
              
     
          
          }

   
  
 ?>

<html>
	<head>
		<title>Cadastro de Funcionario</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_funcionario.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Funcionario</h4></div>
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
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="cpf" value="<?php echo $cpf; ?>" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Rg:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="rg" value="<?php echo $rg; ?>" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de nascimento:</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="nascimento" value="<?php echo $nascimento; ?>" readonly>
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>                
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone" value="<?php echo $telefone; ?>">
                    <span class="input-group-addon"><a class="glyphicon glyphicon-earphone"></a></span>
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">Matricula:</span>
                    <input type="text" class="form-control" name="matricula" value="<?php echo $matricula; ?>" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Estado civil:</span>
                    <input type="text" class="form-control" name="estadocivil" value="<?php echo $estadocivil; ?>">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nacionalidade:</span>
                    <input type="text" class="form-control" name="nacionalidade" value="<?php echo $nacionalidade; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Naturalidade:</span>
                    <input type="text" class="form-control" name="naturalidade" value="<?php echo $naturalidade; ?>" readonlys>
                </div>
                <!-- <div class="input-group">
                    <span class="input-group-addon">Uf Naturalidade:</span>
                    <input type="text" class="form-control" name="ufnaturalidade">
                </div> -->
                <div class="form-group">
                         <!-- <div class="well well-sm">Uf Naturalidade: -->
                         <select class="form-control" name="ufnaturalidade">
                       <option value="<?php echo  $ufnaturalidade ?>"><?php echo  $ufnaturalidade ?></option>
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
                      </div>                
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Admissão:</span>
                    <input type="date" class="form-control" name="admissao" value="<?php echo $admissao; ?>">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Saida:</span>
                    <input type="date" class="form-control" name="saida" value="<?php echo $saida; ?>">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br>
                
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <div class="well">Sexo:
                        <label class="radio-inline">
                        <input type="radio" name="sexo" value="M" <?php if($sexo == "M") echo "checked" ?>>Masculino
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="sexo" value="F" <?php if($sexo == "F") echo "checked" ?>>Feminino
                        </label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="well">Deficiente:
                        <label class="radio-inline">
                        <input type="radio" name="deficiente" value="N" <?php if($deficiente == "N") echo "checked" ?>>Não
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="deficiente" value="S" <?php if($deficiente == "S") echo "checked" ?>>Sim
                        </label>
                    </div>
                </div></div></div>              
                <div class="input-group">
                    <span class="input-group-addon">Obs da deficiencia:</span>
                    <input type="text" class="form-control" name="obsdeficiente" value="<?php echo $obsdeficiente; ?>">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Nome do pai:</span>
                    <input type="text" class="form-control" name="nomepai" value="<?php echo $nomepai; ?>">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Nome da mãe:</span>
                    <input type="text" class="form-control" name="nomemae" value="<?php echo $nomemae; ?>">
                </div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Apelido:</span>
                    <input type="text" class="form-control" name="apelido" value="<?php echo $apelido; ?>">
                </div>               
                <div class="input-group">
                    <span class="input-group-addon">Funcao:</span>
                    <input type="text" class="form-control" name="funcao" value="<?php echo $funcao; ?>">
                </div><br></br>
                </div></div>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Num. Carteira:</span>
                    <input type="text" class="form-control" name="numcarteira" value="<?php echo $numcarteira; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Serie da carteira:</span>
                    <input type="text" class="form-control" name="seriecarteira" value="<?php echo $seriecarteira; ?>">
                </div>
               </div>
                <!-- <div class="input-group">
                    <span class="input-group-addon">Uf Naturalidade:</span>
                    <input type="text" class="form-control" name="ufnaturalidade">
                </div> -->
                <div class="form-group">
                         <!-- <div class="well well-sm">Uf Naturalidade: -->
                         <select class="form-control" name="uf_naturalidade">
                           <option value="<?php echo  $uf_naturalidade ?>"><?php echo  $uf_naturalidade ?></option>
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
                      </div><br><br>
                
                
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Turno Trabalho:</span>
                    <input type="text" class="form-control" name="turnotrab" value="<?php echo $turnotrab; ?>">
                </div>
                
                <div class="input-group">
                    <span class="input-group-addon">Escala de Trabalho:</span>
                    <input type="text" class="form-control" name="tipotrab" value="<?php echo $tipotrab; ?>">
                </div></div></div>
                <br><br>
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
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