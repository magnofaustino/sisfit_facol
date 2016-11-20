<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from usuarios where id = $id";

$deleteusuario = mysqli_query($conn, $result);

if ($deleteusuario) {
    Echo "Deletado com Sucesso";
}
?>