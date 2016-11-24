<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from perimetros where id = $id";

$deleteperimetro = mysqli_query($conn, $result);

if ($deleteperimetro) {
    Echo "Deletado com Sucesso";
}
?>