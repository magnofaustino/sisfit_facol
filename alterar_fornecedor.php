
<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from fornecedor where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
             
              
              
              $razao = $ras['razao'];
              $nome_fantasia = $ras['nome_fantasia'];
              $tipo = $ras['tipo'];
              $cpf_cnpj = $ras['cpf_cnpj'];
              $telefone = $ras['telefone'];
              $email = $ras['email'];
              $endereco = $ras['endereco'];
              $bairro = $ras['bairro'];
             $municipio = $ras['municipio'];
              $numero = $ras['numero'];
              $cep = $ras['cep'];
              
     
          
          }

   
  
 ?>




<html>
	<head>
		<title>Cadastro de Fornecedor</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
            
            <div class="container">
            <div class="row">
                <form action="update_fornecedor.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Fornecedores</h4></div>
                     <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                <div class="panel-body">
		<div class="form-inline">
		        </div>
                
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Razão Social:</span>
                    <input type="text" class="form-control" name="razao" value="<?php echo $razao; ?>">
                
                 </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Nome Fantasia:</span>
                    <input type="text" class="form-control" name="nome_fantasia" value="<?php echo $nome_fantasia; ?>">
                </div>
                <br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <div class="well">Pessoa:
                        <label class="radio-inline">
                        <input type="radio" name="tipo" value="F" <?php if($tipo == "F") echo "checked" ?>>Fisica
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="tipo" value="J" <?php if($tipo == "J") echo "checked" ?>>Juridica
                        </label>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">CNPJ/CPF:</span>
                    <input type="text" class="form-control" name="cpf_cnpj" value="<?php echo $cpf_cnpj; ?>">
                </div></div>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Telefone:</span>
                    <input type="tel" class="form-control" name="telefone" value="<?php echo $telefone; ?>">
                </div> 
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div></div><br>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Endereco:</span>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Numero:</span>
                    <input type="text" class="form-control" name="numero" value="<?php echo $numero; ?>">
                </div>
                 <div class="input-group">
                    <span class="input-group-addon">Bairro:</span>
                    <input type="text" class="form-control" name="bairro" value="<?php echo $bairro; ?>">
                 </div></div><br>
                <div class="form-inline">
                <div class="input-group">
                    <span class="input-group-addon">Municipio:</span>
                    <input type="text" class="form-control" name="municipio" value="<?php echo $municipio; ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Cep:</span>
                    <input type="text" class="form-control" name="cep" value="<?php echo $cep; ?>">
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