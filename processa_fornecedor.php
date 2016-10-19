<?php
include ("conexao.php");
?>

<?php

require_once "class_fornecedor.php"; 

$razao =$_GET['razao'];
$nome_fantasia = $_GET['nome_fantasia'];
$tipo = $_GET['tipo'];
$cpf_cnpj = $_GET['cpf_cnpj'];
$telefone = $_GET['telefone'];






$prd=new Fornecedor();
$prd->setRazao($razao);
$prd->setNome_fantasia($nome_fantasia);
$prd->setTipo($tipo);
$prd->setCpf_cnpj($cpf_cnpj);
$prd->setTelefone($telefone);



      // $sql = "INSERT INTO aluno(nome_aluno, cpf, curso)
//VALUES ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')";


$sql = "INSERT INTO funcionario(nome, cpf, rg, telerone, matricula)
VALUES ('".$prd->getRazao()."', '".$prd->getNome_fantasia()."', '".$prd->getTipo()."', '".$prd->getCpf_cnpj()."', '".$prd->getTelefone()."' )";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



   