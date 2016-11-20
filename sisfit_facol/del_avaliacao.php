<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from avaliacao where id = $id";

$deleteavaliacao = mysqli_query($conn, $result);

if ($deleteavaliacao) {
    Echo "Deletado com Sucesso";
}
?>