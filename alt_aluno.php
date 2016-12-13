<?php
 include ("menu_atendente.php"); 
?>
<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<title>Validação de formulários em HTML5</title> 
</head> 
<body> 
<form method="POST" action="processa_cad_usuario.php">
			Nome: <input type="text" name="txt_nome_usuario" placeholder="Digite o nome completo"><br><br>
			E-mail: <input type="email" name="txt_email_usuario" placeholder="Digite o Email"><br><br>
			Senha: <input type="password" name="txt_senha_usuario" placeholder="Digite a senha"><br><br>
			Níveis de Acesso: 
				<select name="select_niveis_acesso">
					<option>Selecione</option>
					<?php
						$result_niveis_acessos = "SELECT * FROM fornecedor";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['razao']; ?></option> <?php
						}
					?>
				</select><br><br>
        
        <input type=submit value="OK"/> 
	</form> 
    
</body> 
</html>