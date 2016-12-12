

<?php


$conn = mysqli_connect('localhost', 'root', 'sos101os', 'sisfit');




require_once "class_usuario.php"; 

$login = $_POST['nome_1'];
$nome_2 = $_POST['nome_2'];
$senha = MD5($_POST['nome_3']); 
$nome_4 = $_POST['nome_4'];
$nome_5 = $_POST['nome_5']; 
$nome_6 = $_POST['nome_6'];





$prd=new Usuario();
$prd->setNome_1($login);
$prd->setNome_2($nome_2);
$prd->setNome_3($senha);
$prd->setNome_4($nome_4);
$prd->setNome_5($nome_5);
$prd->setNome_6($nome_6);



$sql=("SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$prd->getNome_3()'") or die("erro ao selecionar");

$verifica = mysqli_query($conn, $sql);


$array = mysqli_fetch_array($verifica);

$logarray = $array['usuario'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro_usuario.php';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro_usuario.php';</script>";
        die();

      }else{

  






$query = "INSERT INTO usuarios(usuario, nome, senha, contrasenha, email, bloqueado) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."' , '".$prd->getNome_6()."')";

          
          
        $insert = mysqli_query($conn,$query);

 if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='usuarios.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='login.html'</script>";
        }
      }
    }



mysqli_close($conn);
?>


