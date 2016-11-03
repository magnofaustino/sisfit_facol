<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from atividades where id = $id";

$deleteatividade = mysqli_query($conn, $result);

if ($deleteatividade) {
    Echo "Deletado com Sucesso";
}
?>