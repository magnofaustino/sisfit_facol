<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from perimetros where id = $id";

$deleteperimetro = mysqli_query($conn, $result);

if ($deleteperimetro) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com Successo');window.location.href='perimetro.php';</script>";

}
?>