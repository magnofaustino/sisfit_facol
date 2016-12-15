<?php
include ("conexao.php");

$id = $_GET['tx'];

$result = "select * from planos where id = $id";

      $resultadobusca = mysqli_query($conn, $result);
        while($ras = mysqli_fetch_array($resultadobusca)){
            
            $nome_plano = $ras['nome_plano'];
            $atividades_plano = $ras['atividades_plano'];
            $tipo_plano = $ras['tipo_plano'];
           $duracao_plano = $ras['duracao_plano'];
           $numero_aula = $ras['numero_aula']; 
            $vl_matricula = $ras['vl_matricula'];
            $vl_mensal = $ras['vl_mensal'];
           $data_cadastro = $ras['data_cadastro'];
}
?>
<html>
	<head>
		<title>Alterar Plano</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
       
		<div class="container">
        <div class="row">
		<form action="update_plano.php" method="POST" >
           
           <fieldset>
           
           <div class="panel panel-primary">
           <div class="panel-heading"><h4>Alterar Plano</h4>
           <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
           
           </div>
           <div class="panel-body">                
           <div class="input-group">
            
		            <span class="input-group-addon">Nome do Plano:</span>
		            
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_plano" value="<?php echo $nome_plano; ?>">
                   
                   
           </div><br>
               
                <div class="form-group">   
                <div class="input-group">
              <span class="input-group-addon">Atividade:</span>
                      <select class="form-control" title="Preencha o campo Nome" required name="atividades_plano" >
		   	<option value=""> Selecione o Plano</option>
                          <?php
						$result_niveis_acessos = "SELECT * FROM atividades";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['atividade']; ?></option> <?php
						}
					?>
                    </select></div><br>
                      
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Tipo de Plano:</span>  
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_plano"size="20" value="<?php echo $tipo_plano; ?>">
		   
                  </div>
                <div class="input-group">
                <span class="input-group-addon">Duracao do Plano:</span>
		        <input type="text" class="form-control" title="Preencha o campo Nome" required name="duracao_plano" value="<?php echo $duracao_plano; ?>">
		</div>
		        
                <div class="input-group">
                    <span class="input-group-addon">Numero de aulas:</span>    
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="numero_aula"size="2" value="<?php echo $numero_aula; ?>">
		</div></div></div><br>
		                   
		<div class="form-inline">
                    <div class="form-group">   
		        <div class="input-group">
		            <span class="input-group-addon">Valor da Matricula:</span>           
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="vl_matricula"size="16" value="<?php echo $vl_matricula; ?>">
                        </div>         
		        <div class="input-group">      		 
                            <span class="input-group-addon">Valor da Mensalidade:</span>
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="vl_mensal"size="17" value="<?php echo $vl_mensal; ?>">
		        </div><br><br>
                        <div class="input-group">
                            <span class="input-group-addon">Data de Cadastro:</span>
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="data_cadastro"size="16"  readonly value="<?php echo $data_cadastro; ?>">
                        </div>
                    </div>
                </div><br><br>
                
                
         <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
         <button type="reset" class="btn btn-default">Limpar</button>
         <div class="pull-right">
         <a href="plano.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
            </fieldset>
       
        
        </form> 
		 
	</body>
</html>