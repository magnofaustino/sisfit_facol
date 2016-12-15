<?php
include ("conexao.php");
?>

<?php

require_once "class_treino.php"; 

echo $nome_1=$_POST['dia'];
$nome_2 =$_POST['n_aluno'];
$nome_3 = $_POST['exercicio'];
$nome_4 = $_POST['serie']; 
$nome_5 =$_POST['repeticao'];
$nome_6 = $_POST['intervalo'];
$nome_7 = $_POST['obs']; 


$prd=new treino();
$prd->setNome_1($nome_1);
$prd->setNome_2($nome_2);
$prd->setNome_3($nome_3);
$prd->setNome_4($nome_4);
$prd->setNome_5($nome_5);
$prd->setNome_6($nome_6);
$prd->setNome_7($nome_7);



$sql = "INSERT INTO segunda( nome, exercicio, serie, repeticao, intervalo, obs) VALUES ('".$prd->getNome_2()."','".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getgetNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."')";



if (mysqli_query($conn, $sql)) {
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>
