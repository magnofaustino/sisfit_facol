<?php

include "menu.php";
?>
<html>
	<head>
		<title>Cadastro de Plano</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
       
		<div class="container">
        <div class="row">
		<form action="processa_planos.php" method="GET" >
           
           <fieldset>
           
           <div class="panel panel-primary">
           <div class="panel-heading"><h4>Cadastro de Plano</h4>
           </div>
           <div class="panel-body">                
           <div class="input-group">
            
		            <span class="input-group-addon">Nome do Plano:</span>
		            
                    <input type="text" class="form-control" name="nome_plano" >
                   
           </div><br>
               
                <div class="form-group">   
                <div class="input-group">
             <span class="input-group-addon">Atividade:</span>
		     <select class="form-control" name="atividade_plano" >
		     <option value="N">atividade"a"</option>
             <option value="S">atividade"b"
            
            </option></select></div><br>
            
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Tipo de Plano:</span>  
		        <select class="form-control" name="tipo_plano" >
		        <option value="N">familiar"a"</option>
                <option value="S">individual"b"
                
                 </option></select>
                  </div>
                 <div class="input-group">
                <span class="input-group-addon">Duracao do Plano:</span>
		        <input type="text" class="form-control" name="duracao_plano" >
		            </div>
		        
                <div class="input-group">
                <span class="input-group-addon">Numero de aulas:</span>    
		                   <input type="number" class="form-control" name="numero_aula" min="1"max="5">
		                   </div></div></div><br>
		                   
		                   <div class="form-inline">
                           <div class="form-group">   
		                   <div class="input-group">
		                   <span class="input-group-addon">Valor da Matricula:</span>           
		                   <input type="text" class="form-control" name="vl_matricula" >
		                   </div>
		                   
		                   <div class="input-group">
		                   		 <span class="input-group-addon">R$</span>
		        <span class="input-group-addon">Valor da Mensalidade:</span>
		                   <input type="text" class="form-control" name="vl_mensal" >
		                   <span class="input-group-addon">R$</span>
		
                </div></div><br><br>
                
                
         <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
         <button type="reset" class="btn btn-default">Limpar</button>
         <div class="pull-right">
         <a href="planos.php?tx=<?php echo $id?>" class="btn btn-default btn-sm" role="button">Cancelar</a>  
            </fieldset>
       
        
        </form> 
		 
	</body>
</html>