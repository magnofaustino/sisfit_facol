

<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from perimetros where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){

              
$nome_aluno=$ras['nome_aluno'];
$pescoco=$ras['pescoco'];
$ombro_esq =$ras['ombro_esq'];
$ombro_dir = $ras['ombro_dir'];
$braco_rilex_esq = $ras['braco_rilex_esq']; 
$braco_rilex_dir =$ras['braco_rilex_dir'];
$braco_contra_esq = $ras['braco_contra_esq'];
$braco_contra_dir = $ras['braco_contra_dir']; 
$ante_braco_esq = $ras['ante_braco_esq'];
$ante_braco_dir = $ras['ante_braco_dir'];
$torax_rilex =$ras['torax_rilex'];
$torax_insp =$ras['torax_insp'];
$cintura =$ras['cintura'];
$abdomen =$ras['abdomen'];
$quadril =$ras['quadril'];
$coxa_esq =$ras['coxa_esq'];
$coxa_dir =$ras['coxa_dir'];
$pantu_esq =$ras['pantu_esq'];
$pantu_dir =$ras['pantu_dir'];
              
                      
          }

   
  
 ?>
 
 <html>
	<head>
		<title>Alterar Perimetros</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
		<form action="update_perimetro.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar 	Perimetros</h4></div>
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                
                <div class="panel-body">
                
                <div class="input-group">
                    <span class="input-group-addon">Nome do Aluno:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_aluno" value="<?php echo $nome_aluno; ?>" readonly>
                      </div><br>
                
                
                <div class="input-group">
                    <span class="input-group-addon">Pescoco:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="pescoco" value="<?php echo $pescoco; ?>" readonly>
                      </div><br>
                        
                    <div class="form-inline">
                    <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Ombro Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="ombro_esq" value="<?php echo $ombro_esq; ?>" readonly>
                     </div>
                      
                    <div class="input-group"> 
                    <span class="input-group-addon">Ombro Direito:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="ombro_dir" value="<?php echo $ombro_dir; ?>" readonly>
                    </div><br><br>
                    
                    <div class="form-inline">
                    <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Braco Relaxado Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_rilex_esq" value="<?php echo $braco_rilex_esq; ?>" readonly>
                    </div>
                  
                    <div class="input-group">
                    <span class="input-group-addon">Braco Relaxado Direto:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_rilex_dir" value="<?php echo $braco_rilex_dir; ?>" readonly>
                    </div><br><br>
                    
                    
                    <div class="form-inline">
                    <div class="form-group">   
                    <div class="input-group">
                    <span class="input-group-addon">Braco Contraido Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_contra_esq" value="<?php echo $braco_contra_esq; ?>" readonly>
                    </div>
                    
                
                <div class="input-group">
                <span class="input-group-addon">Braco Contraido Direito:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="braco_contra_dir" value="<?php echo $braco_contra_dir; ?>" readonly>
                </div><br><br>
                
                
                    <div class="form-inline">
                    <div class="form-group">                   
                    <div class="input-group">
                    <span class="input-group-addon">Ante Braco Esquerdo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="ante_braco_esq" value="<?php echo $ante_braco_esq; ?>" readonly>
                </div>
                   
                    <div class="input-group">
                <span class="input-group-addon">Ante Braco Direito:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="ante_braco_dir" value="<?php echo $ante_braco_dir; ?>" readonly>
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Torax Relaxado:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="torax_rilex" value="<?php echo $torax_rilex; ?>" readonly>
                </div>
                  
                <div class="input-group">
                <span class="input-group-addon">Torax Inspirado:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="torax_insp" value="<?php echo $torax_insp; ?>" readonly>
                </div><br><br>
                
                <div class="input-group">
                <span class="input-group-addon">Cintura:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="cintura" value="<?php echo $cintura; ?>" readonly>
                </div>
                
                <div class="input-group">
                <span class="input-group-addon">Abdomen:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="abdomen" value="<?php echo $abdomen; ?>" readonly>
                </div>
                
                <div class="input-group">
                <span class="input-group-addon">Quadril:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="quadril" value="<?php echo $quadril; ?>" readonly>
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Coxa Esquerda:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="coxa_esq" value="<?php echo $coxa_esq; ?>" readonly>
                </div>
                   
                <div class="input-group">
                <span class="input-group-addon">Coxa Direita:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="coxa_dir" value="<?php echo $coxa_dir; ?>" readonly>
                </div><br><br>
                
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Panturrillha Esquerda:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="pantu_esq" value="<?php echo $pantu_esq; ?>" readonly>
                </div>
                  
                <div class="input-group">
                <span class="input-group-addon">Panturrillha Direita:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="pantu_esq" value="<?php echo $pantu_esq; ?>" readonly>
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