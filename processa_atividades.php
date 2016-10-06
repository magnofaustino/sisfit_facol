<?php

/*     Cadastro de Atividades - Sandro Braz     */

include ("conexao.php");
?>
<?php

$atividade = $_POST['atividade'];
$valor = $_POST['valor'];
$atvtemp = $_POST['atvtemp']; 
$dtini = $_POST['dtini'];
$dtfim = $_POST['dtfim']; 

$prd=new Atividades();
$prd->setAtividade($atividade);
$prd->setValor($valor);
$prd->setAtvtemp($atvtemp);
$prd->setDtini($dtini);
$prd->setDtfim($dtfim);


$result = mysqli_query("insert into atividades(atividade, valor, atvtemp, dtini, dtfim) values ('".$prd->getAtividade()."', '".$prd->getValor()."', '".$prd->getAtvtemp()."','".$prd->getDtini()."','".$prd->getDtfim()."'") or die ("erro ao inserir os dados no banco");
mysqli_close($con);
?>



   

