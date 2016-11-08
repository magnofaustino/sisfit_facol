<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg']; 
$telefone =$_GET['telefone'];
$matricula = $_GET['matricula'];
$estadocivil = $_GET['estadocivil']; 
$nacionalidade =$_GET['nacionalidade'];
$naturalidade = $_GET['naturalidade'];
$ufnaturalidade = $_GET['ufnaturalidade']; 
$nascimento =$_GET['nascimento'];
$sexo = $_GET['sexo'];
$deficiente = $_GET['deficiente']; 
echo $obs_deficiente =$_GET['obs_deficiente'];
$email= $_GET['email'];
$plano = $_GET['plano']; 
$bolsa=$_GET['bolsa'];
$tipo_bolsa= $_GET['tipo_bolsa'];
$horario = $_GET['horario']; 
$dt_cadastro =$_GET['dt_cadastro'];

$endereco = $_GET['endereco'];
$numero= $_GET['numero']; 
$bairro =$_GET['bairro'];
$cep = $_GET['cep'];
$orgao_emissor = $_GET['orgao_amissor']; 

$sql = "UPDATE tb_aluno SET nome='$nome', cpf ='$cpf', rg = '$rg', telefone = '$telefone', matricula = '$matricula', est_civil = '$estadocivil', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', uf_natur = '$ufnaturalidade', dt_nasc = '$nascimento', sexo = '$sexo', deficiente = '$deficiente', obs_def = '$obs_deficiente', email = '$email', plano = '$plano', bolsa = '$bolsa', tipo_bolsa = '$tipo_bolsa', h_treino = '$horario', dt_cadastro = '$dt_cadastro', rua = '$endereco', numero = '$numero', bairro = '$bairro', cep = '$cep', orgao_emissor = '$orgao_emissor' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>