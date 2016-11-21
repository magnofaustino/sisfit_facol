<?php
include ("conexao.php");
?>

<?php

require_once "class_avalicao.php"; 

$n_aluno=$_GET['n_aluno'];
$obj_atividade =$_GET['obj_atividade'];
$atv_atual = $_GET['atv_atual'];
$tipo_med = $_GET['tipo_med']; 
$tipo_cirg =$_GET['tipo_cirg'];
$tipo_doenca = $_GET['tipo_doenca'];
$obs_aval = $_GET['obs_aval']; 


$prd=new avaliacoes();
$prd->setN_Aluno($n_aluno);
$prd->setObj_Atividade($obj_atividade);
$prd->setAtv_Atual($atv_atual);
$prd->setTipo_Med($tipo_med);
$prd->setTipo_Cirg($tipo_cirg);
$prd->setTipo_Doenca($tipo_doenca);
$prd->setObs_Aval($obs_aval);


$sql = "INSERT INTO avaliacao (	n_aluno,obj_atividade,atv_atual,tipo_med,tipo_cirg,tipo_doenca,obs_aval) VALUES ('".$prd->getN_Aluno()."','".$prd->getObj_Atividade()."', '".$prd->getAtv_Atual()."', '".$prd->getTipo_Med()."', '".$prd->getTipo_Cirg()."', '".$prd->getTipo_Doenca()."', '".$prd->getObs_Aval()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>
