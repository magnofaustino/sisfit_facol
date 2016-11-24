<?php
include ("conexao.php");
?>

<?php

require_once "class_produto.php"; 

$nome_1 = $_POST['nome_1'];
$nome_2 = $_POST['nome_2'];
$nome_3 = $_POST['nome_3']; 
$nome_4 = $_POST['nome_4'];
$nome_5 = $_POST['nome_5'];
$nome_6 = $_POST['nome_6']; 
$nome_7 = $_POST['nome_7'];
$nome_8 = $_POST['nome_8'];
$nome_9 = $_POST['nome_9'];
$nome_10 = $_POST['nome_10'];
$nome_11 = $_POST['nome_11'];
$nome_12 = $_POST['nome_12']; 
$nome_13 = $_POST['nome_13']; 
$nome_14 = $_POST['nome_14']; 




$prd=new Produto();
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
$prd->setNome_11($nome_11);
$prd->setNome_12($nome_12);
$prd->setNome_13($nome_13);
$prd->setNome_14($nome_14);

$sql = "INSERT INTO produtos(nome, des, vcusto, vvenda, umedida, qproduto, grupo, tipo, garantia, tempgarantia, periodo, dtcompra, fornecedor, bloqueado) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."', '".$prd->getNome_8()."', '".$prd->getNome_9()."', '".$prd->getNome_10()."', '".$prd->getNome_11()."', '".$prd->getNome_12()."', '".$prd->getNome_13()."', '".$prd->getNome_14()."')";



if (mysqli_query($conn, $sql)) {
    echo "Produto Cadastrado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>



   