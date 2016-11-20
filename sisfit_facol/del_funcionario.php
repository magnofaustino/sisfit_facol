<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from funcionario where id = $id";

$deletefuncionario = mysqli_query($conn, $result);

if ($deletefuncionario) {
    Echo "Deletado com Sucesso";
}
?>