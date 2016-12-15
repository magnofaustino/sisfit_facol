<?php
include "conexao.php";

?>
<html>
	<head>
		<title>Cadastro de Plano</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
       
		<div class="container">
        <div class="row">
		<form action="processa_plano.php" method="POST" >
           
           <fieldset>
           
           <div class="panel panel-primary">
           <div class="panel-heading"><h4>Cadastro de Plano</h4>
           </div>
           <div class="panel-body">                
           <div class="input-group">
            
		            <span class="input-group-addon">Nome do Plano:</span>
		            
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_plano" >
                   
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
                                <select class="form-control" title="Preencha o campo Nome" required name="tipo_plano" >
                                <option value="N">familiar"a"</option>
                        <option value="S">individual"b"

                        </option></select>
                        </div>
                        <div class="input-group">
                        <span class="input-group-addon">Duracao do Plano:</span>
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="duracao_plano" >
                        </div>

                        <div class="input-group">
                        <span class="input-group-addon">Numero de aulas:</span>    
                                           <input type="number" class="form-control" title="Preencha o campo Nome" required name="numero_aula" min="1"max="5">
                        </div>
                    </div>
                </div><br>                  
                <div class="form-inline">
                    <div class="form-group">   
		        <div class="input-group">
		            <span class="input-group-addon">Valor da Matricula:</span>           
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="vl_matricula"size="6" >
                        </div>         
		        <div class="input-group">      		 
                            <span class="input-group-addon">Valor da Mensalidade:</span>
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="vl_mensal"size="17" >
		        </div><br><br>
                        <div class="input-group">
                            <span class="input-group-addon">Data de Cadastro:</span>
                            <input type="text" class="form-control" title="Preencha o campo Nome" required name="data_cadastro"size="6" value="<?php echo date("d/m/Y"); ?>" readonly >
                        </div>
                    </div>
                </div><br><br>
                
                
         <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
         <button type="reset" class="btn btn-default">Limpar</button>
         <div class="pull-right">
         <a href="plano.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
            </fieldset>
       
        
        </form> 
		 
	</body>
</html>