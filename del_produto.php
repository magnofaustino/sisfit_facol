<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from produtos where id = $id";

$deleteproduto = mysqli_query($conn, $result);

if ($deletealuno) {
    Echo "Deletado com Sucesso";
}
?>