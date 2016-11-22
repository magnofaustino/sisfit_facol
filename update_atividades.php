<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$atividade =$_GET['atividade'];
$valor = $_GET['valor'];
$duracao_aula = $_GET['duracao_aula']; 
$atvtemp =$_GET['atvtemp'];
$dtini = $_GET['dtini'];
$dtfim =$_GET['dtfim'];
 


 

$sql = "UPDATE atividades SET atividade ='$atividade', valor ='$valor', duracao_aula = '$duracao_aula', atvtemp = '$atvtemp', dtini = '$dtini', dtfim = '$dtfim' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "Atividade Atualizada com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>