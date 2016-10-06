
<?php
include "menu.php";
?>
<?php


//queri onde faz referencia a class funcionario.

require_once "class_funcionario.php"; 
//conexão com o mysqls.

$con = mysql_connect("localhost", "root", "sisfit") or die ("Erro ao conectar ao BD");
$nome_fornecedor = $_GET['nome'];
$cpf_funcionario = $_GET['cpf'];
$rg_funcionario = $_GET['rg']; 
$telefone_funcionario = $_GET['telefone'];
$matricula_funcionario = $_GET['matricula']; 
$admissao_funcionario = $_GET['admissao'];


//en baixo é a conexão com o banco que ainda p sisfit n foi criado, as informações aqui contidas são referente ao bando do projeto antigo.
if($con){
 echo("Banco conectado com sucesso");   
}

// todas as informações aqui a baixo estão desatualizadas, aguardando a criação do banco e de suas respectivas tabelas.

 $s= mysql_select_db("sisfit") or die ("Erro ao conectar o Sisfit Db");
if($s){

echo("Banco Conectado com Sucesso");
}

$prd=new Funcionario();
$prd->setNome($nome);
$prd->setCpf($cpf);
$prd->setRg($rg);
$prd->setTelefone($telefone);
$prd->setMatricula($matricula);
$prd->setAdmissao($admissao);


$result = mysql_query("insert into funcionario(nome, cpf, rg, telefone, matricula, admissao) values ('".$prd->getNome()."', '".$prd->getCpf()."', '".$prd->getRG()."', '".$prd->getMatricula()."', '".$prd->getAdmissao()."', '".$prd->getTelefone()."')") or die ("Erro ao inserir os dados no DB");
?>