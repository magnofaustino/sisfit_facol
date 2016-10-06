<?php
include ("conexao.php");
?>
<?php

require_once "class_fornecedor.php"; 
$con = mysql_connect("localhost", "root", "sos101os") or die ("erro ao conectar ao BD");
$razao =$_GET['razao'];
$nomefantasia =$_GET['nomefantasia'];
$cpf = $_GET['cpf_cnpj'];
$telefone = $_GET['telefone']; 
$tipo =$_GET['tipo'];
$email = $_GET['email'];
$endereco = $_GET['endereco']; 
$bairro =$_GET['bairro'];
$municipio = $_GET['municipio'];
$numero = $_GET['numero']; 
$cep =$_GET['cep'];


if($con){
 echo("banco conectado com sucesso");   
}


 $s= mysql_select_db("sisfit") or die ("erro ao selecionar o BD PROJETO BAR");
if($s){

echo("banco selecionado com sucesso");
}

$prd=new fornecedor();
$prd->setNome($razao);
$prd->setNomefantasia($nomefantasia);
$prd->setCpf($cpf_cnpj);
$prd->setTelefone($telefone);
$prd->setTipo($tipo);
$prd->setEmail($email);
$prd->setEndereco($endereco);
$prd->setBairro($bairro);
$prd->setMunicipio($municipio);
$prd->setNumero($numero);
$prd->setCep($cep);


$result = mysql_query("insert into fornecedor(nome_fornecedor) values ('".$prd->getNome()."')") or die ("erro ao inserir os dados no bando");

if($result){

echo("banco inserido sucesso");
}

?>



   