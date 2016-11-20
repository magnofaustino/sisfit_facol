<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from fornecedor where id = $id";

$deletefornecedor = mysqli_query($conn, $result);

if ($deletefornecedor) {
    Echo "Deletado com Sucesso";
}
?>