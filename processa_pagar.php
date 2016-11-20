<?php
include ("conexao.php");
?>

<?php

require_once "class_pagar.php"; 

$nome_1 = $_GET['nome_1'];
$nome_2 = $_GET['nome_2'];
$nome_3 = $_GET['nome_3']; 
$nome_4 = $_GET['nome_4'];
$nome_5 = $_GET['nome_5'];
$nome_6 = $_GET['nome_6'];
$nome_7 = $_GET['nome_7']; 
$nome_8 = $_GET['nome_8'];
$nome_9 = $_GET['nome_9'];
$nome_10 = $_GET['nome_10'];




$prd=new Pagar();
$prd->setNome_1($nome_1);
$prd->setNome_2($nome_2);
$prd->setNome_3($nome_3);
$prd->setNome_4($nome_4);
$prd->setNome_5($nome_5);
$prd->setNome_6($nome_6);
$prd->setNome_7($nome_7);
$prd->setNome_8($nome_8);
$prd->setNome_9($nome_9);
$prd->setNome_10($nome_10);



$sql = "INSERT INTO pagar (fornecedor, nome, descricao, valor, desconto, acrescimo, pago, data_baixa, vencimento, emissao) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."', '".$prd->getNome_8()."', '".$prd->getNome_9()."', '".$prd->getNome_10()."')";



if (mysqli_query($conn, $sql)) {
    echo "Contas a pagar inserido com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


