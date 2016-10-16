<?php
include ("conect.php");
?>

<?php

require_once "class_aluno.php"; 

$nome_aluno =$_GET['nome_aluno'];
$cpf = $_GET['cpf'];
$curso = $_GET['curso']; 






$prd=new Aluno();
$prd->setNome($nome_aluno);
$prd->setCpf($cpf);
$prd->setCurso($curso);


$result = mysqli_query("insert into aluno(nome_aluno, cpf, curso) values ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')") or die ("erro ao inserir os dados no bando");


if($result){
    echo("dados inseridos com sucesso");
    
}


?>



   