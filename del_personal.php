<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from personal where id = $id";

$deletepersonal = mysqli_query($conn, $result);

if ($deletepersonal) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo!');window.location.href='personal.php';</script>";
       
}
?>