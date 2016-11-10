<?php
include ("conexao.php");
?>

<?php

require_once "class_debito.php"; 

$nome_1 = $_GET['nome'];
$nome_2 = $_GET['descricao'];
$nome_3 = $_GET['valor']; 
$nome_4 = $_GET['telefone'];





$prd=new Debito();
$prd->setNome_1($nome_1);
$prd->setNome_2($nome_2);
$prd->setNome_3($nome_3);
$prd->setNome_4($nome_4);




  






$sql = "INSERT INTO debito(nome, descricao, valor, telefone) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."')";



if (mysqli_query($conn, $sql)) {
    echo "DEBITO INSERIDO COM SUCESSO";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


