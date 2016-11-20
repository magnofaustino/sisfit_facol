<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg']; 
$telefone =$_GET['telefone'];
$estadocivil = $_GET['estadocivil'];
$nacionalidade =$_GET['nacionalidade'];
$naturalidade = $_GET['naturalidade'];
$ufnaturalidade = $_GET['ufnaturalidade']; 
$dt_nascimento =$_GET['dt_nascimento'];
$sexo = $_GET['sexo'];
$email = $_GET['email']; 
$horario =$_GET['horario'];
$dt_cadastro= $_GET['dt_cadastro'];
$endereco = $_GET['endereco']; 
$numero = $_GET['numero'];
$bairro = $_GET['bairro'];
$cep = $_GET['cep']; 
$orgao_emissor =$_GET['orgao_emissorr'];

 

$sql = "UPDATE personal SET nome='$nome', cpf ='$cpf', rg = '$rg', telefone = '$telefone', estadocivil = '$estadocivil', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', uf_naturalidade = '$ufnaturalidade', dt_nascimento = '$dt_nascimento', sexo = '$sexo', email = '$email', horario = '$horario', dt_cadastro = '$dt_cadastro', endereco = '$endereco', numero = '$numero', bairro = '$bairro', cep = '$cep', orgao_emissor = 'orgao_emissor' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>