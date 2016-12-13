<?php
include ("conexao.php");
?>

<?php
$id =$_POST['id'];
$nome =$_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg']; 
$telefone =$_POST['telefone'];
$estadocivil = $_POST['estadocivil'];
$nacionalidade =$_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$ufnaturalidade = $_POST['ufnaturalidade']; 
$dt_nascimento =$_POST['dt_nascimento'];
$sexo = $_POST['sexo'];
$email = $_POST['email']; 
$horario =$_POST['horario'];
$dt_cadastro= $_POST['dt_cadastro'];
$endereco = $_POST['endereco']; 
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep']; 
$orgao_emissor =$_POST['orgao_emissorr'];

 

$sql = "UPDATE personal SET nome='$nome', cpf ='$cpf', rg = '$rg', telefone = '$telefone', estadocivil = '$estadocivil', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', uf_naturalidade = '$ufnaturalidade', dt_nascimento = '$dt_nascimento', sexo = '$sexo', email = '$email', horario = '$horario', dt_cadastro = '$dt_cadastro', endereco = '$endereco', numero = '$numero', bairro = '$bairro', cep = '$cep', orgao_emissor = 'orgao_emissor' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
      echo"<script language='javascript' type='text/javascript'>alert('Atulização feita com Successo');window.location.href='personal.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>