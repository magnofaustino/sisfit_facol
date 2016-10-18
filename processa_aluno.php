<?php
include ("conexao.php");
?>

<?php



$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$curso = $_GET['curso']; 









//$result = mysqli_query("insert into aluno(nome_aluno, cpf, curso) values ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getCurso()."')") or die ("erro ao inserir os dados no bando");




$sql = "INSERT INTO aluno(nome_aluno, cpf, curso)
VALUES ('$nome', '$cpf', '$curso')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



   