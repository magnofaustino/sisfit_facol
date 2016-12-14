<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from avaliacao where id = $id";

$deleteavaliacao = mysqli_query($conn, $result);

if ($deleteavaliacao) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='avaliacoes.php';</script>";
          
}
?>