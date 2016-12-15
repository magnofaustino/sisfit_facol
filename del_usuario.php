<?php
include ("conexao.php"); 

    $id = $_GET['tx'];
    
$result = "delete from usuario where id = $id";

$deleteusuario = mysqli_query($conn, $result);

if ($deleteusuario) {
    Echo "<script language='javascript' type='text/javascript'>alert('Deletado com sucesso!');window.location.href='usuarios.php'</script>";
}
?>