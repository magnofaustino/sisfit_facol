<?php
include ("conexao.php");
?>

<?php

require_once "class_aluno.php"; 

$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg']; 
$telefone =$_GET['telefone'];
$matricula = $_GET['maticula'];
$estadocivil = $_GET['estadocivil']; 
$nacionalidade =$_GET['nacionalidade'];
$naturalidade = $_GET['naturalidade'];
$uf_naturalidade = $_GET['uf_naturalidade']; 
$nascimento =$_GET['nascimento'];
$sexo = $_GET['sexo'];
$deficiente = $_GET['deficiente']; 
$obs_deficiente =$_GET['obs_deficiente'];
$email= $_GET['email'];
$plano = $_GET['plano']; 
$bolsa=$_GET['bolsa'];
$tipo_bolsa= $_GET['tipo_bolsa'];
$horario = $_GET['horario']; 
$dt_cadastro =$_GET['dt_cadastro'];

$endereco = $_GET['endereco'];
$numero= $_GET['numero']; 
$bairro =$_GET['bairro'];
$cep = $_GET['cep'];
$orgao_emissor = $_GET['orgao_emissor']; 






$prd=new Aluno();
$prd->setNome($nome);
$prd->setCpf($cpf);
$prd->setRg($rg);
$prd->setSexo($sexo);
$prd->setProfissao($profissao);
$prd->setOrgao_emissor($orgao_emissor);
$prd->setDt_nascimento($dt_nascimento);
$prd->setEndereco($endereco);
$prd->setBairro($bairro);
$prd->setEstado($estado);
$prd->setNumero($numero);
$prd->setCep($cep);
$prd->setUf_naturalidade($uf_naturalidade);
$prd->setNaturalidade($naturalidade);
$prd->setNacionalidade($nacionalidade);
$prd->setDeficiente($deficiente);
$prd->setObs_deficiente($obs_deficiente);
$prd->setEmail($email);
$prd->setTelefone($telefone);
$prd->setPlano($plano);
$prd->setBolsa($bolsa);
$prd->setTipo_bolsa($tipo_bolsa);
$prd->setHorario($horario);
$prd->setDt_cadastro($dt_cadastro);



  






$sql = "INSERT INTO funcionario(nome, cpf, rg, telerone, matricula, data_emissao, data_nascimento, sexo, estado_sivil, nacionalidade, uf, naturalidade, deficiente, obs, nome_pai, nome_mae, apelido, funcao, n_carteira, uf_carteira, turno_trabalho, tipo_trabalho) VALUES ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getRg()."', '".$prd->getSexo()."', '".$prd->getProfissao()."', '".$prd->getOrgao_emissor()."', '".$prd->getDt_nascimento()."', '".$prd->getEndereco()."', '".$prd->getBairro()."', '".$prd->getEstado()."', '".$prd->getNumero()."', '".$prd->getCep()."', '".$prd->getUf_naturalidade()."', '".$prd->getNaturalidade()."', '".$prd->getNacionalidade()."', '".$prd->getDeficiente()."', '".$prd->getObs_deficiente()."', '".$prd->getEmail()."', '".$prd->getTelefone()."', '".$prd->getPlano()."', '".$prd->getBolsa()."', '".$prd->getTipo_bolsa()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>



   