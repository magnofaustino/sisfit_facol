<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$nome =$_GET['nome'];
$descricao = $_GET['descricao'];
$valor = $_GET['valor']; 
$telefone =$_GET['telefone'];

 


 

$sql = "UPDATE debito SET nome ='$nome',descricao = '$descricao', valor ='$valor', telefone = '$telefone' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "ATUALIZADO COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>