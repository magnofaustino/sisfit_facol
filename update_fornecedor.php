<?php
include ("conexao.php");
?>

<?php
$id =$_POST['id'];
$razao =$_POST['razao'];
$nome_fantasia = $_POST['nome_fantasia'];
$tipo = $_POST['tipo']; 
$cpf_cnpj =$_POST['cpf_cnpj'];
$telefone = $_POST['telefone'];
$email =$_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro']; 
$cidade =$_POST['cidade'];
$numero = $_POST['numero'];
$cep = $_POST['cep']; 


 

$sql = "UPDATE fornecedor SET razao='$razao', nome_fantasia ='$nome_fantasia', tipo = '$tipo', cpf_cnpj = '$cpf_cnpj', telefone = '$telefone', email = '$email', bairro = '$bairro', municipio = '$cidade', numero = '$numero', cep = '$cep' WHERE id= $id";





if (mysqli_query($conn, $sql)) {
    echo "Cadastro de Fornecedor Atualizado com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>