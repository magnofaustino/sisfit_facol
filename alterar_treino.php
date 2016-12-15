<?php
    $id = $_GET['tx'];
     include ("conexao.php"); 


$result = "select * from segunda where id = $id";
        
        $resoltadobusca = mysqli_query($conn, $result);
          while($ras = mysqli_fetch_array($resoltadobusca)){
              
            $dia = $ras['dia'];
              $nome = $ras['nome'];
              $exercicio = $ras['exercicio'];
              $serie = $ras['serie'];
              $repeticao = $ras['repeticao'];
              $intervalo = $ras['intervalo'];
              $obs = $ras['obs'];
          }
     ?>
          
          

<html>
	<head>
		<title>Alterar Treino</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_treinoa.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Treino</h4></div>
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                <div class="panel-body">
                 
                         <div class="input-group">
                    <span class="input-group-addon">Nome aluno:</span>
                   <input type="text" class="form-control" required name="nome" value="<?php echo $nome; ?>">
                              
                      </div><br>
  
	   <div class="input-group">
                    <span class="input-group-addon">Dia da Semana:</span>
                        <label class="form-control">  
                        <input type="radio" name="dia" value="1" <?php if($dia == "1") echo "checked" ?> > segunda
                        <input type="radio" name="dia" value="2" <?php if($dia == "2") echo "checked" ?>>  Terça
                             <input type="radio" name="dia" value="3" <?php if($dia == "3") echo "checked" ?>>  Quarta
                            
                              <input type="radio" name="dia" value="4" <?php if($dia == "4") echo "checked" ?>>  Quinta
                              <input type="radio" name="dia" value="5" <?php if($dia == "5") echo "checked" ?>>  Sexta
                        </label>
                </div><br>
               
               <div class="form-inline">
               <div class="form-group">
               <div class="input-group">
                    <span class="input-group-addon">Series:</span>
                   <input type="text" class="form-control" required name="serie"size="8" value="<?php echo $exercicio; ?>">
                      </div>
                <div class="input-group">
                    <span class="input-group-addon">Exercicio</span>
                    <input type="text" class="form-control" required name="exercicio"size="21"value="<?php echo $serie; ?>">
                   
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Repetição:</span>
                    <input type="text" class="form-control" required name="repeticao"size="20" value="<?php echo $repeticao; ?>">
                   
                </div></div><br><br>
                    
                    <div class="input-group">   
                    <span class="input-group-addon">Intervalo:</span>
                    <input type="time" class="form-control" required name="intervalo"size="14" value="<?php echo $intervalo; ?>">
                    </div>                    
                    
                    <div class="input-group">   
                    <span class="input-group-addon">Observação</span>
                    <input type="text" class="form-control" required name="obs"size="19" value="<?php echo $obs; ?>">
                    </div>
                    
                   <br><br>
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
               
                <div class="pull-right">
                    <a href="treino.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>
