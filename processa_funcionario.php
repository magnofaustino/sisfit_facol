<?php
include ("conexao.php");
?>
<?php


//referencia a class funcionario.

require_once "class_funcionario.php"; 


$nome_funcionario = $_GET['nome'];
$cpf_funcionario = $_GET['cpf'];
$rg_funcionario = $_GET['rg']; 
$nascimento = $_GET['nascimento'];
$telefone = $_GET['telefone']; 
$matricula = $_GET['matricula'];
$estadocivil = $_GET['estadocivil'];
$nacionalidade = $_GET['nacionalidade'];
$naturalidade = $_GET['naturalidade'];
$ufnaturalidade = $_GET['ufnaturalidade'];
$admissao = $_GET['admissao'];
$saida = $_GET['saida'];
$sexo = $_GET['sexo'];
$deficiente = $_GET['deficiente'];
$obsdeficiente = $_GET['obsdeficiente'];
$nomepai = $_GET['nomepai'];
$nomemae = $_GET['nomemae'];
$apelido = $_GET['apelido'];
$funcao= $_GET['funcao'];
$numcarteira = $_GET['numcarteira'];
$seriecarteira = $_GET['seriecarteira'];
$uf_naturalidade= $_GET['uf_naturalidade'];
$turnotrab = $_GET['turnotrab'];
$tipotrab = $_GET['tipotrab'];


$prd=new Funcionario();
$prd->setNome_1($nome);
$prd->setNome_2($cpf);
$prd->setNome_3($rg);
$prd->setNome_4($nascimento);
$prd->setNome_5($telefone);
$prd->setNome_6($matricula);
$prd->setNome_7($estadocivil);
$prd->setNome_8($nacionalidade);
$prd->setNome_9($naturalidade);
$prd->setNome_10($ufnaturalidade);
$prd->setNome_11($admissao);
$prd->setNome_12($saida);
$prd->setNome_13($sexo);
$prd->setNome_14($deficiente);

$prd->setNome_15($obsdeficiente);
$prd->setNome_16($nomepai);
$prd->setNome_17($nomemae);
$prd->setNome_18($apelido);
$prd->setNome_19($funcao);


$prd->setNome_20($numcarteira);
$prd->setNome_21($seriecarteira);
$prd->setNome_22($uf_naturalidade);
$prd->setNome_23($turnotrab);
$prd->setNome_24($tipotrab);





$sql = "INSERT INTO funcionario(nome, cpf, rg, nascimento,telefone, matricula, estadocivil, nacionalidade, naturalidade, ufnaturalidade, admissao, saida, sexo, deficiente, obsdeficiente,  nomepai, nomemae, apelido, funcao, numcarteira, seriecarteira, uf_naturalidade, turnotrab, tipotrab) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."', '".$prd->getNome_8()."', '".$prd->getNome_9()."', '".$prd->getNome_10()."', '".$prd->getNome_11()."', '".$prd->getNome_12()."', '".$prd->getNome_13()."', '".$prd->getNome_14()."' , '".$prd->getNome_15()."', '".$prd->getNome_16()."', '".$prd->getNome_17()."' , '".$prd->getNome_18()."', '".$prd->getNome_19()."', '".$prd->getNome_20()."' , '".$prd->getNome_21()."', '".$prd->getNome_22()."', '".$prd->getNome_23()."' , '".$prd->getNome_24()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
