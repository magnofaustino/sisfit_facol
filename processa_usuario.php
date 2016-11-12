<?php
include ("conexao.php");
?>

<?php

require_once "class_usuario.php"; 

$nome_1 = $_GET['nome'];
$nome_2 = $_GET['descricao'];
$nome_3 = $_GET['valor']; 
$nome_4 = $_GET['telefone'];
$nome_5= $_GET['valor']; 
$nome_6= $_GET['telefone'];





$prd=new Usuario();
$prd->setNome_1($nome_1);
$prd->setNome_2($nome_2);
$prd->setNome_3($nome_3);
$prd->setNome_4($nome_4);
$prd->setNome_5($nome_5);
$prd->setNome_6($nome_6);




  






$sql = "INSERT INTO usuario(usuario, nome, senha, contrasenha, email, fornecedor) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."' , '".$prd->getNome_6()."')";



if (mysqli_query($conn, $sql)) {
    echo "DEBITO INSERIDO COM SUCESSO";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


