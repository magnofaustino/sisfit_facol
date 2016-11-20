<?php
include ("conexao.php");

$id = $_GET['tx'];

$result = "select * from tb_plano where id = $id";

      $resultadobusca = mysqli_query($conn, $result);
        while($ras = mysqli_fetch_array($resultadobusca)){
    
            $nome_plano = $ras['nome_plano'];
            $atividades_plano = $ras['atividades_plano'];
            
            $tipo_plano = $ras['tipo_plano'];
            $duracao_plano = $ras['duracao_plano'];
            
            $numero_aula = $ras['numero_aula'];
            
            $data_cadastro = $ras['data_cadastro'];
}
?>
<html>
	<head>
		<title>Alterar Plano</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
       
		<div class="container">
        <div class="row">
		<form action="processa_plano.php" method="GET" >
           
           <fieldset>
           
           <div class="panel panel-primary">
           <div class="panel-heading"><h4>Alterar Plano</h4>
           </div>
           <div class="panel-body">                
           <div class="input-group">
            
		            <span class="input-group-addon">Nome do Plano:</span>
		            
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="" value="nome_plano<?php echo $nome_plano; ?>">
                   
           </div><br>
               
                <div class="form-group">   
                <div class="input-group">
             <span class="input-group-addon">Atividade:</span>
		     <input type="text" class="form-control" title="Preencha o campo Nome" required name="atividades_plano" value="<?php echo $atividades_plano; ?>">

		     </div><br>
            
                <div class="form-inline">
                <div class="form-group">   
                <div class="input-group">
                <span class="input-group-addon">Tipo de Plano:</span>  
                <input type="text" class="form-control" title="Preencha o campo Nome" required name="tipo_plano" value="<?php echo $tipo_plano; ?>">
		   
                  </div>
                 <div class="input-group">
                <span class="input-group-addon">Duracao do Plano:</span>
		        <input type="text" class="form-control" title="Preencha o campo Nome" required name="duracao_plano" >
		            </div>
		        
                <div class="input-group">
                <span class="input-group-addon">Numero de aulas:</span>    
		                   <input type="number" class="form-control" title="Preencha o campo Nome" required name="numero_aula" min="1"max="5">
		                   </div></div></div><br>
		                   
		                   <div class="form-inline">
                           <div class="form-group">   
		                   <div class="input-group">
		                   <span class="input-group-addon">Valor da Matricula:</span>           
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="vl_matricula" value="<?php echo $vl_matricula; ?>">
		                   </div>
		                   
		                   <div class="input-group">
		                   		 <span class="input-group-addon">R$</span>
		        <span class="input-group-addon">Valor da Mensalidade:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="vl_mensal" value="<?php echo $vl_mensal; ?>">
		                   <span class="input-group-addon">R$</span>
		                   </div><br><br>
		<div class="input-group">
				        <span class="input-group-addon">Data de Cadastro:</span>
	 <input type="text" class="form-control" title="Preencha o campo Nome" required name="data_cadastro" >
                </div></div><br><br>
                
                
         <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
         <button type="reset" class="btn btn-default">Limpar</button>
         <div class="pull-right">
         <a href="plano.php?tx=<?php echo $id?>" class="btn btn-default btn-sm" role="button">Cancelar</a>  
            </fieldset>
       
        
        </form> 
		 
	</body>
</html>