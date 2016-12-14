<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from receber where id = $id";

$deletereceber = mysqli_query($conn, $result);

if ($deletereceber) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='receber.php';</script>";
}
?>