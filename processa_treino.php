<?php
include ("conexao.php");
?>

<?php

require_once "class_treino.php"; 


$nome_0 = $_POST['dia'];
$nome_1 = $_POST['nome_1'];
$nome_2 = $_POST['nome_2'];
$nome_3 = $_POST['nome_3']; 
$nome_4 = $_POST['nome_4'];
$nome_5 = $_POST['nome_5'];
$nome_6 = $_POST['nome_6'];


$prd=new Treino();

$prd->setNome_0($nome_0);
$prd->setNome_1($nome_1);
$prd->setNome_2($nome_2);
$prd->setNome_3($nome_3);
$prd->setNome_4($nome_4);
$prd->setNome_5($nome_5);
$prd->setNome_6($nome_6);


$sql = "INSERT INTO segunda ( dia, nome, exercicio, serie, repeticao, intervalo, obs) VALUES ('".$prd->getNome_0()."','".$prd->getNome_1()."','".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."')";



if (mysqli_query($conn, $sql)) {
     echo"<script language='javascript' type='text/javascript'>alert('Cadastro feito com Successo!');window.location.href='treino.php';</script>";
          die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


