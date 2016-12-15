<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);




$conn = mysqli_connect('localhost', 'root', 'sos101os', 'sisfit');

$sql=("SELECT * FROM segunda WHERE nome = '$login' ") or die("erro ao selecionar");


    if (isset($entrar)) {
            
      if($verifica = mysqli_query($conn, $sql)){
        
		
		if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login_aluno.html';</script>";
          die();
			
			 }else{
			($ras = mysqli_fetch_array($verifica));
			$nome = $ras['nome'];
            
            setcookie("login",$nome);
            header("Location:home_aluno.php");
				
	
         
          die();
            }
		}
		}
    
	
?>