<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from pagar where id = $id";

$deletealuno = mysqli_query($conn, $result);

if ($deletealuno) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='pagar.php';</script>";
}
?>