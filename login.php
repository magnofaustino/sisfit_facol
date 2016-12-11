<?php

include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$login'");    


while($linha = mysqli_fetch_array($sql))
{
    $senha_db = $linha['senha'];
    $login_db = $linha['usuario'];
}

$cont = mysqli_num_rows($sql);

if($login_db != $login || $login == "")
{       
    
    echo "<meta http-equiv='refresh' content='0; url=login.html'>
    <script type='text/javascript'>alert('Este usuario não existe')</script>";   
    sleep(3);
}
else
{
    if($senha_db != $senha )
    {
       
        echo "<meta http-equiv='refresh' content='0; url=login.html'>
        <script type='text/javascript'>alert('Senha incorreta')</script>";  
          sleep(2);
    }
    else
    {
        

      

        sleep(2);
("Location: home.php ");
    }
}

mysqli_close($conn);

?>