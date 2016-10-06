

<?php

require_once "class_aluno.php"; 
$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
$nome_aluno =$_GET['nome'];
$cpf = $_GET['cpf'];
$curso = $_GET['curso']; 

if($con){
 echo("banco conectado com sucesso");   
}


 $s= mysql_select_db("escola") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}

$prd=new Aluno();
$prd->setNome($nome_aluno);
$prd->setCpf($cpf);
$prd->setCurso($curso);


$result = mysql_query("insert into aluno(nome, cpf, curso) values ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')") or die ("erro ao inserir os dados no bando");


if($result){
    echo("dados inseridos com sucesso");
    
}


?>



   