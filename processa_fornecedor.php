<?php
include "menu.php";
?>

<?php

require_once "class_fornecedor.php"; 
$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
$nome_fornecedor =$_GET['nome_fornecedor'];
$cpf = $_GET['cpf_cnpj'];
$telefone = $_GET['telefone']; 

if($con){
 echo("banco conectado com sucesso");   
}


 $s= mysql_select_db("sisfit") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}

$prd=new fornecedor();
$prd->setNome($nome_fornecedor);
$prd->setCpf($cpf_cnpj);
$prd->setCurso($telefone);


$result = mysql_query("insert into fornecedor(nome_fornecedor) values ('".$prd->getNome()."')") or die ("erro ao inserir os dados no bando");

if($result){

echo("banco inserido sucesso");
}

?>



   