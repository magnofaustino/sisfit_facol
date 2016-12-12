<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);


  //$connect = mysql_connect('localhost','root','sos101os');
  //$db = mysql_select_db('seila');

$conn = mysqli_connect('localhost', 'root', 'sos101os', 'sisfit');

$sql=("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");

    if (isset($entrar)) {
            
      if($verifica = mysqli_query($conn, $sql)){
        
		
		if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
			
			 }else{
			($ras = mysqli_fetch_array($verifica));
			$usuario = $ras['usuario'];
			
			if($usuario == 1){
				
          header("Location:home_atendente.php");
				
			}else if($usuario == 3){
              
				 header("Location:home.php");	
        
	  }
     }
		}
		}
    
	
?>