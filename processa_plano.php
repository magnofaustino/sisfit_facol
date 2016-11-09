<?php
include ("conexao.php");
?>

<?php

require_once "class_plano.php"; 

$nome_plano = $_GET['nome_plano'];

$duracao_plano = $_GET['duracao_plano'];
$numero_aula = $_GET['numero_aula']; 
$vl_matricula = $_GET['vl_matricula'];
$vl_mensal = $_GET['vl_mensal'];
$data_cadastro = $_GET['data_cadastro'];

$atividades_plano = $_GET['atividades_plano']
$observacoes_plano = $_GET['observacoes_plano']
$tipo_plano = $_GET['tipo_plano'] 

$prd=new Plano();
$prd->setNome_Plano($nome_plano);
$prd->setDuracao_Plano($duracao_plano);
$prd->setNumero_Aula($numero_aula);
$prd->setValor_Matricula($vl_matricula);
$prd->setValor_Mensalidade($vl_mensal);
$prd->setData_Cadastro($data_cadastro);
$prd->setAtividades_Plano($atividades_plano);
$prd->setObservacoes_Plano($observacoes_plano);
$prd->setTipo_Plano($tipo_plano);
