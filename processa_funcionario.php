<?php
include ("conexao.php");
?>
<?php


//referencia a class funcionario.

require_once "class_funcionario.php"; 


$nome_funcionario = $_GET['nome'];
$cpf_funcionario = $_GET['cpf'];
$rg_funcionario = $_GET['rg']; 
$telefone_funcionario = $_GET['telefone'];
$matricula_funcionario = $_GET['matricula']; 
$admissao_funcionario = $_GET['admissao'];
$nascimento_funcionario = $_GET['nascimento'];
$sexo_funcionario = $_GET['sexo'];
$estadocivil_funcionario = $_GET['estadocivil'];
$nacionalidade_funcionario = $_GET['nacionalidade'];
$ufnaturalidade_funcionario = $_GET['ufnaturalidade'];
$naturalidade_funcionario = $_GET['naturalidade'];
$deficiente_funcionario = $_GET['deficiente'];
$obsdeficiente_funcionario = $_GET['obsdeficiente'];
$nomepai_funcionario = $_GET['nomepai'];
$nomemae_funcionario = $_GET['nomemae'];
$apelido_funcionario = $_GET['apelido'];
$funcao_funcionario = $_GET['funcao'];
$numcarteira_funcionario = $_GET['numcarteira'];
$seriecarteira_funcionario = $_GET['seriecarteira'];
$ufcarteira_funcionario = $_GET['ufcarteira'];
$turnotrab_funcionario = $_GET['turnotrab'];
$tipotrab_funcionario = $_GET['tipotrab'];


$prd=new Funcionario();
$prd->setNome($nome);
$prd->setCpf($cpf);
$prd->setRg($rg);
$prd->setTelefone($telefone);
$prd->setMatricula($matricula);
$prd->setAdmissao($admissao);
$prd->setNascimento($nascimento);
$prd->setSexo($sexo);
$prd->setEstadocivil($estadocivil);
$prd->setNacionalidade($nacionalidade);
$prd->setUfnaturalidade($ufnaturalidade);
$prd->setNaturalidade($naturalidade);
$prd->setDeficiente($deficiente);
$prd->setObsdeficiente($obsdeficiente);
$prd->setNomepai($nomepai);
$prd->setNomemae($nomemae);
$prd->setApelido($apelido);
$prd->setFuncao($funcao);
$prd->setNumcarteira($numcarteira);
$prd->setSeriecarteira($seriecarteira);
$prd->setUfcarteira($ufcarteira);
$prd->setTurnotrab($turnotrab);
$prd->setTipotrab($tipotrab);


$result = mysql_query("insert into funcionario(nome, cpf, rg, telefone, matricula, admissao) values ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getRG()."', '".$prd->getMatricula()."', '".$prd->getAdmissao()."', '".$prd->getTelefone()."')") or die ("Erro ao inserir os dados no DB");
?>