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
               <div class="form-group">
                         <div class="input-group">
                         <span class="input-group-addon">Dia de Treino:</span>
                         <select class="form-control" required name="dia">
                         <option value="">Selecione ...</option>
                         <option value="5">Segunda</option>
                         <option value="4">Terça</option>
                         <option value="3">Quarta</option>
                        <option value="2">Quinta</option>
                              <option value="1">Sexta</option>
                        </select>
                      </div></div>
            
        
          <div class="input-group">
                    <span class="input-group-addon">Nome do aluno:</span>
                   <input type="text" class="form-control" name="nome_1">
                      </div>
            
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