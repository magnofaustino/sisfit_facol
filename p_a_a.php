<?php
include ("conexao_atendente.php");
?>

<?php

require_once "class_aluno.php"; 


$nome =$_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg']; 
$telefone =$_POST['telefone'];
$matricula = $_POST['matricula'];
$estadocivil = $_POST['estadocivil']; 
$nacionalidade =$_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$ufnaturalidade = $_POST['ufnaturalidade']; 
$nascimento =$_POST['nascimento'];
$sexo = $_POST['sexo'];
$deficiente = $_POST['deficiente']; 
$obs_deficiente =$_POST['obs_deficiente'];
$email= $_POST['email'];
$plano = $_POST['plano']; 
$bolsa=$_POST['bolsa'];
$tipo_bolsa= $_POST['tipo_bolsa'];
$horario = $_POST['horario']; 
$dt_cadastro =$_POST['dt_cadastro'];
$endereco = $_POST['endereco'];
$numero= $_POST['numero']; 
$bairro =$_POST['bairro'];
$cep = $_POST['cep'];
$orgao_emissor = $_POST['orgao_amissor']; 
$limitacao = $_POST['limitacao'];
$tipo_lim =$_POST['tipo_lim'];

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
$prd->setLimitacao($limitacao);
$prd->setTipo_Lim($tipo_lim);






$sql = "INSERT INTO tb_aluno(nome, cpf, rg, telefone, matricula, est_civil, nacionalidade, naturalidade, uf_natur, dt_nasc, sexo, deficiente, obs_def, email, plano, bolsa, tipo_bolsa, h_treino, dt_cadastro, rua, numero, bairro, cep, orgao_emissor,limitacao,tipo_lim) VALUES ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getRg()."', '".$prd->getTelefone()."', '".$prd->getMatricula()."', '".$prd->getEstadocivil()."', '".$prd->getNacionalidade()."', '".$prd->getNaturalidade()."', '".$prd->getUfnaturalidade()."', '".$prd->getNascimento()."', '".$prd->getSexo()."', '".$prd->getDeficiente()."', '".$prd->getObs_deficiente()."', '".$prd->getEmail()."', '".$prd->getPlano()."', '".$prd->getBolsa()."', '".$prd->getTipo_bolsa()."', '".$prd->getHorario()."', '".$prd->getDt_cadastro()."', '".$prd->getEndereco()."', '".$prd->getNumero()."', '".$prd->getBairro()."', '".$prd->getCep()."', '".$prd->getOrgao_emissor()."','".$prd->getLimitacao()."','".$prd->getTipo_Lim()."')";



if (mysqli_query($conn, $sql)) {
      echo"<script language='javascript' type='text/javascript'>alert('Cadastro Feito con Successo');window.location.href='c_a_a.php';</script>";
          die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>
