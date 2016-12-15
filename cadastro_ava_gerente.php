<?php


include "conexao.php";
?>
<html>
	<head>
		<title>Cadastro de Treinamento Fisico</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="c_treino_ge.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>cadastro de Treinamento</h4></div>
                <div class="panel-body">
                    
                           <div class="input-group">
                    <span class="input-group-addon">Dia da semana:</span>
                        <label class="form-control">  
        <input type="radio" name="dia" value="1" <?php if($usuario == "1") echo "checked" ?>>  Segunda.
        <input type="radio" name="dia" value="2" <?php if($usuario == "2") echo "checked" ?>>  Terça.               <input type="radio" name="dia" value="3" <?php if($usuario == "3") echo "checked" ?>>  Quarta.      
        <input type="radio" name="dia" value="4" <?php if($usuario == "3") echo "checked" ?>>  Quinta.
        <input type="radio" name="dia" value="5" <?php if($usuario == "3") echo "checked" ?>>  Sexta.
                               </label>
                </div></div><br>
                
                <div class="input-group">
                    <span class="input-group-addon"> Aluno:</span>
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
                    <span class="input-group-addon">Exercício:</span>
                    <input type="text" class="form-control" title="Preencha o campo " required name="exercicio">
                      </div><br>

                    <div class="input-group">
                    <span class="input-group-addon">Série:</span>
                    <input type="text" class="form-control" title="Preencha o campo" required name="serie">
                    </div><br>
                  
                    <div class="input-group">
                    <span class="input-group-addon">Repetição:</span>
                    <input type="text" class="form-control" title="Preencha o campo " required name="repeticao">
                    </div><br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">Intervalo:</span>
                    <input type="text" class="form-control" title="Preencha o campo" required name="intervalo">
                    </div><br>
                    
                
                <div class="input-group">
                <span class="input-group-addon">Observações:</span>
                <input type="text" class="form-control" title="Preencha o campo " required name="obs">
                </div><br>
                
               
                
                
                <button type="submit"  name="sub" class="btn btn-default">Cadastrar</button>
                
                <div class="pull-right">
                <a href="home.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>