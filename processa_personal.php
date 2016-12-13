<?php
include ("conexao.php");
?>

<?php

require_once "class_personal.php"; 

$nome_1 = $_POST['nome'];
$nome_2 = $_POST['cpf'];
$nome_3 = $_POST['rg']; 
$nome_4 = $_POST['telefone'];
$nome_5 = $_POST['estadocivil'];
$nome_6 = $_POST['nacionalidade']; 
$nome_7 = $_POST['naturalidade'];
$nome_8 = $_POST['ufnaturalidade'];

$nome_9 = $_POST['dt_nascimento'];

$nome_10 = $_POST['sexo'];
$nome_11 = $_POST['email'];
$nome_12 = $_POST['horario']; 
$nome_13 = $_POST['dt_cadastro'];
$nome_14 = $_POST['endereco']; 

$nome_15 = $_POST['numero'];
$nome_16 = $_POST['bairro'];
$nome_17 = $_POST['cep']; 
$nome_18 = $_POST['orgao_emissor'];




$prd=new Personal();
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
$prd->setNome_15($nome_15);
$prd->setNome_16($nome_16);
$prd->setNome_17($nome_17);
$prd->setNome_18($nome_18);

  






$sql = "INSERT INTO personal(nome, cpf, rg, telefone, estadocivil, nacionalidade, naturalidade, uf_naturalidade, dt_nascimento, sexo, email, horario,  dt_cadastro, endereco, numero, bairro, cep, orgao_emissor) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."', '".$prd->getNome_8()."', '".$prd->getNome_9()."', '".$prd->getNome_10()."', '".$prd->getNome_11()."', '".$prd->getNome_12()."', '".$prd->getNome_13()."', '".$prd->getNome_14()."' , '".$prd->getNome_15()."', '".$prd->getNome_16()."', '".$prd->getNome_17()."' , '".$prd->getNome_18()."')";



if (mysqli_query($conn, $sql)) {
   echo"<script language='javascript' type='text/javascript'>alert('Cadastro feito com Successo!');window.location.href='personal.php';</script>";
          die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>



   