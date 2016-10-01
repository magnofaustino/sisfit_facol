
<?php
include "menu.php";
?>
<?php


//queri onde faz referencia a class funcionario.

require_once "class_pagamentos.php"; 
//conexão com o mysqls.

$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
$nome =$_GET['nome_do_resposavel'];
$descricao = $_GET['descricao'];
$telefone= $_GET['telefone'];


//en baixo é a conexão com o banco que ainda p sisfit n foi criado, as informações aqui contidas são referente ao bando do projeto antigo.
if($con){
echo("banco conectado com sucesso");   
}

// todas as informações aqui a baixo estão desatualizadas, aguardando a criação do banco e de suas respectivas tabelas.

 $s= mysql_select_db("txt") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}

$prd=new Pagamento();
$prd->setNome_do_resposavel(Nome_do_resposavel);
$prd->setDescricao($descricao);
$prd->setTelefone($telefone);

// a baixo falta incluir alguns dados no banco, está dessa forma para facilitar os testes..


$result = mysql_query("insert into txt(nome_do_resposavel, descricao, telefone) values ('".$prd->getNome_do_resposavel()."','".$prd->getDescricao()."', '".$prd->getTelefone()."')") or die ("erro ao inserir os dados no bando");

?>



   