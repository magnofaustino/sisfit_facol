 <?php
include ("conexao.php");

$id = $_GET['tx'];

$result = "select * from usuario where id = $id";

      $resultadobusca = mysqli_query($conn, $result);
        while($ras = mysqli_fetch_array($resultadobusca)){
    
           $login = $ras['login'];
           $nome = $ras['nome'];
           $senha = $ras['senha'];
           $contrasenha = $ras['contrasenha'];
           $email = $ras['email'];
           $usuario = $ras['usuario'];
              

}
?>


<html>
	<head>
		<title>Cadastro de Usuario</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_usuario.php" method="POST" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Usuario</h4></div>
                <div class="panel-body">  
                <div class="input-group">
                    <span class="input-group-addon">Usuario:</span>
                    <input type="text" class="form-control" title="Preencha o campo Usuario" required name="nome_1"  value="<?php echo $login; ?>" >
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Nome Completo:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="nome_2"  value="<?php echo $nome; ?>" >
                </div><br>
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Senha:</span>
                    <input type="password" class="form-control" title="Preencha o campo Senha" required name="nome_3"  value="<?php echo $senha; ?>" sgo>
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Confirma Senha:</span>
                    <input type="password" class="form-control" title="Preencha o campo Confirma Senha" required name="nome_4"  value="<?php echo $contrasenha; ?>">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></a></span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">E-mail:</span>
                    <input type="email" class="form-control" title="Preencha o campo E-mail" required name="nome_5" value="<?php echo $email; ?>">
                </div>
                    <div class="input-group">
                    <span class="input-group-addon">Permissão:</span>
                        <label class="form-control">  
                        <input type="radio" name="usuario" value="1" <?php if($usuario == "1") echo "checked" ?>>  Gerente
                        <input type="radio" name="usuario" value="2" <?php if($usuario == "2") echo "checked" ?>>  Pesonal
                             <input type="radio" name="usuario" value="3" <?php if($usuario == "3") echo "checked" ?>>  Atendente
                        </label>
                </div></div><br><br><br>
                
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="usuarios.php"     class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>