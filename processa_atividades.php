<?php

/*     Cadastro de Atividades - Sandro Braz     */

include ("conexao.php");
?>
<?php
require_once "class_atividades.php"; 


$atividade = $_POST['atividade'];
$valor = $_POST['valor'];
$duracao_aula = $_POST['duracao_aula'];
$atvtemp = $_POST['atvtemp']; 
$dtini = $_POST['dtini'];
$dtfim = $_POST['dtfim']; 

$prd=new Atividades();
$prd->setAtividade($atividade);
$prd->setValor($valor);
$prd->setduracao_aula($duracao_aula);
$prd->setAtvtemp($atvtemp);
$prd->setDtini($dtini);
$prd->setDtfim($dtfim);


$result = mysqli_query($conn,"insert into atividades(atividade, valor, duracao_aula, atvtemp, dtini, dtfim) values ('".$prd->getAtividade()."', '".$prd->getValor()."', '".$prd->getDuracao_aula()."', '".$prd->getAtvtemp()."','".$prd->getDtini()."','".$prd->getDtfim()."')");

if($result){

  echo"<script language='javascript' type='text/javascript'>alert('Cadastro feito com Successo!');window.location.href='atividades.php';</script>";
          die();
}
else{
    echo("Erro ao enserir registro");   
}

mysqli_close($conn);
?>



   

