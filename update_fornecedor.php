<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$razao =$_GET['razao'];
$nome_fantasia = $_GET['nome_fantasia'];
$tipo = $_GET['tipo']; 
$cpf_cnpj =$_GET['cpf_cnpj'];
$telefone = $_GET['telefone'];
$email =$_GET['email'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro']; 
$cidade =$_GET['cidade'];
$numero = $_GET['numero'];
$cep = $_GET['cep']; 


 

$sql = "UPDATE fornecedor SET razao='$razao', nome_fantasia ='$nome_fantasia', tipo = '$tipo', cpf_cnpj = '$cpf_cnpj', telefone = '$telefone', email = '$email', bairro = '$bairro', municipio = '$cidade', numero = '$numero', cep = '$cep' WHERE id= $id";





if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>