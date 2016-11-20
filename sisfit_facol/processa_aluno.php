<?php
include ("conexao.php");
?>

<?php

require_once "class_aluno.php"; 


$nome =$_GET['nome'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg']; 
$telefone =$_GET['telefone'];
$matricula = $_GET['matricula'];
$estadocivil = $_GET['estadocivil']; 
$nacionalidade =$_GET['nacionalidade'];
$naturalidade = $_GET['naturalidade'];
$ufnaturalidade = $_GET['ufnaturalidade']; 
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
$orgao_emissor = $_GET['orgao_amissor']; 


$prd=new Aluno();
$prd->setNome($nome);
$prd->setCpf($cpf);
$prd->setRg($rg);
$prd->setTelefone($telefone);
$prd->setMatricula($matricula);
$prd->setEstadocivil($estadocivil);
$prd->setNacionalidade($nacionalidade);
$prd->setNaturalidade($naturalidade);
$prd->setUfnaturalidade($ufnaturalidade);
$prd->setNascimento($nascimento);
$prd->setSexo($sexo);
$prd->setDeficiente($deficiente);
$prd->setObs_deficiente($obs_deficiente);
$prd->setEmail($email);
$prd->setPlano($plano);
$prd->setBolsa($bolsa);
$prd->setTipo_bolsa($tipo_bolsa);
$prd->setHorario($horario);
$prd->setDt_cadastro($dt_cadastro);


$prd->setEndereco($endereco);
$prd->setNumero($numero);
$prd->setBairro($bairro);
$prd->setCep($cep);
$prd->setOrgao_emissor($orgao_emissor);







$sql = "INSERT INTO tb_aluno(nome, cpf, rg, telefone, matricula, est_civil, nacionalidade, naturalidade, uf_natur, dt_nasc, sexo, deficiente, obs_def, email, plano, bolsa, tipo_bolsa, h_treino, dt_cadastro, rua, numero, bairro, cep, orgao_emissor) VALUES ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getRg()."', '".$prd->getTelefone()."', '".$prd->getMatricula()."', '".$prd->getEstadocivil()."', '".$prd->getNacionalidade()."', '".$prd->getNaturalidade()."', '".$prd->getUfnaturalidade()."', '".$prd->getNascimento()."', '".$prd->getSexo()."', '".$prd->getDeficiente()."', '".$prd->getObs_deficiente()."', '".$prd->getEmail()."', '".$prd->getPlano()."', '".$prd->getBolsa()."', '".$prd->getTipo_bolsa()."', '".$prd->getHorario()."', '".$prd->getDt_cadastro()."', '".$prd->getEndereco()."', '".$prd->getNumero()."', '".$prd->getBairro()."', '".$prd->getCep()."', '".$prd->getOrgao_emissor()."')";



if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>
