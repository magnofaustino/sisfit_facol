




<?php
    
     include ("conexao.php"); 
    
    $id = $_COOKIE['login'];
    
    $segunda = '';
    $result = "select * from $segunda";
    $resultado = mysqli_query($conn, $result);
?>
    
<html>
	<head>
		<title>Avalicao</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
             
<div class="container">
    <div class="row"><br><br><br>
          <form action="processa_treino.php" method="POST" >
           <div class="input-group">
               
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Aluno:</span>
                    <input type="text" class="form-control" title="Preencha o campo E-mail" required name="nome_5" value="<?php echo $id; ?>">
                </div>
                    <div class="input-group">
                    <span class="input-group-addon">Dia da Semana:</span>
                        <label class="form-control">  
                        <input type="radio" name="usuario" value="1" <?php if($usuario == "1") echo "checked" ?>> segunda
                        <input type="radio" name="usuario" value="2" <?php if($usuario == "2") echo "checked" ?>>  Terça
                             <input type="radio" name="usuario" value="3" <?php if($usuario == "3") echo "checked" ?>>  Quarta
                        </label>
                </div></div><br><br><br>
               
               
                 
               <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
        
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Treino</h3>
                <div class="pull-right">

                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Execício" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Serie" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Repetoções" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Intervalo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Observações" disabled></th>
                       
                        
                        </tr>
                </thead>
                <tbody>
                    <tr>
                           <?php
        while($ras = mysqli_fetch_assoc($resultado)){ 
                   $id = $ras['id'];
            
      ?> 
                        <td><?php echo $ras['exercicio'];?></td>
                        <td><?php echo $ras['serie'];?></td>
                        <td><?php echo $ras['repeticao'];?></td>
                         <td><?php echo $ras['intervalo'];?></td>
                         <td><?php echo $ras['obs'];?></td>
                       
                        

                    </tr>
                    
                    <?php
        }
            ?>
                
                </tbody>
            </table>
           
                </div>
             </fieldset>
    </div>
</div>
            </body>
</html>