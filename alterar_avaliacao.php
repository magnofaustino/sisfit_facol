

<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from avaliacao where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              
              $n_aluno = $ras['n_aluno'];
              $obj_atividade = $ras['obj_atividade'];
              $atv_atual = $ras['atv_atual'];
              $tipo_med = $ras['tipo_med'];
              $tipo_cirg = $ras['tipo_cirg'];
              $tipo_doenca = $ras['tipo_doenca'];
              $obs_aval = $ras['obs_aval'];
                            
     
          
          }

   
  
 ?>

<html>
	<head>
		<title>Cadastro de Avalicao Fisica</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_avaliacao.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Avaliacao Fisica</h4></div>
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                <div class="panel-body">
                
                <div class="input-group">
                    <span class="input-group-addon">Nome do Aluno:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="n_aluno" value="<?php echo $n_aluno; ?>" readonly>
                      </div><br>
                        
                    <div class="input-group">
                    <span class="input-group-addon">Objetivos com relacao a atividades fisicas:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="obj_atividade" value="<?php echo $obj_atividade; ?>" readonly>
                      </div><br>

                    <div class="input-group">
                    <span class="input-group-addon">Pratica alguma atividade atualmente?:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="atv_atual" value="<?php echo $atv_atual; ?>">
                    </div><br>
                  
                    <div class="input-group">
                    <span class="input-group-addon">Utiliza algum tipo de medicamento?:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_med" value="<?php echo $tipo_med; ?>">
                    </div><br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Ja passou por alguma cirurgia?:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_cirg" value="<?php echo $tipo_cirg; ?>">
                    </div><br>
                    
                
                <div class="input-group">
                <span class="input-group-addon">Doencas na familia?:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_doenca" value="<?php echo $tipo_doenca; ?>" readonly>
                </div><br>
                
                    <div class="input-group">
                    <span class="input-group-addon">Observacoes:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="obs_aval" value="<?php echo $obs_aval; ?>">
                </div>
                
                <br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                    <a href="avaliacoes.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>