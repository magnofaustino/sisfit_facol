<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from planos where id = $id";

$deleteplano = mysqli_query($conn, $result);

if ($deleteplano) {
    Echo "Deletado com Sucesso";
}
?>