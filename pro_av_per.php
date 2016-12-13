<?php
include ("conexao_personal.php");
?>

<?php

require_once "class_avalicao.php"; 

$n_aluno=$_POST['n_aluno'];
$obj_atividade =$_POST['obj_atividade'];
$atv_atual = $_POST['atv_atual'];
$tipo_med = $_POST['tipo_med']; 
$tipo_cirg =$_POST['tipo_cirg'];
$tipo_doenca = $_POST['tipo_doenca'];
$obs_aval = $_POST['obs_aval']; 


$prd=new avaliacao();
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
