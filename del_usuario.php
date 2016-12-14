<?php

    $id = $_GET['tx'];
     include ("conexao.php"); 

$result = "delete from usuarios where id = $id";

$deleteusuario = mysqli_query($conn, $result);

if ($deleteusuario) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com sucesso!');window.location.href='usuarios.php'</script>";
}
?>