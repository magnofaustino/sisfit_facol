<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from funcionario where id = $id";

$deletefuncionario = mysqli_query($conn, $result);

if ($deletefuncionario) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='funcionario.php';</script>";
         
}
?>