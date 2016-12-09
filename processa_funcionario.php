<?php
include ("conexao.php");
?>
<?php


//referencia a class funcionario.

require_once "class_funcionario.php"; 


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg']; 
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone']; 
$matricula = $_POST['matricula'];
$estadocivil = $_POST['estadocivil'];
$nacionalidade = $_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$ufnaturalidade = $_POST['ufnaturalidade'];
$admissao = $_POST['admissao'];
$saida = $_POST['saida'];
$sexo = $_POST['sexo'];
$deficiente = $_POST['deficiente'];
$obsdeficiente = $_POST['obsdeficiente'];
$nomepai = $_POST['nomepai'];
$nomemae = $_POST['nomemae'];
$apelido = $_POST['apelido'];
$funcao= $_POST['funcao'];
$numcarteira = $_POST['numcarteira'];
$seriecarteira = $_POST['seriecarteira'];
$uf_naturalidade= $_POST['uf_naturalidade'];
$turnotrab = $_POST['turnotrab'];
$tipotrab = $_POST['tipotrab'];
$limitacao =$_POST ['limitacao'];
$tipo_lim =$_POST ['tipo_lim'];

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
$prd->setNome_25($limitacao);
$prd->setNome_26($tipo_lim);




$sql = "INSERT INTO funcionario(nome, cpf, rg, nascimento,telefone, matricula, estadocivil, nacionalidade, naturalidade, ufnaturalidade, admissao, saida, sexo, deficiente, obsdeficiente,  nomepai, nomemae, apelido, funcao, numcarteira, seriecarteira, uf_naturalidade, turnotrab, tipotrab,limitacao,tipo_lim) VALUES ('".$prd->getNome_1()."', '".$prd->getNome_2()."', '".$prd->getNome_3()."', '".$prd->getNome_4()."', '".$prd->getNome_5()."', '".$prd->getNome_6()."', '".$prd->getNome_7()."', '".$prd->getNome_8()."', '".$prd->getNome_9()."', '".$prd->getNome_10()."', '".$prd->getNome_11()."', '".$prd->getNome_12()."', '".$prd->getNome_13()."', '".$prd->getNome_14()."' , '".$prd->getNome_15()."', '".$prd->getNome_16()."', '".$prd->getNome_17()."' , '".$prd->getNome_18()."', '".$prd->getNome_19()."', '".$prd->getNome_20()."' , '".$prd->getNome_21()."', '".$prd->getNome_22()."', '".$prd->getNome_23()."' , '".$prd->getNome_24()."','".$prd->getNome_25()."','".$prd->getNome_26()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
