<?php


include "conexao_personal.php";
?>
<html>
	<head>
		<title>Cadastro de Treino</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="p_p_t.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Treino</h4></div>
                <div class="panel-body">
                 
                         <div class="input-group">
                    <span class="input-group-addon">Nome aluno:</span>
                   <input type="text" class="form-control" required name="nome_1">
                      </div><br><br>
  
		<div class="form-inline">
               <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Dia de Treino:</span>
                         <select class="form-control" required name="dia">
                         <option value="">Selecione ...</option>
                         <option value="1">Segunda</option>
                         <option value="2">Terça</option>
                         <option value="3">Quarta</option>
                        <option value="4">Quinta</option>
                              <option value="5">Sexta</option>
                        </select>
                      </div></div>
            
               <div class="input-group">
                    <span class="input-group-addon">Exercício:</span>
                   <input type="text" class="form-control" required name="nome_2">
                      </div><br><br>
                <div class="input-group">
                    <span class="input-group-addon">Series</span>
                    <input type="text" class="form-control" required name="nome_3"size="8">
                   
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Repetição:</span>
                    <input type="text" class="form-control" required name="nome_4"size="20">
                   
                </div></div><br>
                    
                <div class="form-inline">
                    <div class="input-group">   
                    <span class="input-group-addon">Intervalo:</span>
                    <input type="time" class="form-control" required name="nome_5"size="14">
                    </div>                    
                    
                    <div class="input-group">   
                    <span class="input-group-addon">Observação</span>
                    <input type="text" class="form-control" required name="nome_6"size="19">
                    </div>
                    
                   <br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
               
                <div class="pull-right">
                    <a href="treino_p.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>