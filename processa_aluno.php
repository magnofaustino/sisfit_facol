<?php
include ("conexao.php");
?>

<?php

require_once "class_aluno.php"; 

$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$curso = $_GET['curso']; 






$prd=new Aluno();
$prd->setNome($nome);
$prd->setCpf($cpf);
$prd->setCurso($curso);



      // $sql = "INSERT INTO aluno(nome_aluno, cpf, curso)
//VALUES ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')";


$sql = "INSERT INTO aluno(nome_aluno, cpf, curso)
VALUES ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



   