<?php
include ("conexao.php");
?>

<?php

require_once "class_fornecedor.php"; 

$razao =$_POST['razao'];
$nome_fantasia = $_POST['nome_fantasia'];
$tipo = $_POST['tipo'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];





$prd=new Fornecedor();
$prd->setRazao($razao);
$prd->setNome_fantasia($nome_fantasia);
$prd->setTipo($tipo);
$prd->setCpf_cnpj($cpf_cnpj);
$prd->setTelefone($telefone);
$prd->setEmail($email);
$prd->setEndereco($endereco);
$prd->setBairro($bairro);
$prd->setmunicipio($municipio);
$prd->setNumero($numero);
$prd->setCep($cep);
    


$sql = "INSERT INTO fornecedor(razao, nome_fantasia, tipo, cpf_cnpj, telefone, email, endereco, bairro, municipio, numero, cep) VALUES ('".$prd->getRazao()."', '".$prd->getNome_fantasia()."', '".$prd->getTipo()."', '".$prd->getCpf_cnpj()."', '".$prd->getTelefone()."', '".$prd->getEmail()."', '".$prd->getEndereco()."', '".$prd->getBairro()."', '".$prd->getMunicipio()."', '".$prd->getNumero()."', '".$prd->getCep()."' )";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



   