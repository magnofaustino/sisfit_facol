<?php
include ("conexao.php");
?>

<?php
$id =$_POST['id'];
$nome =$_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg']; 
$telefone =$_POST['telefone'];
$matricula = $_POST['matricula'];
$estadocivil = $_POST['estadocivil']; 
$nacionalidade =$_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$ufnaturalidade = $_POST['ufnaturalidade']; 
$nascimento =$_POST['nascimento'];
$sexo = $_POST['sexo'];
$deficiente = $_POST['deficiente']; 
$obs_deficiente =$_POST['obs_deficiente'];
$email= $_POST['email'];
$plano = $_POST['plano']; 
$bolsa=$_POST['bolsa'];
$tipo_bolsa= $_POST['tipo_bolsa'];
$horario = $_POST['horario']; 
$dt_cadastro =$_POST['dt_cadastro'];
$endereco = $_POST['endereco'];
$numero= $_POST['numero']; 
$bairro =$_POST['bairro'];
$cep = $_POST['cep'];
$orgao_emissor = $_POST['orgao_amissor']; 
$limitacao = $_POST ['limitacao'];
$tipo_lim = $_POST ['tipo_lim'];

$sql = "UPDATE tb_aluno SET nome='$nome', cpf ='$cpf', rg = '$rg', telefone = '$telefone', matricula = '$matricula', est_civil = '$estadocivil', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', uf_natur = '$ufnaturalidade', dt_nasc = '$nascimento', sexo = '$sexo', deficiente = '$deficiente', obs_def = '$obs_deficiente', email = '$email', plano = '$plano', bolsa = '$bolsa', tipo_bolsa = '$tipo_bolsa', h_treino = '$horario', dt_cadastro = '$dt_cadastro', rua = '$endereco', numero = '$numero', bairro = '$bairro', cep = '$cep', orgao_emissor = '$orgao_emissor',limitacao='$limitacao', tipo_lim='$tipo_lim' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "Aluno Atualizado com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>