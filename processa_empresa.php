<?php
include ("conexao.php");
?>

<?php

require_once "class_Empresa.php"; 

$razao =$_POST['razao'];
$nome_fantasia = $_POST['nome_fantasia'];
$tipo = $_POST['tipo'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$insc_estadual = $_POST['insc_estadual'];
$insc_municipal = $_POST['insc_municipal'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$complemento = $_POST['complemento'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];





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
        echo"<script language='javascript' type='text/javascript'>alert('Cadastro feito com Successo!');window.location.href='cadastro_empresa.php';</script>";
          die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



   