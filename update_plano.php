<?php
include ("conexao.php");
?>

<?php

$id =$_POST['id'];
$nome_plano = $_POST['nome_plano'];
$atividades_plano = $_POST['atividades_plano'];
$tipo_plano = $_POST['tipo_plano'];
$duracao_plano = $_POST['duracao_plano'];
$numero_aula = $_POST['numero_aula']; 
$vl_matricula = $_POST['vl_matricula'];
$vl_mensal = $_POST['vl_mensal'];
$data_cadastro = $_POST['data_cadastro'];

$sql = "UPDATE planos SET nome_plano='$nome_plano',atividades_plano ='$atividades_plano',tipo_plano ='$tipo_plano', duracao_plano ='$duracao_plano', numero_aula ='$numero_aula',vl_matricula ='$vl_matricula',vl_mensal ='$vl_mensal', data_cadastro ='$data_cadastro' WHERE id= '$id'";



if (mysqli_query($conn, $sql)) {
       echo"<script language='javascript' type='text/javascript'>alert('Atulização feita com Successo');window.location.href='plano.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>