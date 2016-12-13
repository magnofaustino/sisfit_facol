<?php
include ("conexao_atendente.php");
?>

<?php
$id =$_POST['id'];
$atividade =$_POST['atividade'];
$valor = $_POST['valor'];
$duracao_aula = $_POST['duracao_aula']; 
$atvtemp =$_POST['atvtemp'];
$dtini = $_POST['dtini'];
$dtfim =$_POST['dtfim'];
 


 

$sql = "UPDATE atividades SET atividade ='$atividade', valor ='$valor', duracao_aula = '$duracao_aula', atvtemp = '$atvtemp', dtini = '$dtini', dtfim = '$dtfim' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "Atividade Atualizada com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>