<?php


include "conexao.php";
?>
<html>
	<head>
		<title>Cadastro de Treino</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_treino.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Treino</h4></div>
                <div class="panel-body">
		<div class="form-inline">
            
                <div class="input-group">
                    <span class="input-group-addon">Nome do Aluno:</span>
                   	     <select class="form-control" title="Aluno ja Cadastrado" required name="nome_1" >
                             <option value="">Selecione o Aluno ...</option>
		   	<?php
						$result_niveis_acessos = "SELECT * FROM tb_aluno";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome']; ?></option> <?php
						}
					?>
                    </select></div><br>
        
            
               <div class="input-group">
                    <span class="input-group-addon">Exercício:</span>
                   <input type="text" class="form-control" name="nome_2">
                      </div>
                <div class="input-group">
                    <span class="input-group-addon">serie</span>
                    <input type="text" class="form-control" name="nome_3">
                   
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Repetição:</span>
                    <input type="text" class="form-control" name="nome_4">
                   
                </div></div><br>
                    
                <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Intervalo:</span>
                    <input type="text" class="form-control" name="nome_5">
                    <span class="input-group-addon"></span>
                    </div></div><br>
                    
                    <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Observação</span>
                    <input type="text" class="form-control" name="nome_6">
                    <span class="input-group-addon"></span>
                    </div>
                    
                   <br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
               
                <div class="pull-right">
                    <a href="receber.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>