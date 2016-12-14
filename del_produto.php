<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from produtos where id = $id";

$deleteproduto = mysqli_query($conn, $result);

if ($deletealuno) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='produto.php';</script>";
        
}
?>