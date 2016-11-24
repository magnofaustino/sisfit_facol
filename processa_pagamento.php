<?php
include ("conexao.php");
?>
<?php

require_once "class_pagamento.php"; 
$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
$nome_aluno =$_POST['nome'];
$cpf = $_POST['descricao'];
$curso = $_POST['telefone']; 

if($con){
 echo("banco conectado com sucesso");   
}


 $s= mysql_select_db("mm") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}

$prd=new Aluno();
$prd->setNome($nome_aluno);
$prd->setDescricao($cpf);
$prd->setTelefone($curso);


$result = mysql_query("insert into fornecedor(nome, descricao, telefone) values ('".$prd->getNome()."', '".$prd->getDescricao()."', '".$prd->getTelefone()."')") or die ("erro ao inserir os dados no bando");


if($result){
    echo("dados inseridos com sucesso");
    
}


?>



   