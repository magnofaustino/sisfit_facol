<?php
include ("conexao.php");
?>

<?php

require_once "class_plano.php"; 

$nome_plano = $_GET['nome_plano'];
$atividades_plano = $_GET['atividades_plano'];
$tipo_plano = $_GET['tipo_plano'];
$duracao_plano = $_GET['duracao_plano'];
$numero_aula = $_GET['numero_aula']; 
$vl_matricula = $_GET['vl_matricula'];
$vl_mensal = $_GET['vl_mensal'];
$data_cadastro = $_GET['data_cadastro'];

$prd=new plano();
$prd->setNome_Plano($nome_plano);
$prd->setAtividades_Plano($atividades_plano);
$prd->setTipo_Plano($tipo_plano);
$prd->setDuracao_Plano($duracao_plano);
$prd->setNumero_Aula($numero_aula);
$prd->setValor_Matricula($vl_matricula);
$prd->setValor_Mensalidade($vl_mensal);
$prd->setData_Cadastro($data_cadastro);

$sql = "INSERT INTO tb_plano(nome_plano,atividades_plano,tipo_plano,duracao_plano,numero_aula,vl_matricula,vl_mensal,data_cadastro,) VALUES ('".$prd->getNome_Plano()."', '".$prd->getAtividades_Plano()."', '".$prd->getTipo_Plano()."', '".$prd->getDuracao_Plano()."', '".$prd->getValor_Matricula()."', '".$prd->getValor_Mensalidade()."', '".$prd->getData_Cadastro()."')";

if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>

