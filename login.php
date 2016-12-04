<?php 
include ("conexao.php");

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);





    if (isset($entrar)) {
        
            
    
        
        $result = "select * from usuarios where login = $login or senha = $senha ";
        
        
        $resultadobusca = mysqli_query($conn, $result);
        
        
        
       if (mysqli_num_rows($resultadobusca)<= 0){
            
        //    if($ras = mysqli_fetch_array($resultadobusca)){
            
          echo"<script language='javascript'  type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:home.php");
        }
		
    }
?>