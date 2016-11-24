<?php
include ("conexao.php");
?>

<?php
$id =$_GET['id'];
$nome_1 = $_POST['nome_1'];
$nome_2 = $_POST['nome_2'];
$nome_3 = $_POST['nome_3']; 
$nome_4 = $_POST['nome_4'];
$nome_5 = $_POST['nome_5'];
$nome_6 = $_POST['nome_6'];
$nome_7 = $_POST['nome_7']; 
$nome_8 = $_POST['nome_8'];
$nome_9 = $_POST['nome_9'];
$nome_10 = $_POST['nome_10'];
 

$sql = "UPDATE receber SET aluno = '$nome_1', nome = '$nome_2', descricao = '$nome_3', valor = '$nome_4', desconto = '$nome_5', acrescimo = '$nome_6', pago = '$nome_7', data_baixa = '$nome_8', vencimento = '$nome_9', emissao = '$nome_10' WHERE id= $id";




if (mysqli_query($conn, $sql)) {
    echo "Contas a receber atualizado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>