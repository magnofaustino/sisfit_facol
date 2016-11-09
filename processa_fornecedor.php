<?php
include ("conexao.php");
?>

<?php

require_once "class_fornecedor.php"; 

$razao =$_GET['razao'];
$nome_fantasia = $_GET['nome_fantasia'];
echo $tipo = $_GET['tipo'];
$cpf_cnpj = $_GET['cpf_cnpj'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$municipio = $_GET['municipio'];
$numero = $_GET['numero'];
$cep = $_GET['cep'];





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



   