<?php
include ("conexao.php");
?>

<?php

require_once "class_Empresa.php"; 

$razao =$_GET['razao'];
$nome_fantasia = $_GET['nome_fantasia'];
$tipo = $_GET['tipo'];
$cpf_cnpj = $_GET['cpf_cnpj'];
$insc_estadual = $_GET['insc_estadual'];
$insc_municipal = $_GET['insc_municipal'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];
$complemento = $_GET['complemento'];
$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$municipio = $_GET['municipio'];
$numero = $_GET['numero'];
$cep = $_GET['cep'];





$prd=new Empresa();
$prd->setRazao($razao);
$prd->setNome_fantasia($nome_fantasia);
$prd->setTipo($tipo);
$prd->setCpf_cnpj($cpf_cnpj);
$prd->setInsc_estadual($insc_estadual);
$prd->setInsc_municipal($insc_municipal);
$prd->setTelefone($telefone);
$prd->setEmail($email);
$prd->setComplemento($complemento);
$prd->setEndereco($endereco);
$prd->setBairro($bairro);
$prd->setMunicipio($municipio);
$prd->setNumero($numero);
$prd->setCep($cep);
    


$sql = "INSERT INTO empresa(razao, nome_fantasia, tipo, cpf_cnpj, insc_estadual, insc_municipal, telefone, email, complemento, endereco, bairro, municipio, numero, cep) VALUES ('".$prd->getRazao()."', '".$prd->getNome_fantasia()."', '".$prd->getTipo()."', '".$prd->getCpf_cnpj()."', '".$prd->getInsc_estadual()."','".$prd->getInsc_municipal()."' ,'".$prd->getTelefone()."', '".$prd->getEmail()."', '".$prd->getComplemento()."' , '".$prd->getEndereco()."', '".$prd->getBairro()."', '".$prd->getMunicipio()."', '".$prd->getNumero()."', '".$prd->getCep()."' )";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



   