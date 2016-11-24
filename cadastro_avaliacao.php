<?php


include "conexao.php";
?>
<html>
	<head>
		<title>Cadastro de Avalição Fisica</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_avaliacao.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Avaliação Fisica</h4></div>
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
                    <span class="input-group-addon">Objetivos com relacao a atividades fisicas:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="obj_atividade">
                      </div><br>

                    <div class="input-group">
                    <span class="input-group-addon">Pratica alguma atividade atualmente?:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="atv_atual">
                    </div><br>
                  
                    <div class="input-group">
                    <span class="input-group-addon">Utiliza algum tipo de medicamento?:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_med">
                    </div><br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Ja passou por alguma cirurgia?:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_cirg">
                    </div><br>
                    
                
                <div class="input-group">
                <span class="input-group-addon">Doencas na familia?:</span>
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_doenca">
                </div><br>
                
                    <div class="input-group">
                    <span class="input-group-addon">Observacoes:</span>
                    <input type="text" class="form-control" name="obs_aval">
                </div>
                
                <br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
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