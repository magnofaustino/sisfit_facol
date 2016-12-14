<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from fornecedor where id = $id";

$deletefornecedor = mysqli_query($conn, $result);

if ($deletefornecedor) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='fornecedores.php';</script>";
         
}
?>