<?php
include ("conexao.php");
?>

<?php

$id = $_POST['id'];
$nome_1 = $_POST['nome_1'];
$nome_2 = $_POST['nome_2'];
$nome_3 = $_POST['nome_3'];
$nome_4 = $_POST['nome_4'];
$nome_5 = $_POST['nome_5']; 
$nome_6 = $_POST['nome_6'];


$sql = "UPDATE usuario SET usuario='$nome_1',nome ='$nome_2',senha = '$nome_3', contrasenha = '$nome_4', email = '$nome_5',block = '$nome_6' WHERE id= $id";


if (mysqli_query($conn, $sql)) {
       echo"<script language='javascript' type='text/javascript'>alert('Atulização feita com Successo');window.location.href='usuarios.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>