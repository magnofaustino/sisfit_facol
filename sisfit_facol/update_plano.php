<?php
include ("conexao.php");
?>

<?php

$nome_plano = $_GET['nome_plano'];
$atividades_plano = $_GET['atividades_plano'];

$tipo_plano = $_GET['tipo_plano'];
$duracao_plano = $_GET['duracao_plano'];

$numero_aula = $_GET['numero_aula']; 
$vl_matricula = $_GET['vl_matricula'];

$vl_mensal = $_GET['vl_mensal'];
$data_cadastro = $_GET['data_cadastro'];

$sql = "UPDATE tb_plano SET nome_plano='$nome_plano',atividades_plano ='$atividades_plano',tipo_plano = '$tipo_plano', duracao_plano = '$duracao_plano', numero_aula = '$numero_aula',vl_matricula = '$vl_matricula',vl_mensal = '$vl_mensal', data_cadastro = '$data_cadastro' WHERE id= $id";






if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>