<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from receber where id = $id";

$deletereceber = mysqli_query($conn, $result);

if ($deletereceber) {
    Echo "Deletado com Sucesso";
}
?>