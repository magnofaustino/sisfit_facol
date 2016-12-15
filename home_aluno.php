




<?php
    
     include ("conexao_aluno.php"); 
    
    $id = $_COOKIE['login'];
    
    $usuario = '';
   
?>
    
<html>
	<head>
		<title>Avalicao</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
             
<div class="container">
    <div class="row"><br><br><br>
          <form action="#" method="POST" >
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
                            
                              <input type="radio" name="usuario" value="4" <?php if($usuario == "3") echo "checked" ?>>  Quinta
                              <input type="radio" name="usuario" value="5" <?php if($usuario == "3") echo "checked" ?>>  Sexta
                        </label>
                </div></div><br><br><br>
               
               
                 
               <button type="submit"  name="sub" class="btn btn-default">Visualizar</button>
                <div class="pull-right">
                    <a href="login_aluno.html" class="btn btn-default btn-sm" role="button">Sair</a>  
                </div>
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
    
    $nome = $_POST['nome_5'];
                               
     $dia = $_POST['usuario'];
     $result=("SELECT * FROM segunda WHERE dia = '$dia' AND nome = '$nome'") or die("erro ao selecionar");

    $resultado = mysqli_query($conn, $result);
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