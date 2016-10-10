<?php

/*     Cadastro de Atividades - Sandro Braz     */

include ("conexao.php");
?>
<?php
require_once "class_atividades.php"; 


$atividade = $_GET['atividade'];
$valor = $_GET['valor'];
$atvtemp = $_GET['atvtemp']; 
$dtini = $_GET['dtini'];
$dtfim = $_GET['dtfim']; 

$prd=new Atividades();
$prd->setAtividade($atividade);
$prd->setValor($valor);
$prd->setAtvtemp($atvtemp);
$prd->setDtini($dtini);
$prd->setDtfim($dtfim);


$result = mysqli_query($mysqli,"insert into atividades(atividade, valor, atvtemp, dtini, dtfim) values ('".$prd->getAtividade()."', '".$prd->getValor()."', '".$prd->getAtvtemp()."','".$prd->getDtini()."','".$prd->getDtfim()."')");

if($result){

echo("Registro inserido com sucesso");
}
else{
    echo("Erro ao enserir registro");   
}

mysqli_close($mysqli);
?>



   

