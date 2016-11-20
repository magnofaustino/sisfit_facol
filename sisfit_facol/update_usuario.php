<?php
include ("conexao.php");
?>

<?php

$id = $_GET['id'];
$nome_1 = $_GET['nome_1'];
$nome_2 = $_GET['nome_2'];
$nome_3 = $_GET['nome_3'];
$nome_4 = $_GET['nome_4'];
$nome_5 = $_GET['nome_5']; 
$nome_6 = $_GET['nome_6'];


$sql = "UPDATE usuarios SET usuario='$nome_1',nome ='$nome_2',senha = '$nome_3', contrasenha = '$nome_4', email = '$nome_5',bloqueado = '$nome_6' WHERE id= $id";


if (mysqli_query($conn, $sql)) {
    echo "Usuario Atualizado com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>