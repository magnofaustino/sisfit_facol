<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$nome =$_GET['nome_1'];
$cpf = $_GET['nome_2'];
$rg = $_GET['nome_3']; 
$telefone =$_GET['nome_4'];
$matricula = $_GET['nome_5'];
$estadocivil = $_GET['nome_6']; 
$nacionalidade =$_GET['nome_7'];
$naturalidade = $_GET['nome_8'];
$ufnaturalidade = $_GET['nome_9']; 
$nascimento =$_GET['nome_10'];
$sexo = $_GET['nome_11'];
$deficiente = $_GET['nome_12']; 
$obs_deficiente =$_GET['nome_13'];


$sql = "UPDATE produtos SET nome='$nome', des ='$cpf', vcusto = '$rg', vvenda = '$telefone', umedida = '$matricula', qproduto = '$estadocivil', grupo = '$nacionalidade', tipo = '$naturalidade', garantia = '$ufnaturalidade', tempgarantia = '$nascimento', garantia = '$sexo', dtcompra = '$deficiente', fornecedor = '$obs_deficiente', bloqueado = '$email' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>