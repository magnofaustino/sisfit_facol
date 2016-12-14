<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from tb_aluno where id = $id";

$deletealuno = mysqli_query($conn, $result);

if ($deletealuno) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Sucesso!');window.location.href='aluno.php';</script>";
       
}
?>