<?php

include "conexao.php";
?>
<html>
	<head>
		<title>Perimetros</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_perimetro.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Perimetros</h4></div>
                <div class="panel-body">
                
               <div class="input-group">
                    <span class="input-group-addon">Nome do Aluno:</span>
                   	     <select class="form-control" title="Aluno ja Cadastrado" required name="n_aluno" >
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
                    <span class="input-group-addon">Pescoco:</span>
                <input type="text" class="form-control"  title="Preencha o campo Nome" required name="pescoco">
                      </div><br>
                        
                    <div class="form-inline">
                    <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Ombro Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="ombro_esq">
                     </div>
                      
                    <div class="input-group"> 
                    <span class="input-group-addon">Ombro Direito:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="ombro_dir">
                    </div><br><br>
                    
                    <div class="form-inline">
                    <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Braco Relaxado Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_rilex_esq">
                    </div>
                  
                    <div class="input-group">
                    <span class="input-group-addon">Braco Relaxado Direto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_rilex_dir">
                    </div><br><br>
                    
                    
                    <div class="form-inline">
                    <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Braco Contraido Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_contra_esq">
                    </div>
                    
                
                <div class="input-group">
                <span class="input-group-addon">Braco Contraido Direito:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_contra_dir">
                </div><br><br>
                
                
                    <div class="form-inline">
                    <div class="form-group">                   
                    <div class="input-group">
                    <span class="input-group-addon">Ante Braco Esquerdo:</span>
                    <input type="text" class="form-control" name="ante_braco_esq">
                </div>
                   
                    <div class="input-group">
                <span class="input-group-addon">Ante Braco Direito:</span>
                <input type="text" class="form-control" name="ante_braco_dir">
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Torax Relaxado:</span>
                <input type="text" class="form-control" name="torax_rilex">
                </div>
                  
                <div class="input-group">
                <span class="input-group-addon">Torax Inspirado:</span>
                <input type="text" class="form-control" name="torax_insp">
                </div><br><br>
                
                <div class="input-group">
                <span class="input-group-addon">Cintura:</span>
                <input type="text" class="form-control" name="cintura">
                </div>
                
                <div class="input-group">
                <span class="input-group-addon">Abdomen:</span>
                <input type="text" class="form-control" name="abdomen">
                </div>
                
                <div class="input-group">
                <span class="input-group-addon">Quadril:</span>
                <input type="text" class="form-control" name="quadril">
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Coxa Esquerda:</span>
                <input type="text" class="form-control" name="coxa_esq">
                </div>
                   
                <div class="input-group">
                <span class="input-group-addon">Coxa Direita:</span>
                <input type="text" class="form-control" name="coxa_dir">
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Panturrillha Esquerda:</span>
                <input type="text" class="form-control" name="pantu_esq">
                </div>
                  
                <div class="input-group">
                <span class="input-group-addon">Panturrillha Direita:</span>
                <input type="text" class="form-control" name="pantu_dir">
                </div></div></div>
                
                
                </div></div><br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">         
                <a href="perimetro.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                
            </fieldset>
            </form>
       
        </body>
</html>