<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from pagar where id = $id";

$deletealuno = mysqli_query($conn, $result);

if ($deletealuno) {
    Echo "Deletado com Sucesso";
}
?>