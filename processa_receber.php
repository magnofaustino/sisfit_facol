<?php
include ("conexao.php");
?>

<?php

require_once "class_receber.php"; 

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




$prd=new Receber();
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



$sql = "INSERT INTO receber (aluno, nome, descricao, valor, desconto, acrescimo, pago, data_baixa, vencimento, emissao) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."', '".$prd->getNome_8()."', '".$prd->getNome_9()."', '".$prd->getNome_10()."')";



if (mysqli_query($conn, $sql)) {
     echo"<script language='javascript' type='text/javascript'>alert('Cadastro feito com Successo!');window.location.href='receber.php';</script>";
          die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


