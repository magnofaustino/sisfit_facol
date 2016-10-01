
<?php
include "menu.php";
?>
<?php


//queri onde faz referencia a class funcionario.

require_once "class_funcionario.php"; 
//conexão com o mysqls.

$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
$nome_fornecedor =$_GET['nome'];
$cpf_funcionario = $_GET['cpf'];
$rg_funcionario = $_GET['rg']; 
$telefone_funcionario = $_GET['telefone'];


//en baixo é a conexão com o banco que ainda p sisfit n foi criado, as informações aqui contidas são referente ao bando do projeto antigo.
if($con){
 echo("banco conectado com sucesso");   
}

// todas as informações aqui a baixo estão desatualizadas, aguardando a criação do banco e de suas respectivas tabelas.

 $s= mysql_select_db("escola") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}

$prd=new Aluno();
$prd->setNome($nome_aluno);
$prd->setCpf($cpf);
$prd->setCurso($curso);


$result = mysql_query("insert into aluno(nome_aluno, cpf, curso) values ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')") or die ("erro ao inserir os dados no bando");
?>



   