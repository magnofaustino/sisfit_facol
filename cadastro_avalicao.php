<?php


include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Avalicao Fisica</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="processa_avaliacao.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Avaliacao Fisica</h4></div>
                <div class="panel-body">
                
                <div class="input-group">
                    <span class="input-group-addon">Nome do Aluno:</span>
                    <input type="text" class="form-control"  title="Preencha o campo Nome" required name="n_aluno">
                      </div><br>
                        
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
                <a href="avalicao.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>