

<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from personal where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              $nome = $ras['nome'];
              $cpf = $ras['cpf'];
              $rg = $ras['rg'];
              $telefone = $ras['telefone'];
              $estadocivil = $ras['estadocivil'];
              $nacionalidade = $ras['nacionalidade'];
              $naturalidade = $ras['naturalidade'];
              $ufnaturalidade = $ras['uf_naturalidade'];
              $nascimento = $ras['dt_nascimento'];
              $sexo = $ras['sexo'];
              $email = $ras['email'];
              $horario = $ras['horario'];
              $dt_cadastro = $ras['dt_cadastro'];
              $endereco = $ras['endereco'];
              $numero = $ras['numero'];
              $bairro = $ras['bairro'];
              $cep = $ras['cep'];
              $orgao_emissor = $ras['orgao_emissor'];
              
     
          
          }

   
  
 ?>

<html>
	<head>
		<title>Cadastro de Personal</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
                <form action="update_personal.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Personal</h4></div>
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
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" title="Preencha o campo Nome" required name="telefone" value="<?php echo $telefone; ?>">
                    <span class="input-group-addon"><a class="glyphicon glyphicon-earphone"></a></span>
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
                    <input type="text" class="form-control" name="naturalidade" value="<?php echo $naturalidade; ?>">
                </div>
                <div class="form-group">
                         <!-- <div class="well well-sm">Uf Naturalidade: -->
                         <select class="form-control" name="ufnaturalidade" value="<?php echo $ufnaturalidade; ?>">
                         <option value="<?php echo  $ufnaturalidade ?>"><?php echo  $ufnaturalidade ?></option>
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
                </div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Nascimento:</span>
                    <input type="date" name="dt_nascimento" title="Preencha o campo Nome" required value="<?php echo $nascimento; ?>" readonly>
                </div>
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
                </div>
                </div>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Horário de Treino:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="horario" value="<?php echo $horario; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Cadastro:</span>
                    <input type="date" name="dt_cadastro" title="Preencha o campo Nome" required value="<?php echo $dt_cadastro; ?>" readonly>
                </div></div></div><br>
                
                <div class="form-inline">
                <div class="form-group">               
                <div class="input-group">
                    <span class="input-group-addon">Endereço:</span>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
                </div>
                <div class="input-group">
                <span class="input-group-addon">Numero:</span>
                    <input type="text" class="form-control" name="numero" value="<?php echo $numero; ?>">
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group"> 
                <div class="input-group">
                    <span class="input-group-addon">Bairro:</span>
                    <input type="text" class="form-control" name="bairro" value="<?php echo $bairro; ?>">
                </div>
                      <div class="input-group">
                    <span class="input-group-addon">CEP:</span>
                    <input type="text" class="form-control" name="cep" value="<?php echo $cep; ?>">
                </div>
                     <div class="form-group">
                         <div class="well well-sm">Estado:
                             
                 
                             
                         <select class="form-control" name="orgao_emissor" value="<?php echo $orgao_emissor; ?>">
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
                <a href="personal.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>